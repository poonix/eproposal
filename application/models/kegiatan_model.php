<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kegiatan_model extends CI_Model
{
	//==== Select Data ====
    public function select_all_kegiatan()
    {
        return $this->db
					//->where('is_active','1')
					->get('epro_kegiatan');
    }
	
	public function select_all_subkegiatan()
    {
        return $this->db
                    ->select('epro_sub_kegiatan.*,epro_sub_kegiatan.id as idsub,epro_kegiatan.*')
                    ->from('epro_kegiatan')
                    ->join('epro_sub_kegiatan','epro_sub_kegiatan.id_kegiatan = epro_kegiatan.id','left')
					//->where('epro_kabupaten.is_active','1')
					->order_by('epro_sub_kegiatan.nama_sub_kegiatan')
					->get();
    }

    
	public function select_kegiatan_by_id($id)
    {
        return $this->db
					->where('id',$id)
					->get('epro_kegiatan');
    }
	
	public function select_kabupaten_by_id($id)
    {
        return $this->db
					->where('id',$id)
					->get('epro_kabupaten');
    }
    
	public function select_kegiatan_by_name($name)
    {
        return $this->db
					->where('nama_kegiatan',$name)
					->get('epro_kegiatan');
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
	
    public function select_dropdown_kegiatan()
    {
        $result = $this->db
                        ->from('epro_kegiatan')
						->where('is_active','1')
    					->get();
        $return = array();
        
        if($result->num_rows() > 0)
        {
            $return[] = '-- Pilih Kegiatan --'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['id']] = $row['nama_kegiatan'];
            }
        }
        
        return $return;
                       
    }
    
    public function select_dropdown_subkegiatan($id_p)
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
	public function update_kegiatan($id_kegiatan,$data)
    {
        $this->db->update('epro_kegiatan', $data, array('id' => $id_kegiatan));
    }
	
	public function update_kabupaten($id_kabupaten,$data)
    {
        $this->db->update('epro_kabupaten', $data, array('id' => $id_kabupaten));
    }
	
	
	//==== Insert Data ====
	public function insert_kegiatan($data_insert)
    {
        $this->db->insert('epro_kegiatan', $data_insert);
    }
	
	public function insert_kabupaten($data)
    {
        $this->db->insert('epro_kabupaten', $data);
    }
	
	
	//==== Delete Data ====
	public function delete_kegiatan($id_kegiatan)
    {
        $this->db->delete('epro_kegiatan', array('id' => $id_kegiatan));
    }
	
	public function delete_kabupaten($id_kabupaten)
    {
        $this->db->delete('epro_kabupaten', array('id' => $id_kabupaten));
    }
	
}