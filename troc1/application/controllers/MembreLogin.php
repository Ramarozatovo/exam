<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MembreLogin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 // Default page
	public function index()
	{
		$this->load->view('membre/login');	
	}	
	
	// Cheking user
	public function checkuser(){
        $name = $this->input->post('name');
        $mdp = $this->input->post('mdp');

		$tname = trim($name);
		
		$this->load->model('membre');
		$data = array();

		$data = $this->membre->checkUser($tname, $mdp);
		
		if($data == 0){
			redirect('membrelogin/index/2');
		}else{

			$id = $data[0]['idmembre'];		// Get the if of the user
			$this->session->set_userdata('idmembre', $id);
			$this->session->set_userdata('name', $name);

			if($data[0]['isAdmin'] == 1){
				redirect('objetcontroller/homepage');
			} else if($data[0]['isAdmin'] == 0){
				redirect('objetcontroller/adminpage');
			}

			
		}
	}

	// Add new User
	public function newuserpage(){
		$this->load->view('membre/adduser');
	}

	public function addnewuser(){
		$name = $this->input->post('name');
        $mdp = $this->input->post('mdp');
		$email = $this->input->post('email');

		$this->load->model('membre');
		if(strcmp(trim($name), "") != 0 && strcmp(trim($mdp), "") != 0 && strcmp(trim($email), "") != 0){
			$this->membre->adduser($name, $email, $mdp);
			redirect('membrelogin/index/1');
		}
	}

	// Deconnexion
	public function deconnexion(){
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('idmembre');
		redirect('membrelogin/index');
	}
}