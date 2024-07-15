<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Caisse_model');
    } 

    public function index() {
        if ($this->input->post('choix_caisse')) {
            $id_caisse = $this->input->post('choix_caisse');
            $this->session->set_userdata('caisse_id', $id_caisse);
            redirect('saisi_achat_controller/saisi_achat');
        } else {
            // Si aucun choix de caisse n'a été soumis, charger la vue normalement
            $data['caisses'] = $this->Caisse_model->get_all_Caisse();
            $this->load->view('index_view', $data);
        }
    }

}
?>
