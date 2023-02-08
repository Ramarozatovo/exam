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


class Historique extends CI_Model{

    public function gethistorique($idobjet){
        $query = sprintf("SELECT * FROM (select troc.idtroc, t1.idobjet idobjet1, t1.nomobjet nomobjet1 , t1.idmembre idmembre1, m1.nom nom1, t2.idobjet idobjet2, t2.nomobjet nomobjet2 , t2.idmembre idmembre2, m2.nom nom2, troc.etat, troc.daty
        from troc
        inner join objet t1 on t1.idobjet = troc.idobjet1
        inner join membre m1 on m1.idmembre = t1.idmembre
        inner join objet t2 on t2.idobjet = troc.idobjet2
        inner join membre m2 on m2.idmembre = t2.idmembre) where (idobjet1 = %u OR idobjet2 = %u) AND etat=2 ORDER BY daty DESC", $idobjet, $idobjet);
        $sql = $this->db->query($query);
        $count = 0;

        foreach($sql-> result_array() as $row){
            $count++;
            $result[] = $row;
        }
        if($count == 0) return 0;
        return $result;
    }

}