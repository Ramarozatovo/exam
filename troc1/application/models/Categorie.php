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
class Categorie extends CI_Model {

    // Get all categoroies
    public function getCategorie(){
        $query = sprintf("SELECT * FROM categorie");
        $sql = $this->db->query($query);

        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        if($result != null) return $result;
        else return 0;
    }
    
    // Checking the user
    public function getAllObjetByCategorie($idcategorie){
        $query = sprintf("select objet.*, categorie.*
            from objet_categorie
            inner join categorie on objet_categorie.idcategorie = categorie.idcategorie
            inner join objet on objet_categorie.idobjet = objet.idobjet
            where objet_categorie.idcategorie = %u", $idcategorie);
        $sql = $this->db->query($query);

        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        if($result != null) return $result;
        else return 0;
    }

    // 
}