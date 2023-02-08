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
class Objetcontroller extends CI_Controller {

    // Admin page
    public function homepage(){
        $data = array();
        $this->load->model('objet');
        $this->load->model('userobject');
        $this->load->model('categorie');
        $data['categorie'] = $this->categorie->getCategorie();
        $data['allmyobjet'] = $this->userobject->myobject($this->session->userdata('idmembre'));
        $data['allobjet'] = $this->objet->getAllObject($this->session->userdata('idmembre'));		// Get all object different from mine

        $data['title'] = 'Home | Home';
        $data['contents'] = 'home';
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

        $data['allcat'] =  $this->categorie->getCategorie();
        $data['title'] = 'Objet | New Objet';
        $data['contents'] = 'objet/addnewobjet';
        $this->load->view('main/main', $data);
    }


    // Home page of the user
    public function homepage(){
        $data = array();
        $this->load->model('objet');
        $this->load->model('userobject');
        $this->load->model('categorie');
        $data['categorie'] = $this->categorie->getCategorie();
        $data['allmyobjet'] = $this->userobject->myobject($this->session->userdata('idmembre'));
        $data['allobjet'] = $this->objet->getAllObject($this->session->userdata('idmembre'));		// Get all object different from mine

        $data['title'] = 'Home | Home';
        $data['contents'] = 'home';
        $this->load->view('main/main', $data);
    }

    // Get all my objects
    public function allmyobjet(){
        $data = array();
        $this->load->model('userobject');
        $data['myobjet'] = $this->userobject->myobject($this->session->userdata('idmembre'));

        $data['title'] = 'Profile | My object';
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
        $this->load->view('main/main', $data);
    }

    // Get all my objects
    public function allreceived(){
        $data = array();
        $this->load->model('userobject');
        $data['received'] = $this->userobject->objetreceived($this->session->userdata('idmembre'));

        $data['title'] = 'Profile | Received';
        $data['contents'] = 'profile/received';
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
        $this->load->view('main/main', $data);
    }
}