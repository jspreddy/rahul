<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MY_Controller {
    
    function __construct(){
        parent::__construct();
    }
    
    public function index()
    {
        $this->home();
    }
    public function home(){
        $this->pageBuilder([
            "page/home"
        ]);
    }
    
    public function services(){
        $service = $this->uri->segment(3);
        if($service == false){
            $this->pageBuilder([
                "page/services"
            ]);
            return;
        }
        $this->pageBuilder([
            "page/services/".$service
        ]);
    }
    
    public function products(){
        $this->pageBuilder([
            "page/products"
        ]);
    }
    public function partners(){
        $this->pageBuilder([
            "page/partners"
        ]);
    }
    public function careers(){
        $this->pageBuilder([
            "page/careers"
        ]);
    }
    public function contact(){
        $this->pageBuilder([
            "page/contact"
        ]);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */