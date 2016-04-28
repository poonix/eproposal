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
		$id_proposal			= $this->uri->segment(2);
		$data['load_proposal']	= $this->proposal_model->select_proposal_by_id($id_proposal);

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
		if($jenis == 'editor')
		{
			$konten_proposal	= $this->security->xss_clean(strip_image_tags($this->input->post('editorProposal')));
			$lampiran_proposal	= '';
		}
		elseif($jenis == 'upload')
		{
			$konten_proposal	= '';
			$lampiran_proposal	= $this->security->xss_clean(strip_image_tags($this->input->post('uploadProposal')));
		}
		$kecamatan			= $this->security->xss_clean(strip_image_tags($this->input->post('kecamatan')));
		$desa				= $this->security->xss_clean(strip_image_tags($this->input->post('desa')));
		$lampiran_rab		= $this->security->xss_clean(strip_image_tags($this->input->post('lampiranRAB')));
		$total_anggaran		= $this->security->xss_clean(strip_image_tags($this->input->post('totalAnggaran')));
		$biaya_tb			= $this->security->xss_clean(strip_image_tags($this->input->post('biayaTB')));
		$biaya_tp			= $this->security->xss_clean(strip_image_tags($this->input->post('biayaTP')));
		$biaya_tj			= $this->security->xss_clean(strip_image_tags($this->input->post('biayaTJ')));
		$id_user_m			= $this->session->userdata('sess_user_id');
		
		//==== Insert Data: epro_proposal ====
		$data_insert	= array(
								'judul_proposal'		=> $judul_proposal,
								'provinsi'				=> $provinsi,
								'kabupaten'				=> $kabupaten,
								'latar_belakang'		=> $latar_belakang,
								'jumlah_pengangguran'	=> $jml_pengangguran,
								'jumlah_penduduk'		=> $jml_penduduk,
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
}
