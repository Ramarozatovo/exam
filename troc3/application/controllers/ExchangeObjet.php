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

require('BaseSession.php');
class ExchangeObjet extends BaseSession {
    
    public function makeexchange(){
        $idobjet1 = $this->input->GET('idobjet1');
		$idobjet2 = $this->input->GET('idobjet2');

        $this->load->model('userobject');
        $this->userobject->exchangeObjet($idobjet1, $idobjet2);

        redirect("objetcontroller/allsent");
    }

    public function makeacceptation($idobjet1, $idobjet2, $idtroc){
        // $idobjet1 = $this->input->GET('idobjet1');
		// $idobjet2 = $this->input->GET('idobjet2');

        $this->load->model('userobject');
        $this->userobject->acceptexchange($idobjet1, $idobjet2, $idtroc);

        redirect("objetcontroller/allchange");
    }

    public function declineacceptation($idtroc){
        // $idobjet1 = $this->input->GET('idobjet1');
		// $idobjet2 = $this->input->GET('idobjet2');

        $this->load->model('userobject');
        $this->userobject->declineexchange($idtroc);

        redirect("objetcontroller/allchange");
    }

}