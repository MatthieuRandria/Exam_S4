<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Caisse_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_Caisse(){
        $query = $this->db->get('caisse');
        return $query->result();
    }
}

?>