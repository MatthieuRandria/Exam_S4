<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Saisi_achat_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    } 

    public function saisi_achat(){
        $id_caisse['id'] = $this->session->userdata('caisse_id');
        $this->load->view('saisi_achat_view', $id_caisse);
    }
}
?>