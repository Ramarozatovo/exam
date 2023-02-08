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

    // Delete a categorie along with its child
    public function deletecategorie($idcategorie){
        $allObject = $this->getAllObjetByCategorie($idcategorie);       // Get all object
        var_dump($allObject);

        for($i = 0; $i < count($allObject); $i++){      // Delete product in troc
            $query1 = sprintf("DELETE FROM troc WHERE idobjet1 = %u OR idobjet2 = %u", $allObject[$i]['idobjet'], $allObject[$i]['idobjet']);       // Delete relation objt/cat
            $sql1 = $this->db->query($query1);
        }

        for($i = 0; $i < count($allObject); $i++){      // Delete product in troc
            $query2 = sprintf("DELETE FROM objet WHERE idobjet = %u", $allObject[$i]['idobjet']);       // Delete relation objt/cat
            $sql2 = $this->db->query($query2);
        }

        $query = sprintf("DELETE FROM objet_categorie WHERE idcategorie = %u", $idcategorie);       // Delete relation objt/cat
        $sql = $this->db->query($query);

        
        $query0 = sprintf("DELETE FROM categorie WHERE idcategorie = %u", $idcategorie);       // Delete relation objt/cat
        $sql0 = $this->db->query($query0);
    }

    // Modify categorie
    public function modifycategorie($nom, $id){
        $query = sprintf("UPDATE categorie set nomcategorie = '%s' WHERE idcategorie = %u", $nom, $id);
        $sql = $this->db->query($query);
    }

    // Get categorie by id
    public function getcategoriebyid($idcategorie){
        $query = sprintf("SELECT * FROM categorie WHERE idcategorie = %u", $idcategorie);
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
            $count++;
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get all categoroies
    public function getcategorie(){
        $query = sprintf("SELECT * FROM categorie");
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
            $count++;
        }
        if($count == 0) return 0;
        return $result;
    }
    
    // Checking the user
    public function getallobjetbybategorie($idcategorie){
        $query = sprintf("select objet.*, categorie.*
            from objet_categorie
            inner join categorie on objet_categorie.idcategorie = categorie.idcategorie
            inner join objet on objet_categorie.idobjet = objet.idobjet
            where objet_categorie.idcategorie = %u", $idcategorie);
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