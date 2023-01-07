<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    function __Construct(){
        parent ::__construct();
        $this->CI =& get_instance();
    }


    public function chackoutUser(){
        $json = array();
        $data = json_decode(file_get_contents("php://input"));
        $id = $data->id;

        $query = $this->UserMod->get_user($id);
        $json = $query;

        $response = $json;
        echo json_encode($response);
    }

    public function edit_profile($id){
        $data['user'] = $this->UserMod->get_user($id);
        $this->layout->private_temp('user/edit_profile',$data);
    }

    public function update_profile()
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
            'img_profile' => $new_image,
        );
        $update = $this->ProductMod->update("user",$update,array("id_user"=>$id));
        $this->CI->session->set_userdata('img_profile',$new_image);
        redirect('users/edit_profile/'.$id);
    }

    public function pesanan(){
        $pesanan = $this->ProductMod->fetch_pesanan_batas();
        foreach ($pesanan as $p) {
            $id_pesanan = $p->id_pesanan;
            $batas = $p->batas;
            $created = $p->created;
            if(strtotime($batas)<=strtotime("NOW")){
                $this->ProductMod->delete("pesanan",array("id_pesanan"=>$id_pesanan));
                $this->ProductMod->delete("list_pesanan",array("id_pesanan"=>$id_pesanan));
            }

        }
        
        $this->layout->private_temp('user/pesanan');
    }
}