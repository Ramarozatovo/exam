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
class Userobject extends CI_Model {

    // Accept an exchange
    public function declineexchange($idtroc){
        $query = sprintf("UPDATE troc SET etat = 1, daty = now() where idtroc = %u", $idtroc);
        $sql = $this->db->query($query);
    }

    // Accept an exchange
    public function acceptexchange($idobjet1, $idobjet2, $idtroc){
        $query1 = sprintf("UPDATE troc SET etat = 2, daty = now() where idtroc = %u", $idtroc);
        $this->load->model('objet');
        $data1 = $this->objet->getobjectbyid($idobjet1);
        $data2 = $this->objet->getobjectbyid($idobjet2);
        $query2 = sprintf("UPDATE objet SET idmembre = %u WHERE idobjet = %u", $data1[0]['idmembre'], $idobjet2);
        $query3 = sprintf("UPDATE objet SET idmembre = %u WHERE idobjet = %u", $data2[0]['idmembre'], $idobjet1);

        $sql1 = $this->db->query($query1);
        $sql2 = $this->db->query($query2);
        $sql3 = $this->db->query($query3);
    }

    // Make an exchange
    public function exchangeobjet($idobjet1, $idobjet2){
        $query = sprintf("INSERT INTO troc VALUES(null, %u, %u, 0,now())", $idobjet1, $idobjet2);
        $sql = $this->db->query($query);
    }
    
   // Get all object of an user
    public function myobject($idmembre){
        $query = sprintf("SELECT * FROM objet WHERE idmembre = %u", $idmembre);
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get all object send
    public function objetsend($idmembre){
        $query = sprintf("SELECT * FROM (select troc.idtroc, t1.idobjet idobjet1, t1.nomobjet nomobjet1 , t1.idmembre idmembre1, m1.nom nom1, t2.idobjet idobjet2, t2.nomobjet nomobjet2 , t2.idmembre idmembre2, m2.nom nom2, troc.etat, troc.daty
        from troc
        inner join objet t1 on t1.idobjet = troc.idobjet1
        inner join membre m1 on m1.idmembre = t1.idmembre
        inner join objet t2 on t2.idobjet = troc.idobjet2
        inner join membre m2 on m2.idmembre = t2.idmembre) t WHERE idmembre1 = %u AND etat = 0", $idmembre);
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get all object send
    public function objetreceived($idmembre){
        $query = sprintf("SELECT * FROM (select troc.idtroc, t1.idobjet idobjet1, t1.nomobjet nomobjet1 , t1.idmembre idmembre1, m1.nom nom1, t2.idobjet idobjet2, t2.nomobjet nomobjet2 , t2.idmembre idmembre2, m2.nom nom2, troc.etat, troc.daty
        from troc
        inner join objet t1 on t1.idobjet = troc.idobjet1
        inner join membre m1 on m1.idmembre = t1.idmembre
        inner join objet t2 on t2.idobjet = troc.idobjet2
        inner join membre m2 on m2.idmembre = t2.idmembre) t WHERE idmembre2 = %u AND etat = 0", $idmembre);
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get all REFUS
    public function objetrefused($idmembre){
        $query = sprintf("SELECT * FROM (select troc.idtroc, t1.idobjet idobjet1, t1.nomobjet nomobjet1 , t1.idmembre idmembre1, m1.nom nom1, t2.idobjet idobjet2, t2.nomobjet nomobjet2 , t2.idmembre idmembre2, m2.nom nom2, troc.etat, troc.daty
        from troc
        inner join objet t1 on t1.idobjet = troc.idobjet1
        inner join membre m1 on m1.idmembre = t1.idmembre
        inner join objet t2 on t2.idobjet = troc.idobjet2
        inner join membre m2 on m2.idmembre = t2.idmembre) t WHERE (idmembre2 = %u OR idmembre1 = %u) AND etat = 1", $idmembre, $idmembre);
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get all ACCEPTATION
    public function objetaccepted($idmembre){
        $query = sprintf("SELECT * FROM (select troc.idtroc, t1.idobjet idobjet1, t1.nomobjet nomobjet1 , t1.idmembre idmembre1, m1.nom nom1, t2.idobjet idobjet2, t2.nomobjet nomobjet2 , t2.idmembre idmembre2, m2.nom nom2, troc.etat, troc.daty
        from troc
        inner join objet t1 on t1.idobjet = troc.idobjet1
        inner join membre m1 on m1.idmembre = t1.idmembre
        inner join objet t2 on t2.idobjet = troc.idobjet2
        inner join membre m2 on m2.idmembre = t2.idmembre) t WHERE (idmembre2 = %u OR idmembre1 = %u) AND etat = 2", $idmembre, $idmembre);
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;   
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }
}