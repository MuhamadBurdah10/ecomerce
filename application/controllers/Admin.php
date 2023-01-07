<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __Construct(){
        parent ::__construct();
        $this->CI =& get_instance();
        if ($this->session->userdata('jenis_user')!='admin'){ 
            redirect(base_url('home'));
        }
    }

    public function index(){
        $data['estimasi_keuntungan'] = $this->AdminMod->estimasi();
        $data['keuntungan'] = $this->AdminMod->keuntungan_bulanini();
        $data['pesanan'] = $this->AdminMod->pesanan_bulanini();
        $data['pending'] = $this->AdminMod->pending();
        $data['bank'] = $this->AdminMod->fetchdatabank();
       /* if(!empty($this->input->get('category'))){
            $category = $this->input->get('category');
            if($category=="1"){
                $data['title'] = "Penjual produk kategori sayur";
                $data['barchart'] = json_encode($this->AdminMod->sayur());
            }elseif($category=="2") {
                $data['title'] = "Penjual produk kategori buah";
                $data['barchart'] = json_encode($this->AdminMod->buah());
            }elseif($category=="3") {
                $data['title'] = "Penjual produk kategori umbi";
                $data['barchart'] = json_encode($this->AdminMod->umbi());
            }elseif($category=="4") {
                $data['title'] = "Penjual produk kategori daging";
                $data['barchart'] = json_encode($this->AdminMod->daging());
            }elseif($category=="5") {
                $data['title'] = "Penjual produk kategori ikan";
                $data['barchart'] = json_encode($this->AdminMod->ikan());
            }elseif($category=="6") {
                $data['title'] = "Penjual produk kategori olahan hasil tani";
                $data['barchart'] = json_encode($this->AdminMod->olahan());
            }else{
                $data['title'] = "Penjual produk semua kategori";
               /* $data['barchart'] = json_encode($this->AdminMod->barchart());
            }
        }else{
            $data['title'] = "Penjual produk semua kategori";
            $data['barchart'] = json_encode($this->AdminMod->barchart());
        }
        $data['sayur'] = json_encode($this->AdminMod->sayur());
        $data['buah'] = json_encode($this->AdminMod->buah());
        $data['umbi'] = json_encode($this->AdminMod->umbi());
        $data['daging'] = json_encode($this->AdminMod->daging());
        $data['ikan'] = json_encode($this->AdminMod->ikan());
        $data['olahan'] = json_encode($this->AdminMod->olahan());*/
        $this->layout->admin_temp('admin/index',$data);
    }

    public function belumterjual(){
        $data['belum'] = $this->AdminMod->belumterjual();
        $this->layout->admin_temp('admin/list_belumterjual',$data);
    }

    public function akun_bank(){
        $data['bank'] = $this->AdminMod->fetchdatabank();
        $this->layout->admin_temp('admin/akun_bank',$data);
    }

    public function produk(){
        $data['product'] = $this->AdminMod->fetchdata();
        $this->layout->admin_temp('admin/produk',$data);
    }

    public function artikel(){
        $data['artikel'] = $this->AdminMod->artikel();
        $this->layout->admin_temp('admin/artikel',$data);
    }

    public function add(){
        $this->layout->admin_temp('admin/add_produk');
    }

     public function addartikel(){
        $this->layout->admin_temp('admin/add_artikel');
    }

    public function addbank(){
        $this->layout->admin_temp('admin/add_bank');
    }
    public function add_user(){
        $this->layout->admin_temp('admin/add_user');
    }

    public function add_product_penawaran($id){
        $data['product'] = $this->AdminMod->getpenawaranid(array("id_penawaran"=>$id));
        $this->layout->admin_temp('admin/add_product_penawaran',$data);
    }

    public function update($id){
        $data['product'] = $this->AdminMod->getdata(array("product_id"=>$id));
        $this->layout->admin_temp('admin/update_produk',$data);
    }

    public function updateartikel($id){
        $data['artikel'] = $this->AdminMod->getartikel(array("id_artikel"=>$id));
        $this->layout->admin_temp('admin/update_artikel',$data);
    }

    public function update_bank($id){
        $data['bank'] = $this->AdminMod->getbyid("metode_pembayaran",array("id_bank"=>$id));
        $this->layout->admin_temp('admin/update_bank',$data);
    }

    public function edit_user($id){
        $data['user'] = $this->AdminMod->getbyidarray("user",array("id_user"=>$id));
        $this->layout->admin_temp('admin/update_user',$data);
    }

    public function tambah(){

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
                               /* "harga_beli"=>$this->input->post('harga_beli'),
                                "harga_beli_eksekutif"=>$this->input->post('harga_beli_eksekutif'),*/
                                "product_price"=>$this->input->post('product_price'),
                                /*"product_price_seller"=>$this->input->post('product_price_seller'),
                                "product_price_eksekutif"=>$this->input->post('product_price_eksekutif'),*/
                                "product_available"=>$this->input->post('product_available'),
                                /*"product_weight"=>$this->input->post('product_weight'),*/
                                "deskripsi"=>$this->input->post('deskripsi'),
                              /*  "label"=>$this->input->post('label'),*/
                              /*  "product_weight_eksekutif"=>$this->input->post('product_weight_eksekutif'),*/
                                "product_image"=>$new_image,

                );
                
                $insertPesanan = $this->ProductMod->insert("products",$data);

                $this->session->set_flashdata("message","tambah");
                redirect(base_url('admin/produk'));
        
    }

     public function tambahartikel(){

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

                $data = array(  "judul"=>$this->input->post('judul'),
                                "isi_artikel"=>$this->input->post('artikel'),
                                "gambar"=>$new_image,

                );
                
                $insertPesanan = $this->ProductMod->insert("artikel",$data);

                $this->session->set_flashdata("message","tambah");
                redirect(base_url('admin/artikel'));
        
    }


    public function tambah_penawaran(){

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
            $update = $this->ProductMod->update("penawaran",array("status"=>"add"),array("id_penawaran"=>$this->input->post('id_penawaran')));
        $this->session->set_flashdata("message","tambah");
        redirect(base_url('admin/produk'));
    
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

               /* $data = array(  "product_name"=>$this->input->post('product_name'),
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
                                "product_image"=>$new_image,*/
                 $data = array(  "product_name"=>$this->input->post('product_name'),
                               /* "product_kategori"=>$this->input->post('product_kategori'),*/
                                "product_quantity"=>$this->input->post('product_quantity'),
                               /* "harga_beli"=>$this->input->post('harga_beli'),
                                "harga_beli_eksekutif"=>$this->input->post('harga_beli_eksekutif'),*/
                                "product_price"=>$this->input->post('product_price'),
                                /*"product_price_seller"=>$this->input->post('product_price_seller'),
                                "product_price_eksekutif"=>$this->input->post('product_price_eksekutif'),*/
                                "product_available"=>$this->input->post('product_available'),
                                /*"product_weight"=>$this->input->post('product_weight'),*/
                                "deskripsi"=>$this->input->post('deskripsi'),
                              /*  "label"=>$this->input->post('label'),*/
                              /*  "product_weight_eksekutif"=>$this->input->post('product_weight_eksekutif'),*/
                                "product_image"=>$new_image,

                );
                
                $update = $this->ProductMod->update("products",$data,array('product_id'=>$product_id));
                $this->session->set_flashdata("message","update");
            redirect(base_url('admin/produk'));

    }

    public function tambah_bank(){

        $upload_image = $_FILES['cover']['name'];
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './/assets//images//icons//';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('cover')) {
            $new_image = $this->upload->data('file_name');
        } else {
            echo $this->upload->display_errors();
        }
            $data = array(  "nama_bank"=>$this->input->post('nama_bank'),
                            "kode_bank"=>$this->input->post('kode_bank'),
                            "nama_akun"=>$this->input->post('nama_akun'),
                            "no_rek"=>$this->input->post('no_rek'),
                            "warna"=>$this->input->post('warna'),
                            "icon"=>$new_image,

            );
            
            $insertPesanan = $this->ProductMod->insert("metode_pembayaran",$data);

            $this->session->set_flashdata("message","tambah akun bank");
        redirect(base_url('admin/akun_bank'));
    
}

 public function editartikel(){

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
            $data = array(  "judul"=>$this->input->post('judul'),
                            "isi_artikel"=>$this->input->post('artikel'),
                            "gambar"=>$new_image

            );
            
            $update = $this->ProductMod->update("artikel",$data,array("id_artikel"=>$this->input->post('id_artikel')));
            $this->session->set_flashdata("message","update");
            redirect(base_url('admin/artikel'));
}

public function update_bankdata(){

    $upload_image = $_FILES['cover']['name'];
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2048';
    $config['upload_path'] = './/assets//images//icons//';

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('cover')) {
        $new_image = $this->upload->data('file_name');
    } else {
        echo $this->upload->display_errors();
    }

        $data = array(  "nama_bank"=>$this->input->post('nama_bank'),
                        "kode_bank"=>$this->input->post('kode_bank'),
                        "nama_akun"=>$this->input->post('nama_akun'),
                        "no_rek"=>$this->input->post('no_rek'),
                        "warna"=>$this->input->post('warna'),
                        "icon"=>$new_image,

        );
        
        $update = $this->ProductMod->update("metode_pembayaran",$data,array("id_bank"=>$this->input->post('id_bank')));
        $this->session->set_flashdata("message","update");
    redirect(base_url('admin/akun_bank'));

    }

    public function delete($id){
        $this->AdminMod->delete("products",array("product_id"=>$id));
        $this->session->set_flashdata("message","delete");
        redirect(base_url('admin/produk'));

    }

     public function deleteartikel($id){
        $this->AdminMod->delete("artikel",array("id_artikel"=>$id));
        $this->session->set_flashdata("message","delete");
        redirect(base_url('admin/artikel'));

    }

    public function delete_user($id){
        $this->AdminMod->delete("user",array("id_user"=>$id));
        $this->session->set_flashdata("message","delete");
        redirect(base_url('admin/user'));

    }

    public function delete_bank($id){
        $this->AdminMod->delete("metode_pembayaran",array("id_bank"=>$id));
        $this->session->set_flashdata("message","delete");
        redirect(base_url('admin/akun_bank'));

    }

    public function pemesanan(){
       
            $data['product'] = $this->AdminMod->fetchtransaksi();

        $this->layout->admin_temp('admin/pemesanan',$data);
    }

    public function pemesanan_notif(){
        $id = $_GET['id_pesanan'];
        $id_nof = $_GET['id_notifikasi'];
        if(!empty($id)){
            $update = $this->AdminMod->update("notifikasi",array("isread"=>"1"),array("id_notifikasi"=>$id_nof));
            $data['product'] = $this->AdminMod->fetchtransaksibyid($id);
        }

        $this->layout->admin_temp('admin/pemesanan',$data);
    }

    public function detail($id){
        $data['transaksi'] = $this->AdminMod->get_transaksi(array("id_pesanan"=>$id));
        $data['product'] = $this->AdminMod->fetch_listpesanan(array("id_pesanan"=>$id));

        $this->layout->admin_temp('admin/detail_pesanan',$data);
    }

    public function update_status(){
        $id = $this->input->post('id_pesanan');
        $set = $this->input->post('status');
        $tgl_pengiriman = $this->input->post('tgl_pengiriman');
        $this->AdminMod->update("pesanan",array("status"=>$set,"tgl_pengiriman"=>$tgl_pengiriman),array("id_pesanan"=>$id));
        $this->session->set_flashdata("message","update status");
        redirect(base_url('admin/detail/'.$id));
    }

    public function user(){
        $data['user'] = $this->AdminMod->fetchuser();

        $this->layout->admin_temp('admin/user',$data);
    }

    public function penawaran(){
        $data['penawaran'] = $this->AdminMod->fetchpenawaran();

        $this->layout->admin_temp('admin/penawaran',$data);
    }

    public function laporan(){
        $data['keuntungan'] = $this->AdminMod->keuntungan();
        $data['total'] = $this->AdminMod->total_keuntungan();

        $this->layout->admin_temp('admin/laporan_keuntungan',$data);
    }

    public function laporan_produk(){
        $data['penjualan'] = $this->AdminMod->penjualan_produk();

        $this->layout->admin_temp('admin/laporan_penjualanproduk',$data);
    }

    public function nego($id){
        $data['penawaran'] = $this->AdminMod->getpenawaran(array("id_penawaran"=>$id));
        $data['comment'] = $this->AdminMod->fetchcomment(array("id_penawaran"=>$id));
        $this->layout->admin_temp('admin/nego',$data);
    }

    public function comment(){
        $data = $this->input->post();
        if($data){
            $comment = array(   "id_penawaran"=>$data['id_penawaran'],
                                "id_user"=>$data['id_user'],
                                "comment"=>$data['comment'],
                                "created"=>date("Y-m-d H:i:s"), 
                                "createdBy"=>$this->session->userdata['email'],
        );

        $this->AdminMod->insert("comment",$comment);
        redirect(base_url('admin/nego/'.$data['id_penawaran']));        
        }
    }

    public function fetchnotifikasi(){
    	$json = array();
        
        $query = $this->AdminMod->fetchnotifikasi();
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchbyid(){
        $json = array();
        $id_penawaran = $this->input->post("id_penawaran");
        if(!empty($id_penawaran)){
            $result = $this->AdminMod->getbyid("penawaran",array("id_penawaran"=>$id_penawaran));
            if(!empty($result)){
                $json = $result;
            }
        }   
        $response = $json;
        echo json_encode($response);
    }

    public function fetchbyidpesanan(){
        $json = array();
        $id_pesanan = $this->input->post("id_pesanan");
        if(!empty($id_pesanan)){
            $result = $this->AdminMod->getbyid("pesanan",array("id_pesanan"=>$id_pesanan));
            if(!empty($result)){
                $json = $result;
            }
        }   
        $response = $json;
        echo json_encode($response);
    }

    public function status(){
        $data = $this->input->post();
        $this->AdminMod->update("penawaran",array("status"=>$data['status'],"harga_deal"=>$data['harga_deal']),array("id_penawaran"=>$data['id_penawaran']));
        $this->session->set_flashdata("message","ubah status");
        redirect(base_url('admin/penawaran/'));       

    }

    public function tambah_user()
    {
        $upload_image = $_FILES['cover']['name'];


        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }


        $update = array(
            'nama_user' => $this->input->post('nama_user'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'addres' => $this->input->post('alamat'),
            'wilayah' => $this->input->post('wilayah'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'jenis_user' => $this->input->post('jenis_user'),
            'img_profile' => $new_image,
        );
        $update = $this->ProductMod->insert("user",$update);
        $this->CI->session->set_userdata('img_profile',$new_image);
        $this->session->set_flashdata("message","tambah");
        redirect('admin/user');
    }

    public function update_user()
    {
        $upload_image = $_FILES['cover']['name'];


        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/profile/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id=$this->input->post('id_user');

        $update = array(
            'nama_user' => $this->input->post('nama_user'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'addres' => $this->input->post('alamat'),
            'wilayah' => $this->input->post('wilayah'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jk' => $this->input->post('jk'),
            'jenis_user' => $this->input->post('jenis_user'),
            'img_profile' => $new_image,
        );
        $update = $this->ProductMod->update("user",$update,array("id_user"=>$id));
        $this->CI->session->set_userdata('img_profile',$new_image);
        $this->session->set_flashdata("message","ubah");
        redirect('admin/user');
    }

    public function laporan_pdf(){

        $data['keuntungan'] = $this->AdminMod->keuntungan();
        $data['total'] = $this->AdminMod->total_keuntungan();
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('admin/laporan_pdf', $data);
    
    
    }
}
