<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class ProductMod extends CI_Model {


    function fetch_data(){
      $this->db->select("*,(select concat(sum(kuantitas),' Terjual') from list_pesanan lp where lp.id_product = product_id) as penjualan,(select sum(kuantitas) from list_pesanan lp where lp.id_product = product_id) as hitung");
      $this->db->from("products p");
      $this->db->order_by("hitung","desc");
      /* $this->db->join('products p','c.id_product = p.product_id'); */
      /* $this->db->where($data); */
      $query = $this->db->get();
      return $query->result_array();
    }

    function fetchdatabank(){
      $this->db->select("*");
      $this->db->from("metode_pembayaran");
      $query = $this->db->get();
      return $query->result();
    }

    function fetchmetode(){
      $this->db->select("*");
      $this->db->from("metode");
      $query = $this->db->get();
      return $query->result();
    }

    function fetch_dataproduct($id){
      $q = $this->db->query("
        SELECT * FROM products where product_kategori = $id;
      ");

      return $q->result_array();
  }

   function fetch_toko($id){
      $q = $this->db->query("
        SELECT * FROM products where toko_id = $id;
      ");

      return $q->result_array();
  }


  function fetch_dataproductsearch($id){
    $q = $this->db->query("
      SELECT * FROM products where product_id = $id;
    ");

    return $q->result_array();
}

    function fetch_promo(){
      $q = $this->db->query("
        SELECT * FROM promo;
      ");

      return $q->result_array();
  }

  function fetch_category(){
    $q = $this->db->query("
      SELECT * FROM category;
    ");

    return $q->result_array();
}


  function get_artikel()
  {
    $q= $this->db->query("

    SELECT * FROM artikel");
    return $q->result_array();
  }

  function get_category($id){
    $q = $this->db->query("
      SELECT name_category FROM category where id_category=$id;
    ");

    return $q->result();
  }


  function fetch_listpromo($id){
    $q = $this->db->query("
      SELECT * FROM list_promo lp INNER JOIN products p on lp.id_product = p.product_id where lp.id_promo=$id;
    ");

    return $q->result_array();
  }

  function get_product($id){
    $q = $this->db->query("
      SELECT * FROM products where product_id = $id;
    ");

    return $q->result_array();
  }

  public function get_productpetani($index_data=NULL)
//petani produk
    {
       $hasil=$this->db->select('user.*, products.product_id, 
        products.product_name,
        products.product_quantity,
        products.product_image ,
        products.product_price,
        products.deskripsi
        ');
        $this->db->join('products', 'user.id_user =products.toko_id');
        $this->db->from('user');
        
        if($index_data!=NULL){
           $this->db->where('products.toko_id',$index_data);
        } 
        $query = $this->db->get();
        return $query->result_array();
    }

  function getartikel($id){
    $q= $this->db->query("
      SELECT * FROM artikel where id_artikel = $id;
      ");
     return $q->result_array();
  }

  function get_cart($data){
    $this->db->select("*");
    $this->db->from("cart c");
    $this->db->join('products p','c.id_product = p.product_id');
    $this->db->where($data);
    $query = $this->db->get();
    return $query->result();
  }

  function fetch_pesanan($data){
    $this->db->select("*,adddate(created, INTERVAL 3 DAY) as batas");
    $this->db->from("pesanan");
    // $this->db->join('products p','c.id_product = p.product_id');
    $this->db->where($data);
    $query = $this->db->get();
    return $query->result();
  }

  function fetchtransaksi(){
        $this->db->select("*");
        $this->db->from("pesanan p");
        $this->db->join("user u","p.id_user = u.id_user");
        $this->db->where("status <> 'belum_bayar'");
        $query = $this->db->get();
        return $query->result();
      }

  function fetch_listpesanan($data){
    $this->db->select("*");
    $this->db->from("list_pesanan lp");
    $this->db->join('products p','lp.id_product = p.product_id');
    $this->db->where($data);
    $query = $this->db->get();
    return $query->result();
  }

   function get_transaksi(){
        $this->db->select("*");
        $this->db->from("pesanan p");
        $this->db->join("user u","p.id_user = u.id_user");
       
        $query = $this->db->get();
        return $query->result();
    }

  function fetchpenawaran($data){
    $this->db->select("*");
    $this->db->from("penawaran p");
    $this->db->join("user u","p.id_petani = u.id_user");
    $this->db->where($data);
    $query = $this->db->get();
    return $query->result();
  }

  function fetchcomment($data){
    $this->db->select("*");
    $this->db->from("comment c");
    $this->db->join("user u","c.id_user = u.id_user");
    $this->db->where($data);
    $query = $this->db->get();
    return $query->result();
}


  function insert($tablename, $data){
    try {
			$this->db->insert($tablename,$data);
			return true;
		} catch (Exception $e) {
			return $e."\n".$this->db->_error_message();;
		}
  }

  function update($tablename, $set, $data){
    try {
        $this->db->set($set);
        $this->db->where($data);
        $this->db->update($tablename);
        return true;
    } catch (Exception $e) {
      return $e."\n".$this->db->_error_message();;
    }
  }

  function remove($tablename, $data){
    $hasil = $this->db->query("DELETE FROM $tablename WHERE id_cart = $data");
    return $hasil;
  }

  function delete($tablename, $data){
    try {
      $this->db->delete($tablename,$data);
      return true;
    } catch (Exception $e) {
      return $e."\n".$this->db->_error_message();;
    }
  }
  

  public function getbyid($tablename,$data) {
		$this->db->from($tablename);
		$this->db->where($data);
		$query = $this->db->get();
		return $query->row();
  }
  
  public function getbyidpesanan($tablename,$data) {
    $this->db->select('*, ADDDATE(created,INTERVAL 3 DAY) batas');
    $this->db->from($tablename);
    $this->db->join('metode_pembayaran mp','mp.id_bank = p.id_bank');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->row();
  }

  public function getrate($id){
    $this->db->select("sum(rate)/count(*) as rate");
    $this->db->from("rate_product");
    $this->db->where(array("id_product"=>$id));
    $query = $this->db->get();
		return $query->row();
  }

  public function search($data){
    $this->db->select("*");
    $this->db->from("products");
    $this->db->like(array("product_name"=>$data));
    $query = $this->db->get();
		return $query->result_array();
  }

  public function fetch_pesanan_batas(){
    $this->db->select("*,adddate(created, INTERVAL 3 day) batas");
    $this->db->from("pesanan");
    $this->db->where("status = 'belum_bayar'");
    $query = $this->db->get();
    return $query->result();
  }

}