<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class location_model extends CI_Model
{
	//==== Select Data ====
    public function select_all_provinsi()
    {
        return $this->db
					 ->get('epro_provinsi');
    }
	
	public function select_all_kabupaten()
    {
        return $this->db
                    ->select('epro_kabupaten.*,epro_kabupaten.id as idkab,epro_provinsi.*')
                    ->from('epro_provinsi')
                    ->join('epro_kabupaten','epro_kabupaten.id_provinsi = epro_provinsi.id','left')
					->order_by('epro_kabupaten.nama_kota')
					->get();
    }
	
	public function select_all_kecamatan()
    {
        return $this->db
					->order_by('nama_kecamatan')
					->get('epro_kecamatan');
    }
	
	 public function select_all_desa()
    {
        return $this->db
					->order_by('nama_desa')
					->get('epro_desa');
    }
    
    public function select_dropdown_provinsi()
    {
        $result = $this->db
                        ->from('epro_provinsi')
    					->get();
        $return = array();
        
        if($result->num_rows() > 0)
        {
            $return[] = '--Pilih Propinsi--'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['id']] = $row['nama_provinsi'];
            }
        }
        
        return $return;
                       
    }
    
    public function select_dropdown_kabupaten()
    {
        $result = $this->db
                       ->select('epro_kabupaten.*,epro_kabupaten.id as idkab,epro_provinsi.*')
                        ->from('epro_provinsi')
                        ->join('epro_kabupaten','epro_kabupaten.id_provinsi = epro_provinsi.id','left')
    					->order_by('epro_kabupaten.nama_kota')
    					->get();
        $return = array();
        
        if($result->num_rows() > 0)
        {

            foreach($result->result_array() as $row)
            {
                $return[$row['idkab']] = $row['nama_kota'];
            }
        }
        
        return $return;
                       
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