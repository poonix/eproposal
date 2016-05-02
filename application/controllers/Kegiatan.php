<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends MY_Controller {

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
	
	//Function: List of kegiatan
	public function index()
	{
        //Check user is logged or not
	    $this->is_logged();
		
		//Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/kegiatan/script/script-kegiatan', NULL, TRUE);
        
		//==== Set Data ====
		$data['load_kegiatan']	= $this->kegiatan_model->select_all_kegiatan();
		
		$this->template->view('page/kegiatan/kegiatan',$data);
	}
	
	//Function: Process of adding kegiatan
	public function process_add_kegiatan()
	{
        //No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'kegiatan');
		}

		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  	=> 'OK',
			'msg'		=> ''
		);

		//==== Get Data ====
		$kegiatan	= $this->security->xss_clean(strip_image_tags($this->input->post('f-ap-kegiatan')));
		$status		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ap-status')));
		$id_user	= $this->session->userdata('sess_user_id');
		
		//==== Check Data ====
		$sql_keg = $this->kegiatan_model->select_kegiatan_by_name($kegiatan);
		
		if($sql_keg->num_rows() == 0) {
			//==== Insert Data ====
			$data_insert	= array(
									'nama_kegiatan'	=> ucwords($kegiatan),
									'is_active' 	=> $status,
									'created_by' 	=> $id_user,
									'created_date' 	=> date('Y-m-d H:i:s')
								);
			$this->kegiatan_model->insert_kegiatan($data_insert);
            
			
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil disimpan.');
		} 
		else //already exists
		{  
			$output = array(
				'result'  	=> 'NG',
				'msg'		=> 'Data sudah ada, mohon masukkan data lainnya.'
			);
			
			//Set session flashdata
			//$this->session->set_flashdata('message_error', 'Email tidak ditemukan, mohon ulangi kembali.');
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Edit kegiatan
	public function edit_kegiatan()
	{
        //Check user is logged or not
	    $this->is_logged();
		
		//Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
		//==== Get Data ====
		$id = $this->uri->segment(2);
		
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/kegiatan/script/script-kegiatan', NULL, TRUE);
        
		//==== Set Data ====
		$data['load_kegiatan']	= $this->kegiatan_model->select_kegiatan_by_id($id);
		
		$this->template->view('page/kegiatan/edit-kegiatan',$data);
	}
	
	//Function: Process of editing kegiatan
	public function process_edit_kegiatan()
	{
        //No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'kegiatan');
		}

		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  	=> 'OK',
			'msg'		=> ''
		);

		//==== Get Data ====
		$kegiatan	= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-kegiatan')));
		$status		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-status')));
		$id_kegiatan= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-id-kegiatan')));
		$id_user	= $this->session->userdata('sess_user_id');
		
		//==== Check Data ====
		$sql_id_kegiatan = $this->kegiatan_model->select_kegiatan_by_id($id_kegiatan);
		$sql_kegiatan	 = $this->kegiatan_model->select_kegiatan_by_name($kegiatan);
		
		if($sql_kegiatan->num_rows() == 0) {
			//==== Update Data ====
			$data_update	= array(
									'nama_kegiatan'	=> ucwords($kegiatan),
									'is_active' 	=> $status,
									'modified_by' 	=> $id_user,
									'modified_date' => date('Y-m-d H:i:s')
								);
			$this->kegiatan_model->update_kegiatan($id_kegiatan,$data_update);
            
			
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil disimpan.');
		} 
		else //already exists
		{  
			$p = $sql_id_kegiatan->result_array();
			
			if(strcmp($kegiatan,$p[0]['nama_kegiatan'])==0) //'Nama provinsi' exactly the same as previous name
			{
				//==== Update Data ====
				$data_update	= array(
										'is_active' 	=> $status,
										'modified_by' 	=> $id_user,
										'modified_date' => date('Y-m-d H:i:s')
									);
				$this->kegiatan_model->update_kegiatan($id_kegiatan,$data_update);
				
				
				//Set session flashdata
				$this->session->set_flashdata('message_success', 'Data telah berhasil disimpan.');
			}
			else
			{
				$output = array(
					'result'  	=> 'NG',
					'msg'		=> 'Data sudah ada, mohon masukkan data lainnya.'
				);
			}
			//Set session flashdata
			//$this->session->set_flashdata('message_error', 'Email tidak ditemukan, mohon ulangi kembali.');
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Process of deleting kegiatan
	public function process_delete_kegiatan()
	{
		//Check user is logged or not
	    $this->is_logged();

		//==== Get Data ====
		$id_kegiatan	= $this->security->xss_clean(strip_image_tags($this->input->post('f-dp-id-kegiatan'))); 
		
		if($id_kegiatan != '') {
			//==== Delete Data ====
			$this->kegiatan_model->delete_kegiatan($id_kegiatan);
            
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil dihapus.');
		} 
		else
		{
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Terjadi kesalahan, mohon ulangi kembali.');
		}
		
		redirect('daftar-kegiatan');
	}
	
	//Function: List of Sub Kegiatan
	public function sub_kegiatan()
	{
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/kegiatan/script/script-sub-kegiatan', NULL, TRUE);
        
        //==== Set Data ====
        $data['load_subkegiatan']	= $this->kegiatan_model->select_all_subkegiatan();
        $data['load_kegiatan'] 	= $this->kegiatan_model->select_dropdown_kegiatan();
        
		$this->template->view('page/kegiatan/sub_kegiatan',$data);
	}
	
	//Function: Process of adding Kabupaten
	public function process_add_kabupaten()
	{
        //No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}

		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  	=> 'OK',
			'msg'		=> ''
		);

		//==== Get Data ====
		$provinsi	= $this->security->xss_clean(strip_image_tags($this->input->post('f-ak-provinsi')));
		$jenis		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ak-jenis')));
		$kabupaten	= $this->security->xss_clean(strip_image_tags($this->input->post('f-ak-kabupaten')));
		$status		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ak-status')));
		$id_user	= $this->session->userdata('sess_user_id');
		
		//==== Check Data ====
		$sql_kab = $this->location_model->select_provinsi_kabupaten($provinsi,$kabupaten);
		
		if($sql_kab->num_rows() == 0) {
			//==== Insert Data ====
			$data_insert	= array(
									'id_provinsi'	=> $provinsi,
									'jenis_wilayah' => $jenis,
									'nama_kota' 	=> ucwords($kabupaten),
									'is_active' 	=> $status,
									'created_by' 	=> $id_user,
									'created_date' 	=> date('Y-m-d H:i:s')
								);
			$this->location_model->insert_kabupaten($data_insert);
            
			
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil disimpan.');
		} 
		else //already exists
		{  
			$output = array(
				'result'  	=> 'NG',
				'msg'		=> 'Data sudah ada, mohon masukkan data lainnya.'
			);
			
			//Set session flashdata
			//$this->session->set_flashdata('message_error', 'Email tidak ditemukan, mohon ulangi kembali.');
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Edit Kabupaten
	public function edit_kabupaten()
	{
        //Check user is logged or not
	    $this->is_logged();
		
		//Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
		//==== Get Data ====
		$id = $this->uri->segment(2);
		
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/location/script/script-kabupaten', NULL, TRUE);
        
		//==== Set Data ====
        $data['load_prov'] 	= $this->location_model->select_dropdown_provinsi();
		$data['load_kab']	= $this->location_model->select_kabupaten_by_id($id);
		
		$this->template->view('page/location/edit-kabupaten',$data);
	}
	
	//Function: Process of editing Kabupaten
	public function process_edit_kabupaten()
	{
        //No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}

		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  	=> 'OK',
			'msg'		=> ''
		);

		//==== Get Data ====
		$provinsi	= $this->security->xss_clean(strip_image_tags($this->input->post('f-ek-provinsi')));
		$jenis		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ek-jenis')));
		$kabupaten	= $this->security->xss_clean(strip_image_tags($this->input->post('f-ek-kabupaten')));
		$status		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ek-status')));
		$id_kab		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ek-id-kabupaten')));
		$id_user	= $this->session->userdata('sess_user_id');
		
		//==== Check Data ====
		$sql_id_kab = $this->location_model->select_kabupaten_by_id($id_kab);
		$sql_kab	= $this->location_model->select_provinsi_kabupaten($provinsi,$kabupaten);
		
		if($sql_kab->num_rows() == 0) {
			//==== Update Data ====
			$data_update	= array(
									'id_provinsi'	=> $provinsi,
									'jenis_wilayah'	=> $jenis,
									'nama_kota'		=> ucwords($kabupaten),
									'is_active' 	=> $status,
									'modified_by' 	=> $id_user,
									'modified_date' => date('Y-m-d H:i:s')
								);
			$this->location_model->update_kabupaten($id_kab,$data_update);
            
			
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil disimpan.');
		} 
		else //already exists
		{  
			$p = $sql_id_kab->result_array();
			
			if($provinsi==$p[0]['id_provinsi'] and strcmp($kabupaten,$p[0]['nama_kota'])==0) //'Nama kota' exactly the same as previous name
			{
				//==== Update Data ====
				$data_update	= array(
										'jenis_wilayah' => $jenis,
										'is_active' 	=> $status,
										'modified_by' 	=> $id_user,
										'modified_date' => date('Y-m-d H:i:s')
									);
				$this->location_model->update_kabupaten($id_kab,$data_update);
				
				
				//Set session flashdata
				$this->session->set_flashdata('message_success', 'Data telah berhasil disimpan.');
			}
			else
			{
				$output = array(
					'result'  	=> 'NG',
					'msg'		=> 'Data sudah ada, mohon masukkan data lainnya.'
				);
			}
			//Set session flashdata
			//$this->session->set_flashdata('message_error', 'Email tidak ditemukan, mohon ulangi kembali.');
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Process of deleting Kabupaten
	public function process_delete_kabupaten()
	{
		//Check user is logged or not
	    $this->is_logged();

		//==== Get Data ====
		$id_kab	= $this->security->xss_clean(strip_image_tags($this->input->post('f-dp-id-kab'))); 
		
		if($id_kab != '') {
			//==== Delete Data ====
			$this->location_model->delete_kabupaten($id_kab);
            
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil dihapus.');
		} 
		else
		{
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Terjadi kesalahan, mohon ulangi kembali.');
		}
		
		redirect('daftar-kabupaten');
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
	
	//Function: Get List of City, depends on Province
	public function get_cities()
	{
        //Get Data
		$id_p 			= $_GET['province'];
        $load_cities	= $this->location_model->select_dropdown_kabupaten($id_p);
		
        //Load Data
		$aattrib_c 		= array('id'=>'f-ep-city','class'=>'form-control');
		echo form_dropdown('f-ep-city', $load_cities, $aattrib_c);
	}
}
