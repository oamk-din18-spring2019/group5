<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index() {
        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        $this->load->view('templates/header', $data); //Load generic header

        $this->load->view('main/content'); //Load actual content for this page
        
        $this->load->view('templates/footer', $data); //Load generic footer
    }

}
