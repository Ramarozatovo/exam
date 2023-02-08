<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('BaseSession.php');
class CategorieController extends BaseSession {

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

     public function modifycategoriecontroller(){
        $idcategorie = $this->input->post('idcategorie');
        $newname = $this->input->post('nomcategorie');

        $this->load->model('categorie');
        $this->categorie->modifycategorie($newname, $idcategorie);
        redirect('objetcontroller/adminpage');
    }

    public function deletecategoriecontroller(){
        $idcategorie = $this->input->post('idcategorie');

        $this->load->model('categorie');
        $this->categorie->deletecategorie($idcategorie);
       redirect('objetcontroller/adminpage');
    }

}