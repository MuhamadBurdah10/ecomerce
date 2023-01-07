<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __Construct(){
        parent ::__construct();
        $this->CI =& get_instance();
    }

    public function index(){
        if($this->input->post()){
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $data = array("password"=>md5($password),
                          "email"=>$email              
                    );
            $result = $this->UserMod->fetchdata($data);
            if(!empty($result)){
                //update lastlogon
                $session_data = array(
                    'id_user' =>$result->id_user,
                    'email' =>$result->email,
                    'no_hp' =>$result->no_hp,
                    'jenis_user'=>$result->jenis_user,
                    'nama_user'=>$result->nama_user,
                    'img_profile'=>$result->img_profile,
                    'logged_in' =>TRUE
                );
                $this->CI->session->set_userdata($session_data);

                if($result->jenis_user == "admin"){
                    $this->session->set_flashdata("flash","success");
                    redirect(base_url('admin'));
                } elseif ($result->jenis_user == "petani") {
                   $this->session->set_flashdata("flash","success");
                    redirect(base_url('petani'));
                }
                else{
                    $this->session->set_flashdata("flash","success");
                    redirect(base_url('home'));
                }
            }else{
                $this->session->set_flashdata("flash","error");
                redirect(base_url('home'));
            }

        }
    }

    public function sign_out(){
        $this->CI->session->sess_destroy();
        session_start();
        redirect(base_url());
    }

    public function daftar(){
        $this->load->view('user/daftar');
    }

    public function signup(){
        if($this->input->post()){
            $data = array(  "nama_user"=>$this->input->post('namal'),
                            "email"=>$this->input->post('email'),
                            "no_hp"=>$this->input->post('phone'),
                            "password"=>md5($this->input->post('pword')),
                            "addres"=>$this->input->post('alamat'),
                            "img_profile"=>"default.png",
                            "jenis_user"=>$this->input->post('jenis_user'));
            $this->UserMod->insert("user",$data);
            redirect(base_url('home'));
        }
    }

}
