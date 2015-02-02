<?php

class MY_Controller extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function pageBuilder($viewList = array()){
        $this->load->view('component/header.php');
        $this->load->view('component/nav.php');
        foreach($viewList as $view){
            $this->load->view($view);
        }
        $this->load->view('component/footer.php');
    }
}

