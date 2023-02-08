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
class Objetcontroller extends BaseSession {

    // Research for an object
    public function researchobject(){
        $idcategorie = $this->input->get("categorie");
        $key = $this->input->get("keyword");

        $this->load->model('objet');
        $data['result'] = $this->objet->rechercheobjet($key, $idcategorie);
        $data['key'] = $key;
        $data['title'] = 'Objet | Research Objet';
        $data['contents'] = 'objet/resultresearch';
        $data['entete'] = 'main/header';

        $this->load->view('main/main', $data);
    }


    // Modification of the objet
    public function modifyobjet(){
        $id = $this->input->post('idobjet');
        $cat = $this->input->post('categorie');
        $nom = $this->input->post('nom');
        $prix = $this->input->post('prix');
        $desc = $this->input->post('desc');

        $this->load->model('objet');
        $this->objet->modifyobjet($id, $nom, $cat, $prix, $desc);

        redirect("objetcontroller/allmyobjet");
    }


    // Modificatoin objet page
    public function modifyobjetpage($idobjet){

        $this->load->model('categorie');
        $this->load->model('objet');

        $data['allcat'] = $this->categorie->getcategorie();
        $data['mycategorie'] = $this->objet->getallcatbyobject($idobjet);
        $data['objetcontent'] =  $this->objet->getobjectbyid($idobjet);
       // var_dump( $data['objetcontent']);
        $data['title'] = 'Objet | Modify Objet';
        $data['contents'] = 'objet/modifyobjet';
        $data['entete'] = 'main/header';
        $this->load->view('main/main', $data);
    }

    // Admin page
    public function adminpage(){
        $data = array();
        $this->load->model('objet');
        $this->load->model('userobject');
        $this->load->model('categorie');
        $data['categorie'] = $this->categorie->getcategorie();

        $data['title'] = 'Home | Home';
        $data['entete'] = 'main/headeradmin';
        $data['contents'] = 'admin/adminhome';
        $this->load->view('main/main', $data);
    }
    
    // Add new object
    public function addnewobjet(){
        $nom = $this->input->post('nom');
        $cat = $this->input->post('categorie');
		$prix = $this->input->post('prix');
        $desc = $this->input->post('desc');
        $img = $_FILES['image'];
        $img1 = $_FILES['image1'];

        $imgName = $_FILES['image']['name'];
        $imgName1 = $_FILES['image1']['name'];

        $config['upload_path']   = "./assets/img/";
        $config['allowed_types'] = 'gif|jpg|png'; 
        $config['max_size']      = 100000000; 
        $config['max_width']     = 1024000000; 
        $config['max_height']    = 768;  
        $this->load->library('upload', $config);

        $this->upload->do_upload('image');
        $this->upload->do_upload('image1');
        $data = array('upload_data' => $this->upload->data());

        $this->load->model('objet');

       $this->objet->insertnewobjet($nom, $desc, $prix, $cat, $imgName, $imgName1);
        redirect("objetcontroller/addnewobjetpage/0");
    }
    
    // Page add new object
    public function addnewobjetpage(){
        $this->load->model('categorie');

        $data['allcat'] =  $this->categorie->getcategorie();
        $data['title'] = 'Objet | New Objet';
        $data['contents'] = 'objet/addnewobjet';
        $data['entete'] = 'main/header';
        $this->load->view('main/main', $data);
    }


    // Home page of the user
    public function homepage(){
        $data = array();
        $this->load->model('objet');
        $this->load->model('userobject');
        $this->load->model('categorie');
        $this->load->model('historique');
        $data['categorie'] = $this->categorie->getcategorie();
        $data['allmyobjet'] = $this->userobject->myobject($this->session->userdata('idmembre'));
        $data['allobjet'] = $this->objet->getAllObject($this->session->userdata('idmembre'));		// Get all object different from mine

        $data['title'] = 'Home | Home';
        $data['entete'] = 'main/header';
        $data['contents'] = 'home';
        $this->load->view('main/main', $data);
    }

    // Get all my objects
    public function allmyobjet(){
        $data = array();
        $this->load->model('userobject');
        $this->load->model('objet');
        $data['myobjet'] = $this->userobject->myobject($this->session->userdata('idmembre'));

        $data['title'] = 'Profile | My object';
        $data['entete'] = 'main/header';
        $data['contents'] = 'profile/profile';
        $this->load->view('main/main', $data);
    }

    // Get all my objects
    public function allsent(){
        $data = array();
        $this->load->model('userobject');
        $data['sent'] = $this->userobject->objetsend($this->session->userdata('idmembre'));

        $data['title'] = 'Profile | Sent';
        $data['contents'] = 'profile/send';
        $data['entete'] = 'main/header';
        $this->load->view('main/main', $data);
    }

    // Get all my objects
    public function allreceived(){
        $data = array();
        $this->load->model('userobject');
        $data['received'] = $this->userobject->objetreceived($this->session->userdata('idmembre'));

        $data['title'] = 'Profile | Received';
        $data['contents'] = 'profile/received';
        $data['entete'] = 'main/header';
        $this->load->view('main/main', $data);
    }

    // Get all my objects
    public function allchange(){
        $data = array();
        $this->load->model('userobject');
        $data['refused'] = $this->userobject->objetrefused($this->session->userdata('idmembre'));
        $data['accepted'] = $this->userobject->objetaccepted($this->session->userdata('idmembre'));

        $data['title'] = 'Profile | Changed';
        $data['contents'] = 'profile/change';
        $data['entete'] = 'main/header';
        $this->load->view('main/main', $data);
    }
}