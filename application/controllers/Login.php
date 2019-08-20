<?php

class Login extends CI_Controller{

    public function __construct(){

        parent::__construct();
        
        $this->load->model('LoginModel');
    }

    public function index(){
        
        $this->load->view('login');

    }

    public function CekLogin(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $where = array(
            'username' => $username,
            'password' => $password
            );

            $cek = $this->LoginModel->cek_login('user',$where)->num_rows();

            if($cek > 0){
 
                $data_session = array(
                    'nama' => $username,
                    'status' => "login"
                    );
     
                $this->session->set_userdata($data_session);
     
                redirect(base_url("Home"));
     
            }else{
                echo "Username dan password salah !";
            }
        


    }

}





?>