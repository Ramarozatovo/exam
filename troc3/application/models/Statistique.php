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

 class Statistique extends CI_Model{

    public function getInscrit(){
        $this->db->select('count(*) as nbre');
        $this->db->from('membre');
        $this->db->where('isadmin!=0');

        $query = $this->db->get()->row()->nbre;
        return $query;

    }

    public function getEchange(){
        $this->db->select('count(*) as nbre');
        $this->db->from('troc');
        $this->db->where('etat=2');

        $query = $this->db->get()->row()->nbre;
        return $query;
    }

    

    

 }