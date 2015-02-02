<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends MY_Controller {
    
    function __construct(){
        parent::__construct();
    }
    
    public function index()
    {
        $this->pageBuilder([
            "page/home"
        ]);
    }
    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */