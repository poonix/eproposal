<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proposal_model extends CI_Model
{
	/* ==== Select Data ==== */
    public function load_proposal()
    {
        return $this->db
                    ->select('epro_proposal.*,epro_proposal_detail.*,epro_proposal_administrasi.*,epro_proposal.id as idprop')
                    ->from('epro_proposal')
                    ->join('epro_proposal_detail','epro_proposal_detail.id_proposal=epro_proposal.id','left')
                    ->join('epro_proposal_administrasi','epro_proposal_administrasi.id_proposal=epro_proposal.id','left')
                    ->get();
    }
	
    public function select_proposal_by_id($id)
    {
        return $this->db
                    ->select('epro_proposal.*,epro_proposal_detail.*,epro_proposal_administrasi.*,epro_proposal.id as idprop')
                    ->from('epro_proposal')
                    ->join('epro_proposal_detail','epro_proposal_detail.id_proposal=epro_proposal.id','left')
                    ->join('epro_proposal_administrasi','epro_proposal_administrasi.id_proposal=epro_proposal.id','left')
					->where('epro_proposal.id',$id)
                    ->get();
    }
	
    public function select_proposal_by_status($status)
    {
        return $this->db
                    ->select('epro_proposal.*,epro_proposal_detail.*,epro_proposal_administrasi.*,epro_proposal.id as idprop')
                    ->from('epro_proposal')
                    ->join('epro_proposal_detail','epro_proposal_detail.id_proposal=epro_proposal.id','left')
                    ->join('epro_proposal_administrasi','epro_proposal_administrasi.id_proposal=epro_proposal.id','left')
					->where('epro_proposal.status',$status)
                    ->get();
    }
    
    public function get_code_activation($value)
    {
        return $this->db->get_where('customer', array('id' => $value))->row('activation');
    }
    
	public function select_kegiatan($id)
    {
        return $this->db
                    ->where('id',$id)
                    ->get('epro_kegiatan');
    }
    
	public function select_subkegiatan($id)
    {
        return $this->db
                    ->where('id',$id)
                    ->get('epro_sub_kegiatan');
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
            $return[''] = '-- Pilih Provinsi --'; 
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
            $return[''] = '-- Pilih Kabupaten/Kota --'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['idkab']] = $row['nama_kota'];
            }
        }
        
        return $return;
                       
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
            $return[''] = '-- Pilih Kegiatan --'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['id']] = $row['nama_kegiatan'];
            }
        }
        
        return $return;
                       
    }
    
    public function select_dropdown_sub_kegiatan($id_k)
    {
		if($id_k == '')
		{
			$result = $this->db
							->select('epro_kegiatan.*,epro_sub_kegiatan.*,epro_sub_kegiatan.id as idskeg')
							->from('epro_kegiatan')
							->join('epro_sub_kegiatan','epro_sub_kegiatan.id_kegiatan = epro_kegiatan.id','left')
							->where('epro_sub_kegiatan.is_active','1')
							->order_by('epro_sub_kegiatan.nama_sub_kegiatan')
							->get();
		}
		else
		{
			$result = $this->db
							->select('epro_kegiatan.*,epro_sub_kegiatan.*,epro_sub_kegiatan.id as idskeg')
							->from('epro_kegiatan')
							->join('epro_sub_kegiatan','epro_sub_kegiatan.id_kegiatan = epro_kegiatan.id','left')
							->where('epro_sub_kegiatan.id_kegiatan',$id_k)
							->where('epro_sub_kegiatan.is_active','1')
							->order_by('epro_sub_kegiatan.nama_sub_kegiatan')
							->get();
		}
		
        $return = array();
        
        if($result->num_rows() > 0)
        {
            $return[''] = '-- Pilih Sub Kegiatan --'; 
            foreach($result->result_array() as $row)
            {
                $return[$row['idskeg']] = $row['nama_sub_kegiatan'];
            }
        }
        
        return $return;
                       
    }
	
	
	/* ==== Update Data ==== */
    public function account_update($data, $id)
    {
        $this->db->update('customer', $data, array('id' => $id));
    }
	
	
	/* ==== Insert Data ==== */
    public function insert_proposal($data)
    {
        $this->db->insert('epro_proposal', $data);
		$insert_id = $this->db->insert_id();
		
		return $insert_id;
    }
	
    public function insert_proposal_detail($data)
    {
        $this->db->insert('epro_proposal_detail', $data);
    }
	
    public function insert_proposal_administrasi($data)
    {
        $this->db->insert('epro_proposal_administrasi', $data);
    }
	
    public function insert_proposal_verifikasi($data)
    {
        $this->db->insert('epro_proposal_verifikasi', $data);
    }
	
	
	/* ==== Delete Data ==== */
    public function delete_proposal($id_proposal)
    {
        $this->db->delete('epro_proposal',array('id' => $id_proposal));
		$this->db->delete('epro_proposal_detail',array('id_proposal' => $id_proposal));
		$this->db->delete('epro_proposal_administrasi',array('id_proposal' => $id_proposal));
    }
}