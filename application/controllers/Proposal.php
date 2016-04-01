<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	   
	    //$this->is_logged();
        
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script', NULL, TRUE);
        $data['load_pro']   = $this->proposal_model->load_pro();
        
		$this->template->view('page/proposal/index',$data);
	}
    
    public function create_proposal()
    {
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script-createproposal', NULL, TRUE);
        
        //==== Get Data ====
        $data['load_provinsi'] = $this->location_model->select_dropdown_provinsi();
        $data['load_kabupaten'] = $this->location_model->select_dropdown_kabupaten();
        
		$this->template->view('page/proposal/create-proposal',$data);
    }
    
    public function detail()
    {
        //Set Head Content
		$head['title'] = 'proposal detail' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/detail-script', NULL, TRUE);

        
        $this->template->view('page/proposal/proposal-detail',$data);
    }
}
