<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class common_model extends CI_Model
{
    public function select_profile()
    {
        return $this->db
					->limit('1')
                    ->get('epro_profile');
    }
}