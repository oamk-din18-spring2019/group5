<?php

class get_movies extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('movies');
		return $query->result();
	}



}


?>