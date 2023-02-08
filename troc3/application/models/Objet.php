<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Objet extends CI_Model{

    // Recherche des objets qui ont une approximation de 10 ou 20
    

    // Recherche d'objet
    public function rechercheobjet($mot, $idcategorie){
        $query = "";
        $trim = trim($mot);

        if($idcategorie == 0 && strcmp($trim, "") != 0){ 
            $query = sprintf("select objet.*, categorie.*
            from objet_categorie
            inner join categorie on objet_categorie.idcategorie = categorie.idcategorie
            inner join objet on objet_categorie.idobjet = objet.idobjet
            where objet.nomobjet like '%s%s%s' and objet.idmembre != %u ", "%", $mot, "%", $this->session->userdata('idmembre'));

        } else if($idcategorie != 0 && strcmp($trim, "") != 0) {
            $query = sprintf("select objet.*, categorie.*
            from objet_categorie
            inner join categorie on objet_categorie.idcategorie = categorie.idcategorie
            inner join objet on objet_categorie.idobjet = objet.idobjet
            where idcategorie = %u and objet.nomobjet like '%s%s%s' and objet.idmembre != %u", $idcategorie, "%", $mot, "%", $this->session->userdata('idmembre'));
        } else if($idcategorie != 0 && strcmp($trim, "") == 0){
            $query = sprintf("select objet.*, categorie.*
            from objet_categorie
            inner join categorie on objet_categorie.idcategorie = categorie.idcategorie
            inner join objet on objet_categorie.idobjet = objet.idobjet
            where idcategorie = %u and objet.idmembre != %u", $idcategorie, $this->session->userdata('idmembre'));
        } else if($idcategorie == 0 && strcmp($trim, "") == 0){
            $query = sprintf("SELECT * FROM objet where idmembre != %u", $this->session->userdata('idmembre'));
        }

        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }

    // Modify an ovbject
    public function modifyobjet($idobjet, $nom, $categorie, $price, $description){
        $query = sprintf("UPDATE objet SET nomobjet = '%s', prix = %u, comment = '%s' WHERE idobjet = %u", $nom, $price, $description, $idobjet);
        $sql = $this->db->query($query);

        $query1 = sprintf("UPDATE objet_categorie SET idcategorie = %u WHERE idobjet = %u", $idcategorie, $idobjet);
        $sql1= $this->db->query($query1);
    }    

    // Inserting a new Object
    public function insertnewObjet($nom, $comment, $price, $idcategorie, $image, $image2){
        $query = sprintf("INSERT INTO objet VALUES(null, '%s', '%s', %u, %u)", $nom, $comment, $price, $this->session->userdata('idmembre'));       // Insert objet
        $sql = $this->db->query($query);

        $query2 = "select last_insert_id() as id";
        $sql1 = $this->db->query($query2);
        
        foreach($sql1->result_array() as $row){
            $result[] = $row;
        }
        $last_id = $result[0]['id'];       // Last id of the object


       $query3 = sprintf("INSERT INTO objet_categorie VALUES(null, %u, %u)", $idcategorie, $last_id);      // Insert categrories
       $sql3 = $this->db->query($query3);

       $query4 = sprintf("INSERT INTO images VALUES(null, %u, '%s')", 5, $image);       // Insert objet
       $sql4 = $this->db->query($query4);

       $query5 = sprintf("INSERT INTO images VALUES(null, %u, '%s')", 5, $image2);       // Insert objet
       $sql5 = $this->db->query($query5);
    }

    // Get all categories of an objet
    public function getallcatbyobject($idobjet){
        $query = sprintf("select objet.*, categorie.*
        from objet_categorie
        inner join categorie on objet_categorie.idcategorie = categorie.idcategorie
        inner join objet on objet_categorie.idobjet = objet.idobjet
        where objet_categorie.idobjet = %u", $idobjet);
        $sql = $this->db->query($query);
        $count = 0;

        foreach ($sql-> result_array() as $row){
            $count++;
            $result[] = $row; 
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get all object that is not mine
    public function getallobject(){
        $req = sprintf("SELECT * FROM objet where idmembre != %u", $this->session->userdata('idmembre'));
        $rep = $this->db->query($req);
        $count = 0;

        foreach($rep->result_array() as $row){
            $count++;
            $result[] = $row;
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get an object by id
    public function getobjectbyid($idobjet){
        $req = sprintf("select objet.*, membre.*
            from objet
            inner join membre on membre.idmembre = objet.idmembre 
            where idobjet = %u", $idobjet);
        $rep = $this->db->query($req);
        $count = 0;

        foreach($rep->result_array() as $row){
            $count++;
            $result[] = $row;
        }
        if($count == 0) return 0;
        return $result;
    }

    // Get all image of an object
    public function getallimage($idobjet){
        $req = sprintf("SELECT * FROM images where idobjet = %u", $idobjet);
        $rep = $this->db->query($req);
        $count = 0;

        foreach($rep->result_array() as $row){
            $count++;
            $result[] = $row;
        }
        if($count == 0) return 0;
        return $result;
    }

}