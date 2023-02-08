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
class Membre extends CI_Model {
    
    // Checking the user
    public function checkuser($name, $mdp){
        $query = sprintf("SELECT * FROM membre WHERE nom = '%s' AND mdp = '%s'", $name, $mdp);
        $sql = $this->db->query($query);

        foreach ($sql-> result_array() as $row){
            $result[] = $row; 
        }
        if($result != null) return $result;
        else return 0;
    }

    // Add new User
    public function adduser($name, $email, $mdp){
        $query = sprintf("INSERT INTO membre VALUES(null, '%s', '%s', '%s', 1)", $name, $email, $mdp);
        $sql = $this->db->query($query);
    }
}
