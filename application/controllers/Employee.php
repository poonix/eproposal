<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends MY_Controller {

	//Function: List of Employee
    public function list_employee()
    {
        $this->is_logged();
        
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
    	$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/employee/script/script-pegawai', NULL, TRUE);
    	$data['load_user']	= $this->employee_model->select_all_user();
        
    	$this->template->view('page/employee/list-employee',$data);
    }
	
	//Function: Detail of Employee
    public function detail_employee()
    {
        $this->is_logged();
        
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
    	$this->load->view('include/head', $head, TRUE);
        
		//==== Get Data ====
		$id_user					= $this->uri->segment(2);
		
		//==== Set Data ====
		$id_p						= '';
    	$data['load_user']			= $this->employee_model->select_user_by_id($id_user);
		$data['load_activities'] 	= $this->employee_model->select_activities_by_id($id_user);
        $data['id_user']			= $id_user;
        $data['load_provinsi'] 		= $this->location_model->select_dropdown_provinsi();
        $data['load_kabupaten'] 	= $this->location_model->select_dropdown_kabupaten($id_p);
		$data['id_provinsi']		= '0';
		$data['id_kabupaten']		= '0';
		
		//==== Get Data: User ====
		$sql_user 				= $this->employee_model->select_user_by_id($id_user);
		
		if($sql_user->num_rows() > 0)
		{
			$u = $sql_user->result_array();
			//==== Get Data: Provinsi ====
			$sql_provinsi			= $this->location_model->select_provinsi_by_name($u[0]['provinsi']);
			if($sql_provinsi->num_rows() > 0) //Data Exists
			{
				$provinsi 				= $sql_provinsi->result_array();
				$data['id_provinsi']	= $provinsi[0]['id']; 
			}
			
			//==== Get Data: Kabupaten ====
			$sql_kabupaten			= $this->location_model->select_kabupaten_by_name($u[0]['kabupaten']);
			if($sql_kabupaten->num_rows() > 0) //Data Exists
			{
				$kabupaten 				= $sql_kabupaten->result_array();
				$data['id_kabupaten']	= $kabupaten[0]['id'];
			}
		}
		
        //Set Spesific Javascript page
        $data['script']     		= $this->load->view('page/employee/script/script-pegawai', NULL, TRUE);
		
    	$this->template->view('page/employee/detail-employee',$data);
    }
	
	//Function: Process of editing Profile of Employee
    public function process_edit_profile()
    {
		//No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}
		
		
		//Default value is OK. If validations fail result will change to NG.
		$result = 'OK';
		$output = array(
			'result'  		=> $result,
			'msg'			=> ''
		);

		//==== Get Data ====
		$firstname 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-firstname')));
		$lastname 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-lastname')));
		$nip	 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-nip')));
		$email	 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-email')));
		$phone	 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-phone')));
		$province 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-province')));
		$sql_province	= $this->location_model->select_provinsi_by_id($province);
		if($sql_province->num_rows() > 0)
		{
			$p = $sql_province->result_array();
			$n_province = $p[0]['nama_provinsi'];
		}
		else
		{
			$result = 'NG';
		}
		$city 			= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-city')));
		$sql_city		= $this->location_model->select_kabupaten_by_id($city);
		if($sql_city->num_rows() > 0)
		{
			$c = $sql_city->result_array();
			$n_city = $c[0]['nama_kota'];
		}
		else
		{
			$result = 'NG';
		}
		$status			= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-status')));
		$u_email		= $this->security->xss_clean(strip_image_tags($this->input->post('f-hidden-email-user')));
		$id_user		= $this->security->xss_clean(strip_image_tags($this->input->post('f-hidden-id-user')));
		$id_user_m		= $this->session->userdata('sess_user_id');
		$photo 			= $_FILES['f-ep-photo'];
		$def_photo 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-hidden-photo')));
		
		//==== Check Email Existing ====
		$sql_email = $this->employee_model->select_user_by_email($email);
		
		if($sql_email->num_rows() == 0 or $u_email == $email) //Not exists or current user
		{
			//==== Update Data ====
			if($result == 'OK')
			{
				// file paths to store
				$paths= [];

				// get file names
				$filename = $photo['name'];
				
				if($filename == '')
				{
					if($def_photo == '')
					{
						$data_update	= array(
												'nama_depan' 		=> ucwords($firstname),
												'nama_belakang' 	=> ucwords($lastname),
												'nip' 				=> $nip,
												'email' 			=> $email,
												'nomor_telepon'		=> $phone,
												'provinsi' 			=> $n_province,
												'kabupaten' 		=> $n_city,
												'is_active' 		=> $status,
												'modified_by'		=> $id_user_m,
												'modified_date'		=> date("Y-m-d H:i:s")
											);
					}
					else
					{
						$data_update	= array(
												'nama_depan' 		=> ucwords($firstname),
												'nama_belakang' 	=> ucwords($lastname),
												'nip' 				=> $nip,
												'email' 			=> $email,
												'nomor_telepon'		=> $phone,
												'provinsi' 			=> $n_province,
												'kabupaten' 		=> $n_city,
												'foto_profil'		=> $def_photo,
												'is_active' 		=> $status,
												'modified_by'		=> $id_user_m,
												'modified_date'		=> date("Y-m-d H:i:s")
											);
					}
					$this->employee_model->update_user($data_update,$id_user);
					
					$output = array(
						'result'  		=> 'OK',
						'msg'			=> 'Profil telah berhasil diubah.',
						'prov'			=> $n_province,
						'city'			=> $n_city
					);
				}
				else
				{
					//Get new filename
					$ext = end((explode(".", $filename)));
					$new_filename	= 'profil-'.$id_user;
					
					//==== Upload Photo ====
					$config['upload_path'] 		= './assets/images/profile';
					$config['allowed_types'] 	= 'gif|jpg|png';
					$config['max_size']    		= '2000';
					$config['file_name'] 		= $new_filename;
					$config['overwrite'] 		= TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					
					
					if(!$this->upload->do_upload('f-ep-photo')){
						$success = false;
						//break;
					} else {
						$data = $this->upload->data();
						$success = true;
					}
					//==== End of Upload Photo ====
					
					// check and process based on successful status 
					if ($success == true) {
						
						$data_update	= array(
												'nama_depan' 		=> ucwords($firstname),
												'nama_belakang' 	=> ucwords($lastname),
												'nip' 				=> $nip,
												'email' 			=> $email,
												'nomor_telepon'		=> $phone,
												'provinsi' 			=> $n_province,
												'kabupaten' 		=> $n_city,
												'foto_profil'		=> $new_filename.'.'.$ext,
												'is_active' 		=> $status,
												'modified_by'		=> $id_user_m,
												'modified_date'		=> date("Y-m-d H:i:s")
											);
						$this->user_model->update_user($data_update,$id_user);
						
						$output = array(
							'result'  		=> 'OK',
							'msg'			=> 'Profil telah berhasil diubah.'
						);
						
					} else {
						$output = array(
							'result'  		=> 'NG',
							'msg'			=> 'Terjadi kesalahan, mohon ulangi kembali.'
						);
						
						// delete any uploaded files
						foreach ($paths as $file) {
							unlink($file);
						}
					} 
				}
			}
			else
			{
				$output = array(
					'result'  		=> 'NG',
					'msg'			=> 'Terjadi kesalahan, mohon ulangi kembali.'
				);
			}
		}
		else //Already exists
		{
			$output = array(
						'result'  		=> 'EX',
						'msg'			=> 'Email sudah terdaftar, mohon masukkan email lainnya.'
					);
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Process of changing password
    public function process_change_password()
    {
		//No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}
		
		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  		=> 'OK',
			'msg'			=> 'Password telah berhasil diubah.'
		);
		
		//==== Get Data ====
		$password 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-cp-password')));
		$en_password	= do_hash($password);
		$id_user		= $this->security->xss_clean(strip_image_tags($this->input->post('f-hidden-id-user')));
		$id_user_m		= $this->session->userdata('sess_user_id');
		
		//==== Update Data ====
		$data_update	= array(
								'password'			=> $en_password,
								'modified_by'		=> $id_user_m,
								'modified_date'		=> date("Y-m-d H:i:s")
							);
		$sql = $this->employee_model->update_cp_user($data_update,$id_user);
			
		if($sql === FALSE)
		{
			$output = array(
				'result'  		=> 'NG',
				'msg'			=> 'Terjadi kesalahan, mohon ulangi kembali.'
			);
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Process of deleting User
	public function process_delete_user()
	{
		//Check user is logged or not
	    $this->is_logged();

		//==== Get Data ====
		$id_user	= $this->security->xss_clean(strip_image_tags($this->input->post('f-hidden-id-user'))); 
		
		if($id_user != '') {
			//==== Delete Data ====
			$this->employee_model->delete_user($id_user);
            
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil dihapus.');
		} 
		else
		{
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Terjadi kesalahan, mohon ulangi kembali.');
		}
		
		redirect('daftar-pegawai');
	}
	
	//Function: Add Employee
    public function add_employee()
    {
        $this->is_logged();
        
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
    	$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/employee/script/script-pegawai', NULL, TRUE);
        
		//==== Set Data ====
		$id_p						= '';
        $data['load_provinsi'] 		= $this->location_model->select_dropdown_provinsi();
        $data['load_kabupaten'] 	= $this->location_model->select_dropdown_kabupaten($id_p);
		
    	$this->template->view('page/employee/add-employee',$data);
    }
	
	//Function: Process of adding Profile of Employee
    public function process_add_profile()
    {
		//No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}
		
		
		//Default value is OK. If validations fail result will change to NG.
		$result = 'OK';
		$output = array(
			'result'  		=> $result,
			'msg'			=> ''
		);

		//==== Get Data ====
		$firstname 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-firstname')));
		$lastname 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-lastname')));
		$nip	 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-nip')));
		$email	 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-email')));
		$phone	 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-phone')));
		$province 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-province')));
		$sql_province	= $this->location_model->select_provinsi_by_id($province);
		if($sql_province->num_rows() > 0)
		{
			$p = $sql_province->result_array();
			$n_province = $p[0]['nama_provinsi'];
		}
		else
		{
			$result = 'NG';
		}
		$city 			= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-city')));
		$sql_city		= $this->location_model->select_kabupaten_by_id($city);
		if($sql_city->num_rows() > 0)
		{
			$c = $sql_city->result_array();
			$n_city = $c[0]['nama_kota'];
		}
		else
		{
			$result = 'NG';
		}
		$status			= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-status')));
		$password 		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ep-password')));
		$en_password	= do_hash($password);
		$id_user_m		= $this->session->userdata('sess_user_id');
		$photo 			= $_FILES['f-ep-photo'];
		
		//==== Check Email Existing ====
		$sql_email = $this->employee_model->select_user_by_email($email);
		
		if($sql_email->num_rows() == 0) //Not exists
		{
		
			//==== Update Data ====
			if($result == 'OK')
			{
				// file paths to store
				$paths= [];

				// get file names
				$filename = $photo['name'];
				
				if($filename == '')
				{
					$data_update	= array(
											'nama_depan' 		=> ucwords($firstname),
											'nama_belakang' 	=> ucwords($lastname),
											'nip' 				=> $nip,
											'email' 			=> $email,
											'nomor_telepon'		=> $phone,
											'provinsi' 			=> $n_province,
											'kabupaten' 		=> $n_city,
											'foto_profil'		=> $def_photo,
											'password' 			=> $en_password,
											'is_active' 		=> $status,
											'created_by'		=> $id_user_m,
											'created_date'		=> date("Y-m-d H:i:s")
										);
					
					$this->employee_model->insert_user($data_update);
					
					$output = array(
						'result'  		=> 'OK',
						'msg'			=> 'Profil telah berhasil ditambah.'
					);
					
					//Set session flashdata
					$this->session->set_flashdata('message_success', 'Profil telah berhasil ditambah.');
				}
				else
				{
					//Get new filename
					$ext = end((explode(".", $filename)));
					$new_filename	= 'profil-'.$id_user;
					
					//==== Upload Photo ====
					$config['upload_path'] 		= './assets/images/profile';
					$config['allowed_types'] 	= 'gif|jpg|png';
					$config['max_size']    		= '2000';
					$config['file_name'] 		= $new_filename;
					$config['overwrite'] 		= TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					
					
					if(!$this->upload->do_upload('f-ep-photo')){
						$success = false;
						//break;
					} else {
						$data = $this->upload->data();
						$success = true;
					}
					//==== End of Upload Photo ====
					
					// check and process based on successful status 
					if ($success == true) {
						
						$data_update	= array(
												'nama_depan' 		=> ucwords($firstname),
												'nama_belakang' 	=> ucwords($lastname),
												'nip' 				=> $nip,
												'email' 			=> $email,
												'nomor_telepon'		=> $phone,
												'provinsi' 			=> $n_province,
												'kabupaten' 		=> $n_city,
												'foto_profil'		=> $new_filename.'.'.$ext,
												'password' 			=> $en_password,
												'is_active' 		=> $status,
												'created_by'		=> $id_user_m,
												'created_date'		=> date("Y-m-d H:i:s")
											);
						$this->user_model->insert_user($data_update);
						
						$output = array(
							'result'  		=> 'OK',
							'msg'			=> 'Profil telah berhasil ditambah.'
						);
						
						//Set session flashdata
						$this->session->set_flashdata('message_success', 'Profil telah berhasil ditambah.');
						
					} else {
						$output = array(
							'result'  		=> 'NG',
							'msg'			=> 'Terjadi kesalahan, mohon ulangi kembali.'
						);
						
						// delete any uploaded files
						foreach ($paths as $file) {
							unlink($file);
						}
						
						//Set session flashdata
						$this->session->set_flashdata('message_error', 'Terjadi kesalahan, mohon ulangi kembali.');
					} 
				}
			}
			else
			{
				$output = array(
					'result'  		=> 'NG',
					'msg'			=> 'Terjadi kesalahan, mohon ulangi kembali.'
				);
				
				//Set session flashdata
				$this->session->set_flashdata('message_success', 'Terjadi kesalahan, mohon ulangi kembali.');
			}
		}
		else //Already exists
		{
			$output = array(
						'result'  		=> 'EX',
						'msg'			=> 'Email sudah terdaftar, mohon masukkan email lainnya.'
					);
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: User Group
    public function user_group()
    {
        $this->is_logged();
        
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
    	$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/employee/script/script-user-group', NULL, TRUE);
    	$data['load_user']	= $this->employee_model->select_all_user();
        
    	$this->template->view('page/employee/list-user-group',$data);
    }
	
	//Function: User Group
    public function edit_user_group()
    {
        $this->is_logged();
        
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
    	$this->load->view('include/head', $head, TRUE);
        
		//==== Get Data ====
		$id_user = $this->uri->segment(2);
		
        //Set Spesific Javascript page
        $data['script']    			= $this->load->view('page/employee/script/script-user-group', NULL, TRUE);
    	$data['load_user']			= $this->employee_model->select_user_by_id($id_user);
    	$data['load_user_group']	= $this->employee_model->select_dropdown_user_group();
        
    	$this->template->view('page/employee/edit-user-group',$data);
    }
	
	//Function: Process of editing user group
    public function process_edit_user_group()
    {
		//No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}
		
		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  		=> 'OK'
		);
		
		//==== Get Data ====
		$user_group		= $this->security->xss_clean(strip_image_tags($this->input->post('f-eu-user-group')));
		$id_user		= $this->security->xss_clean(strip_image_tags($this->input->post('f-hidden-id-user')));
		$id_user_m		= $this->session->userdata('sess_user_id');
		
		//==== Update Data ====
		$data_update	= array(
								'id_user_group'		=> $user_group,
								'modified_by'		=> $id_user_m,
								'modified_date'		=> date("Y-m-d H:i:s")
							);
		$sql = $this->employee_model->update_user($data_update,$id_user);
			
		if($sql === FALSE)
		{
			$output = array(
				'result'  		=> 'NG'
			);
			
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Terjadi kesalahan, mohon ulangi kembali.');
		}
		else
		{
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Hak Akses telah berhasil diubah.');
		}
		
		echo json_encode($output);
		exit;
	}
}
