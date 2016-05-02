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
        $data['load_pro']   = $this->proposal_model->load_proposal();
        
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
        $data['script']     = $this->load->view('page/proposal/script/script-detailproposal', NULL, TRUE);
		
		//==== Get Data ==== 
		$flag_page				= $this->uri->segment(2);
		$id_proposal			= $this->uri->segment(3);
		$data['load_proposal']	= $this->proposal_model->select_proposal_by_id($id_proposal);
		$data['fpage']			= $flag_page;

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
		echo form_dropdown('subKegiatan', $load_kegiatan, $aattrib_k);
	}
	
	//Function: Get Anggaran Maksimum, depends on Sub Kegiatan
	public function get_anggaran()
	{
        //Get Data
		$id_sk 			= $_GET['subkegiatan'];
        $subkegiatan	= $this->proposal_model->select_subkegiatan($id_sk);
		
		if($subkegiatan->num_rows()>0)
		{
			$sk = $subkegiatan->result_array();
			$anggaran = $sk[0]['anggaran_maks'];
		}
		else
		{
			$anggaran = 0;
		}
		
        //Load Data
		echo $anggaran;
	}
	
	//Function: Process of adding proposal
    public function process_add_proposal()
    {
		/*//No data -> redirected to Dashboard
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}
		
		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  		=> 'OK'
		);*/
		
		//==== Get Data ====
		$judul_proposal 	= $this->security->xss_clean(strip_image_tags($this->input->post('judulProposal')));
		$id_provinsi		= $this->security->xss_clean(strip_image_tags($this->input->post('provinsi')));
		$provinsi			= '';
        $sql_provinsi		= $this->location_model->select_provinsi_by_id($id_provinsi);
		if($sql_provinsi->num_rows() > 0) //Data Exists
		{
			$p 				= $sql_provinsi->result_array();
			$provinsi		= $p[0]['nama_provinsi']; 
		}
		$id_kabupaten		= $this->security->xss_clean(strip_image_tags($this->input->post('kabupaten')));
		$kabupaten			= '';
        $sql_kabupaten		= $this->location_model->select_kabupaten_by_id($id_kabupaten);
		if($sql_kabupaten->num_rows() > 0) //Data Exists
		{
			$k				= $sql_kabupaten->result_array();
			$kabupaten		= $k[0]['nama_kota']; 
		}
		$jml_penduduk		= $this->security->xss_clean(strip_image_tags($this->input->post('jmlPenduduk')));
		$jml_pengangguran	= $this->security->xss_clean(strip_image_tags($this->input->post('jmlPengangguran')));
		$latar_belakang		= $this->security->xss_clean(strip_image_tags($this->input->post('latarBelakang')));
		$id_kegiatan		= $this->security->xss_clean(strip_image_tags($this->input->post('kegiatan')));
		$kegiatan			= '';
        $sql_kegiatan		= $this->proposal_model->select_kegiatan($id_kegiatan);
		if($sql_kegiatan->num_rows() > 0) //Data Exists
		{
			$kg				= $sql_kegiatan->result_array();
			$kegiatan		= $kg[0]['nama_kegiatan']; 
		}
		$id_sub_kegiatan	= $this->security->xss_clean(strip_image_tags($this->input->post('subKegiatan')));
		$sub_kegiatan		= '';
        $sql_subkegiatan	= $this->proposal_model->select_subkegiatan($id_sub_kegiatan);
		if($sql_subkegiatan->num_rows() > 0) //Data Exists
		{
			$skg			= $sql_subkegiatan->result_array();
			$sub_kegiatan		= $skg[0]['nama_sub_kegiatan']; 
		}
		$anggaran_maks		= $this->security->xss_clean(strip_image_tags($this->input->post('anggaran')));
		$jenis				= $this->security->xss_clean(strip_image_tags($this->input->post('jenis')));
		$konten_proposal	= '';
		$lampiran_proposal	= '';
		$file_proposal		= '';
		if($jenis == 'editor')
		{
			$konten_proposal	= $this->security->xss_clean(strip_image_tags($this->input->post('editorProposal')));
		}
		elseif($jenis == 'upload')
		{
			$proposal			= '';
			
			//Get file proposal name
			$proposal			= $_FILES['uploadProposal'];
			$file_proposal		= $proposal['name'];
		}
		$kecamatan			= $this->security->xss_clean(strip_image_tags($this->input->post('kecamatan')));
		$desa				= $this->security->xss_clean(strip_image_tags($this->input->post('desa')));
		//Begin get RAB
		$rab				= $_FILES['lampiranRAB'];;
		$file_rab			= $rab['name'];
		$lampiran_rab		= '';
		//End get RAB
		$total_anggaran		= $this->security->xss_clean(strip_image_tags($this->input->post('totalAnggaran')));
		$biaya_tb			= $this->security->xss_clean(strip_image_tags($this->input->post('biayaTB')));
		$biaya_tp			= $this->security->xss_clean(strip_image_tags($this->input->post('biayaTP')));
		$biaya_tj			= $this->security->xss_clean(strip_image_tags($this->input->post('biayaTJ')));
		$id_user_m			= $this->session->userdata('sess_user_id');
		// file paths to store
		$paths				= [];
		
		//Upload: Proposal
		if($file_proposal != '') //No file upload: proposal not empty 
		{
			//==== Store Photo ====
			//Get new filename
			$ext				= '';
			$ext 				= end((explode(".", $file_proposal)));
			$lampiran_proposal	= 'proposal-'.$id_user_m.' '.date('Y.m.d H-i-s');
			
			//==== Upload Photo ====
			$config['upload_path'] 		= './assets/attachments/proposal';
			$config['allowed_types'] 	= 'pdf|doc|docx|xls|xlsx';
			$config['max_size']    		= '5000';
			$config['file_name'] 		= $lampiran_proposal;
			$config['overwrite'] 		= TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if(!$this->upload->do_upload('uploadProposal')){
				$success_p = false;
			} else {
				$data = $this->upload->data();
				$success_p = true;
			}
			//==== End of Upload Photo ====
			
			if($success_p == true) $lampiran_proposal = $lampiran_proposal.'.'.$ext;
		}
		
		//Upload: RAB
		if($file_rab != '') //No file upload: RAB not empty 
		{
			//==== Store Photo ====
			//Get new filename
			$ext			= '';
			$ext 			= end((explode(".", $file_rab)));
			$lampiran_rab	= 'rab-'.$id_user_m.' '.date('Y.m.d H-i-s');
			
			//==== Upload Photo ====
			$config['upload_path'] 		= './assets/attachments/rab';
			$config['allowed_types'] 	= 'pdf|doc|docx|xls|xlsx';
			$config['max_size']    		= '5000';
			$config['file_name'] 		= $lampiran_rab;
			$config['overwrite'] 		= TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if(!$this->upload->do_upload('lampiranRAB')){
				$success_r = false;
			} else {
				$data = $this->upload->data();
				$success_r = true;
			}
			//==== End of Upload Photo ====
			
			if($success_r == true) $lampiran_rab = $lampiran_rab.'.'.$ext;
		}
		
		//==== Insert Data: epro_proposal ====
		$data_insert	= array(
								'judul_proposal'		=> $judul_proposal,
								'provinsi'				=> $provinsi,
								'kabupaten'				=> $kabupaten,
								'latar_belakang'		=> $latar_belakang,
								'jumlah_pengangguran'	=> str_replace(",","",$jml_pengangguran),
								'jumlah_penduduk'		=> str_replace(",","",$jml_penduduk),
								'status'				=> 'draft',
								'created_by'			=> $id_user_m,
								'created_date'			=> date("Y-m-d H:i:s")
							);
		$id_proposal = $this->proposal_model->insert_proposal($data_insert);
			
		//==== Insert Data: epro_detail ====
		$data_insert_d	= array(
								'id_proposal'		=> $id_proposal,
								'kecamatan'			=> ucwords($kecamatan),
								'desa'				=> ucwords($desa),
								'kegiatan'			=> $kegiatan,
								'sub_kegiatan'		=> $sub_kegiatan,
								'anggaran_maks'		=> $anggaran_maks,
								'jenis_konten'		=> $jenis,
								'konten_proposal'	=> $konten_proposal,
								'lampiran_proposal'	=> $lampiran_proposal,
								'lampiran_rab'		=> $lampiran_rab,
								'total_anggaran'	=> $total_anggaran,
								'created_by'		=> $id_user_m,
								'created_date'		=> date("Y-m-d H:i:s")
							);
		$this->proposal_model->insert_proposal_detail($data_insert_d);
		
		//==== Insert Data: epro_administrasi ====
		$data_insert_a	= array(
								'id_proposal'		=> $id_proposal,
								'biaya_bandara'		=> $biaya_tb,
								'biaya_provinsi'	=> $biaya_tp,
								'biaya_jakarta'		=> $biaya_tj,
								'created_by'		=> $id_user_m,
								'created_date'		=> date("Y-m-d H:i:s")
							);
		$this->proposal_model->insert_proposal_administrasi($data_insert_a);
		
		/*echo json_encode($output);
		exit;*/
	}
	
	//Function: Process of deleting Proposal
	public function process_delete_proposal()
	{
		//Check user is logged or not
	    $this->is_logged();

		//==== Get Data ====
		$id_prop	= $this->security->xss_clean(strip_image_tags($this->input->post('f-hidden-id-proposal'))); 
		
		if($id_prop != '') {
			//==== Delete Data ====
			$this->proposal_model->delete_proposal($id_prop);
            
			//Set session flashdata
			$this->session->set_flashdata('message_success', 'Data telah berhasil dihapus.');
		} 
		else
		{
			//Set session flashdata
			$this->session->set_flashdata('message_error', 'Terjadi kesalahan, mohon ulangi kembali.');
		}
		
		redirect('daftar-proposal');
	}
	
	//Function: Process of downloading attachment
	public function process_download()
	{
		//Get data
		$file = $this->security->xss_clean(strip_image_tags($this->uri->segment(3)));

		//Read the file's contents
		$data = file_get_contents('./assets/attachments/'.$file); 
		$name = $file;
		
		force_download($name, $data);
	}
	
	public function list_proposal_draft()
	{
	   
	    $this->is_logged();
        
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
        //Set Spesific Javascript page
        $data['script']     = $this->load->view('page/proposal/script/script', NULL, TRUE);
        $data['load_pro']   = $this->proposal_model->select_proposal_by_status('draft');
        
		$this->template->view('page/proposal/list-proposal-draft',$data);
	}
	
	public function upload_approval()
	{
	   
	    $this->is_logged();
        
        //Set Head Content
		$head['title'] = 'Selamat datang di aplikasi e-proposal' ;
		$this->load->view('include/head', $head, TRUE);
        
		//==== Get Data ====
		$id_proposal	= $this->uri->segment(3);
		
        //Set Spesific Javascript page
        $data['script']     	= $this->load->view('page/proposal/script/script', NULL, TRUE);
        $data['load_proposal']  = $this->proposal_model->select_proposal_by_id($id_proposal);
        $data['id_proposal']	= $id_proposal;
        
		$this->template->view('page/proposal/upload-approval',$data);
	}
	
	//Function: Process of uploading Approval File
    public function process_upload_approval()
    {
		//No data -> redirected to Dashboard
		if(count($_POST) == 0){
			redirect('dashboard', 'location');
		}
		
		
		//Default value is OK. If validations fail result will change to NG.
		$output = array(
			'result'  		=> 'OK',
			'msg'			=> ''
		);

		//==== Get Data ====
		$id_proposal	= $this->security->xss_clean(strip_image_tags($this->input->post('f-hidden-id-proposal')));
		$id_user		= $this->session->userdata('sess_user_id');
		$catatan		= $this->security->xss_clean(strip_image_tags($this->input->post('f-ua-notes')));
		$file_approval	= $_FILES['f-ua-file-approval'];
		$file_name		= $file_approval['name'];
		
		if($file_name == '')
		{
			$output = array(
						'result'  		=> 'NG',
						'msg'			=> 'Mohon unggah berkas persetujuan Anda.'
					);
		}
		else
		{
			// file paths to store
			$paths		= [];
			
			//==== Set Data ====
			$file_size	= $file_approval['size'];
			$ext = end((explode(".", $file_name)));
			
			if($file_size > 5242880) // 5mb, 1024*1024*5
			{
				$output = array(
					'result'  		=> 'NG',
					'msg'			=> 'Ukuran file terlalu besar.'
				);
			}
			elseif($ext!='pdf' and $ext!='doc' and $ext!='docx' and $ext!='xls' and $ext!='xlsx' and $ext!='jpg' and $ext!='jpeg' and $ext!='gif' and $ext!='png')
			{
				$output = array(
					'result'  		=> 'NG',
					'msg'			=> 'Tipe file tidak sesuai.'
				);
			}
			else
			{
				$new_file_name	= 'approval-'.$id_user.' '.date('Y.m.d H-i-s');
				
				//==== Upload Photo ====
				$config['upload_path'] 		= './assets/attachments/approval';
				$config['allowed_types'] 	= 'pdf|doc|docx|xls|xlsx|jpeg|gif|jpg|png';
				$config['max_size']    		= '5000';
				$config['file_name'] 		= $new_file_name;
				$config['overwrite'] 		= TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				
				if(!$this->upload->do_upload('f-ua-file-approval')){
					// delete any uploaded files
					foreach ($paths as $file) {
						unlink($file);
					}
					
					$output = array(
						'result'  		=> 'NG',
						'msg'			=> 'Terjadi kesalahan, mohon ulangi kembali.'
					);
				} else {
					$data = $this->upload->data();
					
					//==== Insert Data to Database ====
					$data_insert	= array(
												'id_proposal'		=> $id_proposal,
												'tingkat_verifikasi'=> 'kabupaten',
												'lampiran'			=> $new_file_name.'.'.$ext,
												'catatan' 			=> $catatan,
												'status_verifikasi'	=> 'draft',
												'created_by'		=> $id_user,
												'created_date' 		=> date("Y-m-d H:i:s")
											);
					$this->proposal_model->insert_proposal_verifikasi($data_insert);
					$output = array(
						'result'  		=> 'OK',
						'msg'			=> ''
					);
				}
			}
		}
		
		echo json_encode($output);
		exit;
	}
    
}
