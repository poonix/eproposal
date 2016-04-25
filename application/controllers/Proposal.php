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
	   
	    $this->is_logged();
        
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
        $this->is_logged();
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script-createproposal', NULL, TRUE);
        
        //==== Get Data ====
		$id_p						= '';
        $data['load_provinsi'] 		= $this->proposal_model->select_dropdown_provinsi();
        $data['load_kabupaten'] 	= $this->proposal_model->select_dropdown_kabupaten($id_p);
		$id_k						= '';
        $data['load_kegiatan'] 		= $this->proposal_model->select_dropdown_kegiatan();
        $data['load_sub_kegiatan']	= $this->proposal_model->select_dropdown_sub_kegiatan($id_k);
        
		$this->template->view('page/proposal/create-proposal',$data);
    }
    
    public function detail()
    {
        $this->is_logged();
        //Set Head Content
		$head['title'] = 'proposal detail' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/detail-script', NULL, TRUE);

        
        $this->template->view('page/proposal/proposal-detail',$data);
    }
	
	//Function: Get List of City, depends on Province
	public function get_cities()
	{
        //Get Data
		$id_p 			= $_GET['provinsi'];
        $load_cities	= $this->proposal_model->select_dropdown_kabupaten($id_p);
		
        //Load Data
		$aattrib_c 		= array('id'=>'kabupaten','class'=>'form-control');
		echo form_dropdown('kabupaten', $load_cities, $aattrib_c);
	}
	
	//Function: Get List of Sub Kegiatan, depends on Kegiatan
	public function get_sub_kegiatan()
	{
        //Get Data
		$id_k 			= $_GET['kegiatan'];
        $load_kegiatan	= $this->proposal_model->select_dropdown_sub_kegiatan($id_k);
		
        //Load Data
		$aattrib_k 		= array('id'=>'subKegiatan','class'=>'form-control');
		echo form_dropdown('subKegiatan', $load_cities, $aattrib_k);
	}
}
