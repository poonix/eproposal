<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

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
	
	//Function: Sign in to the application
	public function signin()
	{
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script'] = $this->load->view('page/user/script/script-signin', NULL, TRUE);
        
		$this->load->view('page/user/signin',$data);
	}
	
	//Function: Process of signing in 
	public function process_signin()
	{
		//No data -> redirected to Daftar Pegawai 
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}

		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  		=> 'OK',
			'page'			=> ''
		);

		//==== Get Data ====
		$email		= $this->security->xss_clean(strip_image_tags($this->input->post('form-email')));
		$password 	= do_hash($this->security->xss_clean(strip_image_tags($this->input->post('form-password'))));
		$page		= $this->security->xss_clean(strip_image_tags($this->session->userdata('sess_user_page')));
		
		//==== Check Data ====
		$sql_user = $this->user_model->select_user($email,$password);
		
		if($sql_user->num_rows() > 0)
		{
			$user = $sql_user->result_array();
			
			//Set session userdata
			$session_array = array(
								'logged_in'					=> TRUE,
								'sess_user_id'              => $user[0]['id'],
								'sess_user_location'        => $user[0]['id_lokasi'],
								'sess_user_first_name'  	=> ucwords($user[0]['nama_depan']),
								'sess_user_last_name'  		=> ucwords($user[0]['nama_belakang'])
							 );                
			$this->session->set_userdata($session_array);
			
			//Set output value
			$output = array(
				'result'  		=> 'OK',
				'page'			=> $page
			);
			
			//Unset session userdata
			$this->session->set_userdata('sess_user_page','');
			$this->session->unset_userdata('sess_user_page');
			
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Anda berhasil masuk sebagai '.ucwords($user[0]['nama_depan'].'.'));
		}
		else
		{
			//Set Output Value
			$output = array(
				'result'  		=> 'NG',
				'page'			=> ''
			);
			
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Username atau password salah!');
		}
		
		echo json_encode($output);
		exit;
	}
    
    public function forgot_password()
	{
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script'] = $this->load->view('page/user/script/script-signin', NULL, TRUE);
		
		$this->load->view('page/user/forgot-password',$data);
	}
	
	//Function: Process of forget-password
    public function process_forgot_password()
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
		$email	= $this->security->xss_clean(strip_image_tags($this->input->post('form-email')));
		
		//==== Check Data ====
		$sql_user = $this->user_model->select_user_email($email);
		
		if($sql_user->num_rows() > 0) {
			//==== Set Data ====
			/*$randoms    = random_string('alnum', 4);
			$mdd        = do_hash($randoms,'md5');*/
			$mdd	= do_hash($email);
			$url	= base_url().'user/reset/'.$mdd;
			
			//Get Constant data from constants.php
			$email_sender 	= EmailSender;
			$email_address	= EmailAddress;
			
			//==== Send Email ===
			$this->load->library('email');  
	        $this->email->clear();              
            $this->email->from($email_address, $email_sender); 
			$this->email->to($email);	
            $this->email->subject('Password Anda telah berhasil di reset');
            $data['url_reset']	= $url;
			$message			= $this->load->view('email/forgot-password',$data,TRUE);         
            $this->email->message($message);  
			
			if ( !$this->email->send() )
            {
				//$log_action = 'Sistem gagal mengirim email ke '.$email.'.';
                //$this->log_record($log_action);
            }
			else
			{ 
				//$log_action = 'Sistem berhasil mengirim email ke '.$email.'.';
                //$this->log_record($log_action);
				
				//==== Set Data ====
				$random_password 		= random_string('alnum', 8);
				$random_password_enc 	= do_hash($random_password);
				
				//==== Update Data ====
				$data_update	= array(
										'password'			=> $random_password_enc,
										'reset_password' 	=> $random_password,
										'forgot_pass_code' 	=> $mdd,
										'forgot_pass_date' 	=> date('Y-m-d H:i:s')
									);
				$this->user_model->update_forgot_password($data_update,$email);
            }
			
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Mohon cek email Anda, sistem telah mengirimkan link untuk mengubah password Anda.');
		} 
		else 
		{  
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Email tidak ditemukan, mohon ulangi kembali.');
		}
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Process of reset
    public function reset()
    {
        $random_code = $this->uri->segment(3);
		
		//Checking data 
		$sql = $this->user_model->select_user_reset($random_code);
		
		//If data exists
		if($sql->num_rows() > 0 )
		{
			//Set Head Content
			$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
			$this->load->view('include/head', $head, TRUE);
			
			//Set Spesific Javascript page
			$data['script'] 	= $this->load->view('page/user/script/script-signin', NULL, TRUE);
			
			//==== Set Data ====
			$user 				= $sql->result_array();
			$data['id_user']	= $user[0]['id'];
			
			$this->load->view('page/user/reset-password',$data);
		}
		else
		{
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Link tidak ditemukan, harap coba kembali.');
			
			redirect('sign-in');
		}
    }
	
	//Function: Process of reset-password
    public function process_reset_password()
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
		$id_user 		= $this->security->xss_clean(strip_image_tags($this->input->post('form-hidden-id-user')));
		$password 		= $this->security->xss_clean(strip_image_tags($this->input->post('form-password')));
		$en_password	= do_hash($password);
		
		//==== Update Data ====
		$data_update	= array(
								'password'			=> $en_password,
								'reset_password' 	=> '',
								'forgot_pass_code' 	=> '',
								'forgot_pass_date' 	=> ''
							);
		$this->user_model->update_user($data_update,$id_user);
			
		//Set session flashdata
		$this->session->set_flashdata('message_success', 'Password telah berhasil diubah.');
		
		echo json_encode($output);
		exit;
	}
	
	//Function: Process of signing out
    public function process_signout()
    {
        $this->is_logged();
        
		//Set session userdata
		$session_array = array(
							'logged_in'					=> '',
							'sess_user_id'              => '',
							'sess_user_location'        => '',
							'sess_user_first_name'  	=> '',
							'sess_user_last_name'  		=> ''
						 );                
		$this->session->set_userdata($session_array);
		
		//Unset session userdata and destroy all session userdata
        $this->session->unset_userdata($session_array);
        //$this->session->sess_destroy();
        
		//Set session flashdata
		$this->session->set_flashdata('message_success', 'Anda telah berhasil sign out!');
		
        redirect('sign-in');
    }
    
    
    public function my_profile()
	{
        $this->is_logged();
       
        $head['title'] = 'Selamat datang di aplikasi e-proposal' ;
    	$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script'] = $this->load->view('page/user/script/script-myprofile', NULL, TRUE);
    	
    	$this->template->view('page/user/my-profile',$data);
    }
}
