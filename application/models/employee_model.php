<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class employee_model extends CI_Model
{
	//==== Select Data ====
    public function select_all_user()
    {
        return $this->db
					->select('epro_user.*, epro_user_group.*, epro_user.id as iduser')
					->from('epro_user')
					->join('epro_user_group','epro_user.id_user_group = epro_user_group.id','LEFT')
					->get();
    }
	
	public function select_user_by_id($id_user)
    {
        return $this->db
					->select('epro_user.*, epro_user_group.*, epro_user.id as iduser')
					->from('epro_user')
					->join('epro_user_group','epro_user.id_user_group = epro_user_group.id','LEFT')
					->where('epro_user.id',$id_user)
					->get();
    }
	
	public function select_activities_by_id($id_user)
    {
        return $this->db
                    ->where('id_user',$id_user)
                    ->order_by('date','desc')
                    ->get('epro_activities_user');
    }
	
	public function select_user_by_email($email)
    {
        return $this->db
                    ->where('email',$email)
                    ->get('epro_user');
    }
	
	public function select_dropdown_user_group()
    {
        $result = $this->db
                        ->get('epro_user_group');
        $return = array();
        
        if($result->num_rows() > 0)
        {
            $return[] = '-- Pilih Hak Akses --'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['id']] = ucwords($row['definisi']);
            }
        }
        
        return $return;
                       
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
	
	
	//==== Insert Data ====
	public function insert_user($data)
    {
        $this->db->insert('epro_user', $data);
    }
	
	
	//==== Delete Data ====
	public function delete_user($id_user)
    {
        $this->db->delete('epro_user', array('id' => $id_user));
    }
}