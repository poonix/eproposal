<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed.');

class MY_Controller extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        
        $this->output->set_header("Last-Modified: " . gmdate( "D, j M Y H:i:s" ) . " GMT"); 
        $this->output->set_header("Expires: " . gmdate( "D, j M Y H:i:s", time() ) . " GMT"); 
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate"); 
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0", FALSE); 
        $this->output->set_header("Pragma: no-cache"); 
     
		date_default_timezone_set("Asia/Jakarta");
    }
	
	public function is_logged()
    {
        if ($this->session->userdata('logged_in') == FALSE) redirect('sign-in');
    }
}