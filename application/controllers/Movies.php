<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

    public function show_movies() {
    	$data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        // $this->load->view('templates/header', $data); //Load generic header
    	$title['movie_data'] = $this->get_title_data();
        $this->load->view('movies/show_movies', $title); //Load actual content for this page
        
        // $this->load->view('templates/footer', $data); //Load generic footer
    
   }

	private function get_title_data() 
		{
			$this->load->model('get_movies');
			$title = $this->get_movies->get_data();
			return $title;
		}

 }
