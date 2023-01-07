<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMod extends CI_Model {



    function fetchdata(){
      $this->db->select("*");
      $this->db->from("products");
     /* $this->db->join("category c","c.id_category = p.product_kategori");*/
      $query = $this->db->get();
      return $query->result();
    }

    function artikel(){
      $this->db->select("*");
      $this->db->from("artikel");
      $query = $this->db->get();
      return $query->result();
    }

    function fetchdatabank(){
      $this->db->select("*");
      $this->db->from("metode_pembayaran");
      $query = $this->db->get();
      return $query->result();
    }

    function fetchuser(){
        $this->db->select("*");
        $this->db->from("user");
        $query = $this->db->get();
        return $query->result();
      }

    function fetchpenawaran(){
        $this->db->select("*");
        $this->db->from("penawaran p");
        $this->db->join("user u","p.id_petani = u.id_user");
        $this->db->where("p.status != 'batal' and p.status != 'add'");
        $this->db->order_by('p.id_penawaran','desc');
        $query = $this->db->get();
        return $query->result();
      }

    function fetchcomment($data){
        $this->db->select("*");
        $this->db->from("comment c");
        $this->db->join("user u","c.id_user = u.id_user");
        $this->db->where($data);
        $this->db->order_by("created");
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

  public function get_pesanan($index_data=NULL)
//petani produk
    {
       $hasil=$this->db->select('*');
       /*$this->db->join('user u', 'p.id_user = u.id_user')*/
        $this->db->join('pesanan p', 'user.id_user = p.id_user');
        $this->db->from('user');
        
        if($index_data!=NULL){
           $this->db->where('p.id_toko',$index_data);
        } 
        $query = $this->db->get();
        return $query->result_array();
    }

      function fetchtransaksibyid($data){
        $this->db->select("*");
        $this->db->from("pesanan p");
        $this->db->join("user u","p.id_user = u.id_user");
        $this->db->where("status <> 'belum_bayar' AND p.id_pesanan=$data");
        $query = $this->db->get();
        return $query->result();
      }

    function getdata($data){
        $this->db->select("*");
        $this->db->from("products");
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
      }

    function getartikel($data){
        $this->db->select("*");
        $this->db->from("artikel");
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
      }


      function getpenawaran($data){
        $this->db->select("*");
        $this->db->from("penawaran p");
        $this->db->join("user u","p.id_petani = u.id_user");
        $this->db->where($data);
        $query = $this->db->get();
        return $query->result();
      }

      function getpenawaranid($data){
        $this->db->select("*");
        $this->db->from("penawaran p");
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

    function delete($tablename, $data){
        try {
          $this->db->delete($tablename,$data);
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

    function get_transaksi($data){
        $this->db->select("*");
        $this->db->from("pesanan p");
        $this->db->join("user u","p.id_user = u.id_user");
        $this->db->where($data);
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

    function fetchnotifikasi(){
      $this->db->select("*,(select count(*) from notifikasi where isread = 0 ) as belum_dibaca");
      $this->db->from("notifikasi");
      $this->db->order_by("id_notifikasi","desc");
      $query = $this->db->get();
      return $query->result_array();
  }

  function keuntungan(){
    $this->db->select("*");
    $this->db->from("pesanan p");
    $this->db->join('user u','u.id_user = p.id_user');
    $this->db->where("YEARWEEK(p.created)=YEARWEEK(CURDATE()) and p.status != 'belum_bayar'");
    $query = $this->db->get();
    return $query->result();
  }

  function total_keuntungan(){
    $this->db->select("SUM(total_pembayaran) total_pembayaran, SUM(total_pembayaran-total_keuntungan) total_hpp, SUM(total_keuntungan) total_keuntungan , DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY) start_date, ADDDATE(DATE_ADD(CURDATE(), INTERVAL - WEEKDAY(CURDATE()) DAY),INTERVAL 7 DAY) end_date ");
    $this->db->from("pesanan p");
    $this->db->join('user u','u.id_user = p.id_user');
    $this->db->where("YEARWEEK(p.created)=YEARWEEK(CURDATE()) and p.status != 'belum_bayar'");
    $query = $this->db->get();
    return $query->result();
  }

  function penjualan_produk(){
    $this->db->select("*,(select sum(kuantitas) from list_pesanan lp join pesanan p on lp.id_pesanan = p.id_pesanan where lp.id_product = p.product_id and YEARWEEK(p.created)=YEARWEEK(CURDATE()) and p.status != 'belum_bayar') as jumlah");
    $this->db->from("products p");
    $this->db->order_by('jumlah','desc');
    $query = $this->db->get();
    return $query->result();
}

  function estimasi(){
    $this->db->select("sum(total_keuntungan) as estimasi");
    $this->db->from("pesanan");
    $this->db->where("MONTH(created) = MONTH(CURDATE()) AND YEAR(created) = YEAR(CURDATE())");
    $query = $this->db->get();
    return $query->row('estimasi');
  }

  function keuntungan_bulanini(){
    $this->db->select("sum(total_keuntungan) as keuntungan");
    $this->db->from("pesanan");
    $this->db->where("status != 'belum_bayar' and MONTH(created) = MONTH(CURDATE()) and YEAR(created) = YEAR(CURDATE())");
    $query = $this->db->get();
    return $query->row('keuntungan');
  }

  function pesanan_bulanini(){
    $this->db->select("count(*) as pesanan");
    $this->db->from("pesanan");
    $this->db->where("status != 'belum_bayar' and MONTH(created) = MONTH(CURDATE()) and YEAR(created) = YEAR(CURDATE())");
    $query = $this->db->get();
    return $query->row('pesanan');
  }

  function pending(){
    $this->db->select("count(*) as pesanan");
    $this->db->from("pesanan");
    $this->db->where("status = 'verifikasi'");
    $query = $this->db->get();
    return $query->row('pesanan');
  }

  public function getbyid($tablename,$data) {
		$this->db->from($tablename);
		$this->db->where($data);
		$query = $this->db->get();
		return $query->row();
  }
  public function getbyidarray($tablename,$data) {
		$this->db->from($tablename);
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();
  }

  function barchart(){
    $this->db->select("product_name country, jumlah visits");
    $this->db->from("grafik");
    $this->db->where("jumlah != 0");
    $this->db->order_by("visits","desc");
    $query = $this->db->get();
    return $query->result();
  }

  function belumterjual(){
    $this->db->select("*");
    $this->db->from("grafik");
    $this->db->where("jumlah = 0");
    $query = $this->db->get();
    return $query->result();
  }

  function sayur(){
    $this->db->select("product_name country, jumlah visits");
    $this->db->from("grafik");
    $this->db->where("product_kategori = 1 and jumlah != 0");
    $this->db->order_by("visits","desc");
    $query = $this->db->get();
    return $query->result();
  }

  function buah(){
    $this->db->select("product_name country, jumlah visits");
    $this->db->from("grafik");
    $this->db->where("product_kategori = 2 and jumlah != 0");
    $this->db->order_by("visits","desc");
    $query = $this->db->get();
    return $query->result();
  }

  function umbi(){
    $this->db->select("product_name country, jumlah visits");
    $this->db->from("grafik");
    $this->db->where("product_kategori = 3 and jumlah != 0");
    $this->db->order_by("visits","desc");
    $query = $this->db->get();
    return $query->result();
  }

  function daging(){
    $this->db->select("product_name country, jumlah visits");
    $this->db->from("grafik");
    $this->db->where("product_kategori = 4 and jumlah != 0");
    $this->db->order_by("visits","desc");
    $query = $this->db->get();
    return $query->result();
  }

  function ikan(){
    $this->db->select("product_name country, jumlah visits");
    $this->db->from("grafik");
    $this->db->where("product_kategori = 5 and jumlah != 0");
    $this->db->order_by("visits","desc");
    $query = $this->db->get();
    return $query->result();
  }

  function olahan(){
    $this->db->select("product_name country, jumlah visits");
    $this->db->from("grafik");
    $this->db->where("product_kategori = 6 and jumlah != 0");
    $this->db->order_by("visits","desc");
    $query = $this->db->get();
    return $query->result();
  }

  public function get_resi($id)
//petani produk
    {
       $hasil=$this->db->select('*');
        $this->db->join('user u', 'p.id_user = u.id_user');
       /* $this->db->join('pesanan p', 'user.id_user = p.id_user');*/
        $this->db->from('pesanan p');
        $this->db->where('p.id_pesanan',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
  }