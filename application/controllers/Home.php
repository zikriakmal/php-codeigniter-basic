<?php

class Home extends CI_Controller{

    public function index(){

        $tes = array('title'=>'Home');
        $this->load->view('Home',$tes);

    }

    

}




?>