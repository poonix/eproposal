<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proposal_model extends CI_Model
{
    public function load_pro()
    {
        return $this->db
                    ->select('epro_kabupaten.*, epro_provinsi.*, epro_proposal.*')
                    ->from('epro_proposal')
                    ->join('epro_kabupaten','epro_kabupaten.id=epro_proposal.id_kabupaten','left')
                    ->join('epro_provinsi','epro_provinsi.id=epro_kabupaten.id_provinsi','left')
                    ->get();
    }
    
    public function get_code_activation($value)
    {
        return $this->db->get_where('customer', array('id' => $value))->row('activation');
    }
    
    public function account_update($data, $id)
    {
        $this->db->update('customer', $data, array('id' => $id));
    }
    
}