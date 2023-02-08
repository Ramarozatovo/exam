<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author rango
 */


 class StatistiqueController extends CI_Controller{

    public function getInscrit(){
        $this->load->model('Statistique');
        $data['inscrit'] = $this->Statistique->getInscrit();
        $data['echange'] = $this->Statistique->getEchange(); 
        $data['title'] = 'Stat|Takalo';
        $data['entete'] = 'main/headeradmin';
        $data['contents'] = 'Stat';
        $this->load->view('main/main', $data);
    }
 }