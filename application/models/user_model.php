<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	//==== Select Data ====
    public function select_user($email,$password)
    {
        return $this->db
					->where('email',$email)
					->where('password',$password)
                    ->get('epro_user');
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
    
	
	//==== Update Data ====
	public function update_user($data, $id_user)
    {
        $this->db->update('epro_user', $data, array('id' => $id_user));
    }
	
	public function update_forgot_password($data, $email)
    {
        $this->db->update('epro_user', $data, array('email' => $email));
    }
}