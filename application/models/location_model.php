<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class location_model extends CI_Model
{
	//==== Select Data ====
    public function select_all_provinsi()
    {
        return $this->db
					//->where('is_active','1')
					->get('epro_provinsi');
    }
	
	public function select_all_kabupaten()
    {
        return $this->db
                    ->select('epro_kabupaten.*,epro_kabupaten.id as idkab,epro_provinsi.*')
                    ->from('epro_provinsi')
                    ->join('epro_kabupaten','epro_kabupaten.id_provinsi = epro_provinsi.id','left')
					//->where('epro_kabupaten.is_active','1')
					->order_by('epro_kabupaten.nama_kota')
					->get();
    }
	
	public function select_all_kecamatan()
    {
        return $this->db
					->where('is_active','1')
					->order_by('nama_kecamatan')
					->get('epro_kecamatan');
    }
	
	public function select_all_desa()
    {
        return $this->db
					->where('is_active','1')
					->order_by('nama_desa')
					->get('epro_desa');
    }
    
	public function select_provinsi_by_id($id)
    {
        return $this->db
					->where('id',$id)
					->get('epro_provinsi');
    }
	
	public function select_kabupaten_by_id($id)
    {
        return $this->db
					->where('id',$id)
					->get('epro_kabupaten');
    }
    
	public function select_provinsi_by_name($name)
    {
        return $this->db
					->where('nama_provinsi',$name)
					->get('epro_provinsi');
    }
	
	public function select_kabupaten_by_name($name)
    {
        return $this->db
					->where('nama_kota',$name)
					->get('epro_kabupaten');
    }
	
	public function select_provinsi_kabupaten($id_provinsi,$name)
    {
        return $this->db
					->where('id_provinsi',$id_provinsi)
					->where('nama_kota',$name)
					->get('epro_kabupaten');
    }
	
    public function select_dropdown_provinsi()
    {
        $result = $this->db
                        ->from('epro_provinsi')
						->where('is_active','1')
    					->get();
        $return = array();
        
        if($result->num_rows() > 0)
        {
            $return[] = '-- Pilih Provinsi --'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['id']] = $row['nama_provinsi'];
            }
        }
        
        return $return;
                       
    }
    
    public function select_dropdown_kabupaten($id_p)
    {
		if($id_p == '')
		{
			$result = $this->db
							->select('epro_kabupaten.*,epro_kabupaten.id as idkab,epro_provinsi.*')
							->from('epro_provinsi')
							->join('epro_kabupaten','epro_kabupaten.id_provinsi = epro_provinsi.id','left')
							->where('epro_kabupaten.is_active','1')
							->order_by('epro_kabupaten.nama_kota')
							->get();
		}
		else
		{
			$result = $this->db
							->select('epro_kabupaten.*,epro_kabupaten.id as idkab,epro_provinsi.*')
							->from('epro_provinsi')
							->join('epro_kabupaten','epro_kabupaten.id_provinsi = epro_provinsi.id','left')
							->where('id_provinsi',$id_p)
							->where('epro_kabupaten.is_active','1')
							->order_by('epro_kabupaten.nama_kota')
							->get();
		}
		
        $return = array();
        
        if($result->num_rows() > 0)
        {
            $return[] = '-- Pilih Kabupaten/Kota --'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['idkab']] = $row['nama_kota'];
            }
        }
        
        return $return;
                       
    }
	
	
	//==== Update Data ====
	public function update_provinsi($id_provinsi,$data)
    {
        $this->db->update('epro_provinsi', $data, array('id' => $id_provinsi));
    }
	
	public function update_kabupaten($id_kabupaten,$data)
    {
        $this->db->update('epro_kabupaten', $data, array('id' => $id_kabupaten));
    }
	
	
	//==== Insert Data ====
	public function insert_provinsi($data)
    {
        $this->db->insert('epro_provinsi', $data);
    }
	
	public function insert_kabupaten($data)
    {
        $this->db->insert('epro_kabupaten', $data);
    }
	
	
	//==== Delete Data ====
	public function delete_provinsi($id_provinsi)
    {
        $this->db->delete('epro_provinsi', array('id' => $id_provinsi));
    }
	
	public function delete_kabupaten($id_kabupaten)
    {
        $this->db->delete('epro_kabupaten', array('id' => $id_kabupaten));
    }
	
}