<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class proposal_model extends CI_Model
{
    public function load_pro()
    {
        return $this->db
                    ->get('epro_proposal');
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