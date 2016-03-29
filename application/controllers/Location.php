<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends MY_Controller {

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
	
	//Function: List of Provinsi
	public function provinsi()
	{
        //Check user is logged or not
	    $this->is_logged();
		
		//Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script', NULL, TRUE);
        
		//==== Set Data ====
		$data['load_prov']	= $this->location_model->select_all_provinsi();
		
		$this->template->view('page/location/provinsi',$data);
	}
	
	//Function: List of Kabupaten
	public function kabupaten()
	{
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script', NULL, TRUE);
        
        //==== Set Data ====
        $data['load_kab']	= $this->location_model->select_all_kabupaten();
        
		$this->template->view('page/location/kabupaten',$data);
	}
	
	//Function: List of Kecamatan
	public function kecamatan()
	{
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script', NULL, TRUE);
        
		$this->load->view('page/user/signin',$data);
	}
	
	//Function: List of Desa
	public function desa()
	{
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script', NULL, TRUE);
        
		$this->load->view('page/user/signin',$data);
	}
}
