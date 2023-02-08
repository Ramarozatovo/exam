<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StudentController
 *
 * @author rango
 */

class HistoriqueController extends CI_Controller{

    public function historique(){
        $data = array();
        $this->load->model('Historique');
        $data['hist'] = $this->Historique->getValide();
        $data['title'] = 'Historique';
        $data['contents'] = 'hist';
        $this->load->view('main/main',$data);
    }

}