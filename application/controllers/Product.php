<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function addcart(){
        $json = array();
        $data = $this->input->post();
        if(!empty($data)){
            $dataCart = array(  "id_product"=>$data['product_id'],
                                "id_user"=>$data['id_user'],
                                "kuantitas"=>$data['num-product'],
                                "harga"=>$data['harga']*$data['num-product'],
                                "harga_beli"=>$data['harga_beli']*$data['num-product']
                            );
            $insertCart = $this->ProductMod->insert("cart",$dataCart);
              
            $json = array("message"=>'Success',"isfinish"=>true);
        }
        $response = $json;
        echo json_encode($response);
    }

    public function add_cartagain($id){
        $id_pesanan = $id;
        $data = $this->ProductMod->fetch_listpesanan(array("id_pesanan"=>$id));
        $id_user = $this->session->userdata('id_user');
        foreach ($data as $d) {
            $dataCart = array(  "id_product"=>$d->product_id,
                                "id_user"=>$id_user,
                                "kuantitas"=>$d->kuantitas,
                                "harga"=>$d->harga,
                                "harga_beli"=>$d->harga_beli
                            );
            $insertCart = $this->ProductMod->insert("cart",$dataCart);
        }

        redirect(base_url(''));
    }

    public function chackout(){
        $json = array();
        $data = $this->input->post();
        if(!empty($data)){
            for($j=0; $j < count($data['product_id']); $j++){
                $keuntunganbersih += $data['harga_beli'][$j]*$data['kuantitas'][$j];
            }
    
            $datapesanan = array(   "id_user"=>$data['id_user'],
                                    "id_bank"=>$data['id_bank'],
                                    "expedisi"=>$data['expedisi'],
                                    "tgl_pengiriman"=>"",
                                    "total_pembayaran"=>$data['total_pembayaran'],
                                    "total_keuntungan"=>$data['total_pembayaran']-$keuntunganbersih,
                                    "bukti_pembayaran"=>"",
                                    "status"=>"belum_bayar",
                                    "created"=>date("Y-m-d H:i:s"),
                                    "tgl_update"=>date("Y-m-d H:i:s"),    
                                );
                                
            $insertPesanan = $this->ProductMod->insert("pesanan",$datapesanan);
            $lastid =  $this->db->insert_id();

            for ($i=0; $i < count($data['product_id']); $i++) { 
                $listpesanan = array(   "id_pesanan"=>$lastid,
                                        "id_product"=>$data['product_id'][$i],
                                        "kuantitas"=>$data['kuantitas'][$i],
                                        "harga_beli"=>$data['harga_beli'][$i],
                                        "harga"=>$data['harga'][$i]
                );

                $insertlist = $this->ProductMod->insert("list_pesanan",$listpesanan);

                /* update stok */
                $total = ($data['product_quantity'][$i]-$data['kuantitas'][$i]*$data['product_weight'][$i]);
                $update = $this->ProductMod->update("products",array("product_quantity"=>$total),array("product_id"=>$data['product_id'][$i]));
                $remove = $this->ProductMod->remove("cart",$data['id_cart'][$i]);
            }
        }
            $json = array("message"=>'Success',"isfinish"=>true);
      /*   } */
        redirect(base_url('users/pesanan?status=belum_bayar'));
    }

    public function bayar(){
        $json = array();
        $data = $this->input->post();
        $id_user = $this->session->userdata('id_user');
        $upload_image = $_FILES['cover']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './/assets//images//bukti_pembayaran//';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $datapesanan = array(   "tgl_pengiriman"=>"",
                                    "total_pembayaran"=>$data['total_pembayaran'],
                                    "bukti_pembayaran"=>$new_image,
                                    "status"=>"verifikasi",
                                    "id_toko"=>5,
                                    "tgl_update"=>date("Y-m-d H:i:s"),    
                                );
                                $updatePesanan = $this->ProductMod->update("pesanan",$datapesanan,array("id_pesanan"=>$data['id_pesanan']));

            $datanotifikasi = array( "id_pesanan" => $data['id_pesanan'],
                                     "id_user"=> $id_user,
                                     "for_iduser" => "6",
                                     "message"=> $id_user = $this->session->userdata('nama_user')." Melakukan Pembayaran",
                                     "isread"=>"0",
                                     "created"=>date("Y-m-d H:i:s"), );
                                $insertnotifikasi = $this->ProductMod->insert("notifikasi",$datanotifikasi);
                            }
        redirect(base_url('users/pesanan?status=verifikasi'));
        
    }

    public function terima(){
        $json = array();
        $data = $this->input->post();
        $id_user = $this->session->userdata('id_user');
        $listproduk = $this->ProductMod->fetch_listpesanan(array("id_pesanan"=>$data['id_pesanan']));
        foreach ($listproduk as $lp) {
            $datalist = array("id_product"=>$lp->id_product,
                              "id_user"=> $id_user,
                              "rate"=> $data['rate'],
                              "comment"=> $data['komentar']);
                              $insertlist = $this->ProductMod->insert("rate_product",$datalist);
        }
        $datapesanan = array("status"=>"selesai",
                             "tgl_update"=>date("Y-m-d H:i:s"),    
                            );
        $updatePesanan = $this->ProductMod->update("pesanan",$datapesanan,array("id_pesanan"=>$data['id_pesanan']));

        redirect(base_url('users/pesanan?status=selesai'));
        
    }

    public function kembalikan(){
        $json = array();
        $data = $this->input->post();
        $upload_image = $_FILES['cover']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './/assets//images//bukti_pengembalian//';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('cover')) {
                $new_image = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }

            $datapesanan = array(   
                                    "bukti_keluhan"=>$new_image,
                                    "alasan"=>$data['alasan'],
                                    "status"=>"pengembalian",
                                    "tgl_update"=>date("Y-m-d H:i:s"),    
                                );
                                $updatePesanan = $this->ProductMod->update("pesanan",$datapesanan,array("id_pesanan"=>$data['id_pesanan']));
        }
        redirect(base_url('users/pesanan?status=pengembalian'));
        
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
        redirect(base_url('petani/index/'));        
        }
    }
    

    public function fetchall(){
    	$json = array();
        
        $query = $this->ProductMod->fetch_data();
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchpenawaran(){
        $json = array();
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $query = $this->ProductMod->fetchpenawaran(array("id_user"=>$id));
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchcomment(){
        $json = array();
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $query = $this->ProductMod->fetchcomment(array("id_penawaran"=>$id));
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchallproduct(){
    	$json = array();
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        if($id!=99){
            $query = $this->ProductMod->fetch_dataproduct($id);
        }else{
            $query = $this->ProductMod->fetch_data();
        }
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchallproductsearch(){
    	$json = array();
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        if($id!=99){
            $query = $this->ProductMod->fetch_dataproductsearch($id);
        }else{
            $query = $this->ProductMod->fetch_data();
        }
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchpromo(){
    	$json = array();
        
        $query = $this->ProductMod->fetch_promo();
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchcategory(){
    	$json = array();
        
        $query = $this->ProductMod->fetch_category();
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchlistpromo(){
    	$json = array();
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $query = $this->ProductMod->fetch_listpromo($id);
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function cart(){
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $product = $this->ProductMod->get_cart(array("c.id_user"=>"$id"));
        if(!empty($product)){
            $data = array();
            foreach ($product as $p) {
                $data[] = array("product_id"=>$p->product_id,
                                "product_name"=>$p->product_name,
                                "product_image"=>$p->product_image,
                                "product_weight"=>$p->product_weight,
                                "product_weight_eksekutif"=>$p->product_weight_eksekutif,
                                "product_price"=>$p->product_price,
                                "product_price_seller"=>$p->product_price_seller,
                                "product_price_eksekutif"=>$p->product_price_eksekutif,
                                "product_quantity"=>$p->product_quantity,
                                "harga"=>$p->harga,
                                "harga_beli"=>$p->harga_beli,
                                "kuantitas"=>$p->kuantitas,
                                "id_cart"=>$p->id_cart,
                );
            }
            
            $json = $data;
        }else $json = array();

        $response = $json;
        echo json_encode($response);
    }

    public function removeCart(){
        $json = array();
            if($this->input->post()){
                $data = $this->input->post();
                $update = $this->ProductMod->remove("cart",$data['id']);
                $json = array("message"=>'Success',"isfinish"=>true);
            }
        $response = $json;
        echo json_encode($response);
    }

    public function fetch_pesanan(){
    	$json = array();
        $data = json_decode(file_get_contents("php://input"));
        $status = $data->status;
        $id_user = $this->session->userdata('id_user');
        $query = $this->ProductMod->fetch_pesanan(array("status"=>$status, "id_user"=>$id_user));
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetch_listpesanan(){
    	$json = array();
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;
        $id_user = $this->session->userdata('logged_in');
        $query = $this->ProductMod->fetch_listpesanan(array("id_pesanan"=>$id));
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function fetchbyid(){
        $json = array();
        $id_pesanan = $this->input->post("id_pesanan");
        if(!empty($id_pesanan)){
            $result = $this->ProductMod->getbyidpesanan("pesanan as p",array("id_pesanan"=>$id_pesanan));
            if(!empty($result)){
                $json = $result;
            }
        }   
        $response = $json;
        echo json_encode($response);
    }

    public function search(){
        $search=$this->input->get('title');
        $data['data']=$this->ProductMod->search($search);
        $this->layout->private_temp('farm/search_view',$data);
    }
   

}