<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	//==== Select Data ====
    public function select_user($email,$password)
    {
        /*return $this->db
					->where('email',$email)
					->where('password',$password)
                    ->where('is_active','1')
                    ->get('epro_user');
		*/
		
		return $this->db
                    ->select('epro_user.*, epro_user_group.*, epro_user.id as iduser')
					->from('epro_user')
					->join('epro_user_group','epro_user.id_user_group = epro_user_group.id','LEFT') //Cannot sign in if user gtoup not assigned yet
					->where('email',$email)
					->where('password',$password)
                    ->get();
    }
    
    public function select_user_profile()
    {
        /*return $this->db
                    ->select('*')
                    ->from('epro_user')
					->where('epro_user.id',$this->session->userdata('sess_user_id'))
                    ->where('epro_user.is_active','1')
                    ->get();
		*/
		
		return $this->db
                    ->select('epro_user.*, epro_user_group.*, epro_user.id as iduser')
					->from('epro_user')
					->join('epro_user_group','epro_user.id_user_group = epro_user_group.id','LEFT') //Cannot sign in if user gtoup not assigned yet
					->where('epro_user.id',$this->session->userdata('sess_user_id'))
                    ->get();
    }
	
	public function select_user_email($email)
    {
        return $this->db
					->where('email',$email)
                    ->get('epro_user');
    }
	
	public function select_user_reset($random_code)
    {
        return $this->db
					->where('forgot_pass_code',$random_code)
                    ->get('epro_user');
    }
    
	
	public function load_pro()
    {
        return $this->db
                    ->get('epro_proposal');
    }
    
    public function load_all_user()
    {
        return $this->db
                    ->select('epro_user.*,epro_kabupaten.*,epro_user.id as idusr')
                    ->from('epro_user')
                    ->join('epro_kabupaten','epro_kabupaten.id = epro_user.id_lokasi','left')
                    ->order_by('epro_user.created_date','desc')
                    ->order_by('epro_user.nama_depan','asc')
                    ->get();
    }
    
    public function select_user_disabled()
    {
        return $this->db
                    ->select('epro_user.*,epro_kabupaten.*,epro_user.id as idusr')
                    ->from('epro_user')
                    ->join('epro_kabupaten','epro_kabupaten.id = epro_user.id_lokasi','left')
                    ->order_by('epro_user.created_date','desc')
					->where('epro_user.status !=','aktif')
                    ->get();
    }
    
    public function load_activities_user()
    {
        return $this->db
                    ->where('id_user',$this->session->userdata('sess_user_id'))
                    ->order_by('date','desc')
                    ->get('epro_activities_user');
    }
    
	
	//==== Update Data ====
	public function update_user($data, $id_user)
    {
        $this->db->update('epro_user', $data, array('id' => $id_user));
    }
	
	public function update_cp_user($data, $id_user)
    {
        $this->db->trans_start();
		$this->db->update('epro_user', $data, array('id' => $id_user));
		$this->db->trans_complete();
		
		if($this->db->trans_status() === FALSE) return FALSE;
		else return TRUE;
    }
	
	public function update_forgot_password($data, $email)
    {
        $this->db->update('epro_user', $data, array('email' => $email));
    }
    
    //==== Insert Data ====
    public function insert_register($data)
	{
		$this->db->insert('epro_user',$data);		
	}
    
    public function insert_activities_user($data)
	{
		$this->db->insert('epro_activities_user',$data);		
	}
}