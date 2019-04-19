<?php

class Get_movies extends CI_Model {

	public function get_data()
	{
		$query = $this->db->get('movies');
		return $query->result();
	}

	public function sortTitleAsc()
	{
		$this->db->order_by("title", "asc");
		$query = $this->db->get('movies');
		return $query->result();
	}

	public function sortTitleDesc()
	{
		$this->db->order_by("title", "desc");
		$query = $this->db->get('movies');
		return $query->result();
	}

	public function sortYearAsc()
	{
		$this->db->order_by("year", "asc");
		$query = $this->db->get('movies');
		return $query->result();
	}

	public function sortYearDesc()
	{
		$this->db->order_by("year", "desc");
		$query = $this->db->get('movies');
		return $query->result();
	}

	public function sortGenre()
	{
		$this->db->order_by("genre", "asc");
		$query = $this->db->get('movies');
		return $query->result();
	}
}


?>