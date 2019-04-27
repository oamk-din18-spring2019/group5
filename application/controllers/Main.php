<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }


    public function index() {
        $this->load->model('Main_model');

        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        //Get 5 random movie posters from database
        $data['posters'] = $this->Main_model->getRandomMoviePosters(5);

        $this->load->view('templates/header', $data); //Load generic header

        $this->load->view('main/content'); //Load actual content for this page
        
        $this->load->view('templates/footer', $data); //Load generic footer
    }

  
}
