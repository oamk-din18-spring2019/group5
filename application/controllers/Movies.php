<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

    public function show_movies() {
    	$data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        // $this->load->view('templates/header', $data); //Load generic header
    	$title['movie_data'] = $this->get_movie_data();
    	$title['sort_title_asc'] = $this->sort_title_asc();
    	$title['sort_title_desc'] = $this->sort_title_desc();
    	$title['sort_year_asc'] = $this->sort_year_asc();
    	$title['sort_year_desc'] = $this->sort_year_desc();
    	$title['sort_genre'] = $this->sort_genre();
        $this->load->view('movies/Show_movies', $title); //Load actual content for this page
        
        // $this->load->view('templates/footer', $data); //Load generic footer
    
   }

	private function get_movie_data() 
		{
			$this->load->model('Get_movies');
			$title = $this->Get_movies->get_data();
			return $title;
		}

	private function sort_title_asc() 
		{
			$this->load->model('Get_movies');
			$title = $this->Get_movies->sortTitleAsc();
			return $title;
		}

	private function sort_title_desc() 
		{
			$this->load->model('Get_movies');
			$title = $this->Get_movies->sortTitleDesc();
			return $title;
		}

	private function sort_year_asc() 
		{
			$this->load->model('Get_movies');
			$title = $this->Get_movies->sortYearAsc();
			return $title;
		}

	private function sort_year_desc() 
		{
			$this->load->model('Get_movies');
			$title = $this->Get_movies->sortYearDesc();
			return $title;
		}

	private function sort_genre() 
		{
			$this->load->model('Get_movies');
			$title = $this->Get_movies->sortGenre();
			return $title;
		}
 }
