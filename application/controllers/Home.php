<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __Construct(){
        parent ::__construct();
        $this->CI =& get_instance();
       /*  if ( ! $this->session->userdata('logged_in')){ 
            redirect(base_url());
        } */
    }

    public function index(){
        $data['title'] = "Meet your next fav book";
        $data['artikel'] = $this->ProductMod->get_artikel();
    	$this->layout->private_temp('farm/product.php',$data);
    }

    public function productdetail($id){
        
        $product = $this->ProductMod->get_product($id);
        $allproduct = $this->ProductMod->fetch_data();
        $rate = $this->ProductMod->getrate($id);
        $data['rate'] = $rate;
        $data['product'] = $product;
        $data['allproduct'] = $allproduct;
        $this->layout->private_temp('farm/product_detail.php',$data);
    }

     public function toko($id){ 
        $product = $this->ProductMod->fetch_toko($id);
        $data['product'] = $product;
        $this->layout->private_temp('farm/toko.php',$data);
    }

    public function cart(){
        $product = $this->ProductMod->get_cart(array("c.id_user"=>"1"));
        $allproduct = $this->ProductMod->fetch_data();
        if(!empty($product)){
            $data = array(
                'cart' => $product,
                'allproduct' => $allproduct
            );
        }
        $this->layout->private_temp('farm/cart.php',$data);
    }

    public function chackout(){
        $data['bank'] = $this->ProductMod->fetchdatabank();
        $data['metode'] = $this->ProductMod->fetchmetode();
        $this->layout->private_temp('farm/chackout.php',$data);
    }

    public function product(){
        $id = $_GET['category'];
        $category = $this->ProductMod->get_category($id);
        foreach ($category as $c) {
            $data['category'] = $c->name_category;
        }
        $this->layout->private_temp('farm/product.php',$data);
    }

    public function Artikel(){
        
        $data['artikel'] = $this->ProductMod->get_artikel();
        $this->layout->private_temp('farm/artikel.php',$data);
    }

     public function artikeldetail($id){
        
        $artikel = $this->ProductMod->getartikel($id);
        $data['artikel'] = $artikel;
        $this->layout->private_temp('farm/artikeldetail.php',$data);
    }
}