<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petani extends CI_Controller {

    public function index(){
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')])
        ->row_array();
       /* $data['product'] = $this->ProductMod->get_transaksi();*/
        $this->layout->petani_temp('petani/index');
    }

    public function Produk(){
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')],
        ['id' => $this->session->userdata('id_user')]
         )
        ->row_array();
        
        $data['produk'] = $this->ProductMod->get_productpetani($data['user']['id_user']);
        $this->layout->petani_temp('petani/produknya',$data);
    }

    public function update($id){
        $data['product'] = $this->AdminMod->getdata(array("product_id"=>$id));
        $this->layout->admin_temp('petani/update_produk',$data);
    }

    public function update_status(){
        $id = $this->input->post('id_pesanan');
        $set = $this->input->post('status');
        $tgl_pengiriman = $this->input->post('tgl_pengiriman');
        $tgl_estimasi = $this->input->post('tgl_estimasi');
        
        $upload_image = $_FILES['cover']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './/assets//images//resi//';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

        $this->AdminMod->update("pesanan",array("status"=>$set,"tgl_pengiriman"=>$tgl_pengiriman,"tgl_estimasi"=>$tgl_estimasi,"resi"=>$new_image),array("id_pesanan"=>$id));
        $this->session->set_flashdata("message","update status");
        redirect(base_url('petani/detail/'.$id));
    }

}

    public function update_product(){
            $product_id = $this->input->post('product_id');
            $upload_image = $_FILES['cover']['name'];
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './/assets//images//product//';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
                 $data = array( "product_name"=>$this->input->post('product_name'),
                                "product_quantity"=>$this->input->post('product_quantity'),
                                "product_price"=>$this->input->post('product_price'),
                                "product_available"=>$this->input->post('product_available'),
                                "deskripsi"=>$this->input->post('deskripsi'),
                                "product_image"=>$new_image,
                );
                
                $update = $this->ProductMod->update("products",$data,array('product_id'=>$product_id));
                $this->session->set_flashdata("message","update");
                redirect(base_url('petani/produk'));

    }

    public function pemesanan(){
        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')],
        ['id' => $this->session->userdata('id_user')]
         )
        ->row_array();
        $data['product'] = $this->AdminMod->get_pesanan($data['user']['id_user']);
        $this->layout->petani_temp('petani/pemesanan',$data);
    }

    public function detail($id){
        $data['transaksi'] = $this->AdminMod->get_transaksi(array("id_pesanan"=>$id));
        $data['product'] = $this->AdminMod->fetch_listpesanan(array("id_pesanan"=>$id));
        $this->layout->petani_temp('petani/detailpesanan',$data);
    }

     public function resi($id){
        $data['resi'] = $this->AdminMod->get_resi($id);
       /* var_dump($data);
        die();*/
        $this->layout->petani_temp('petani/resi',$data);
    }

   public function tambah(){

        $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')],
        ['id' => $this->session->userdata('id_user')]
         )
        ->row_array();

            $upload_image = $_FILES['cover']['name'];
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './/assets//images//product//';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

                $data = array(  "product_name"=>$this->input->post('product_name'),
                               /* "product_kategori"=>$this->input->post('product_kategori'),*/
                                "product_quantity"=>$this->input->post('product_quantity'),
                                /*"harga_beli"=>$this->input->post('harga_beli'),
                                "harga_beli_eksekutif"=>$this->input->post('harga_beli_eksekutif'),*/
                                "product_price"=>$this->input->post('product_price'),
                                /*"product_price_seller"=>$this->input->post('product_price_seller'),
                                "product_price_eksekutif"=>$this->input->post('product_price_eksekutif'),*/
                                "product_available"=>$this->input->post('product_available'),
                              /*  "product_weight"=>$this->input->post('product_weight'),*/
                                "deskripsi"=>$this->input->post('deskripsi'),
                                "toko_id"=>$this->input->post('id'),
                               /* "product_weight_eksekutif"=>$this->input->post('product_weight_eksekutif'),*/
                                "product_image"=>$new_image,

                );

                $insertPesanan = $this->ProductMod->insert("products",$data);
                $this->session->set_flashdata("message","tambah");
                redirect(base_url('petani/produk'));
        
    }

    
    public function delete($id){
        $this->AdminMod->delete("products", array("product_id" =>$id));
        $this->session->set_flashdata("message","delete");
        redirect(base_url('petani/produk'));
    }

     public function add(){
          $data['user']= $this->db->get_where('user',
        ['email' => $this->session->userdata('email')],
        ['id' => $this->session->userdata('id_user')]
         );
        $this->layout->petani_temp('petani/tambahproduk');
    }

     /*public function tambahproduk(){

            $upload_image = $_FILES['cover']['name'];
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '2048';
            $config['upload_path'] = './/assets//images//product//';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

                $data = array(  "product_name"=>$this->input->post('product_name'),
                                "product_kategori"=>$this->input->post('product_kategori'),
                                "product_quantity"=>$this->input->post('product_quantity'),
                                "harga_beli"=>$this->input->post('harga_beli'),
                                "harga_beli_eksekutif"=>$this->input->post('harga_beli_eksekutif'),
                                "product_price"=>$this->input->post('product_price'),
                                "product_price_seller"=>$this->input->post('product_price_seller'),
                                "product_price_eksekutif"=>$this->input->post('product_price_eksekutif'),
                                "product_available"=>$this->input->post('product_available'),
                                "product_weight"=>$this->input->post('product_weight'),
                                "deskripsi"=>$this->input->post('deskripsi'),
                                "label"=>$this->input->post('label'),
                                "product_weight_eksekutif"=>$this->input->post('product_weight_eksekutif'),
                                "product_image"=>$new_image,

                );
                
                $insertPesanan = $this->ProductMod->insert("products",$data);

                $this->session->set_flashdata("message","tambah");
                redirect(base_url('admin/produk'));
        
    }
*/

    public function penawaran()
    {
        $id_user = $this->session->userdata('id_user');
        $user = $this->ProductMod->getbyid("user",array('id_user' => $id_user));
        $upload_image = $_FILES['image']['name'];

        if ('$upload_image') {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './/assets//images//penawaran//';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $add = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'no_hp' => $user->no_hp,
            'alamat' => $user->addres,
            'stok' => $this->input->post('stok')*1000,
            'tanggal_pengiriman' => $this->input->post('tanggal_pengiriman'),
            'harga_penawaran' => $this->input->post('price'),
            'jenis_panen' => $this->input->post('jenis_panen'),
            'pesan' => $this->input->post('pesan'),
            'foto_produk' => $new_image,
            'id_petani' => $this->session->userdata('id_user'),
            'status'=>"nego",
        );
        $this->ProductMod->insert("penawaran",$add);
        redirect('petani/index');
    }

    
}