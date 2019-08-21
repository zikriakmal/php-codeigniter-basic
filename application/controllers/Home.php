<?php

class Home extends CI_Controller{

    public function index(){
        if(isset($_SESSION['nama'])){
        $tes = array('title'=>'Home');
        $this->load->view('Home',$tes);
        }
        else {

            $this->load->view('Login');
        }
    }

    

}




?>