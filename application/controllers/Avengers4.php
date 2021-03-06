<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Avengers4 extends CI_Controller {

    public function show_avengers4() {

    $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value
    $this->load->view('templates/header', $data); //Load generic header
    $title['movie_data'] = $this->get_movie_data();
    $this->load->view('avengers4/show_avengers4', $title); //Load actual content for this page
    $this->load->view('templates/footer', $data); //Load generic footer

    }

    private function get_movie_data() 
		{
			$this->load->model('Get_movies');
			$title = $this->Get_movies->get_data();
			return $title;
		}

}