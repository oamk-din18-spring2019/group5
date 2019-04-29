<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {


   public function __construct()
   {
       parent::__construct();
   }


    public function getRandomMoviePosters($amount) {
        $this->db->select('img_url');
        $this->db->from('movies');
        $this->db->order_by('img_url', 'RANDOM');
        $this->db->limit($amount);
        $rows = $this->db->get()->result_array();
        
        $posters = array();
        foreach ($rows as $row) {
            array_push($posters, $row['img_url']);
        }
        return $posters;
    }


}