<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access_model extends CI_Model {


   public function __construct()
   {
       parent::__construct();
   }


    public function getUserPassword($login) {
        $this->db->select('password');
        $this->db->from('users');
        $this->db->where('login', $login);
        return $this->db->get()->row('password');
    }


    public function getUserFirstName($login) {
        $this->db->select('first_name');
        $this->db->from('users');
        $this->db->where('login', $login);
        return $this->db->get()->row('first_name');
    }


    public function getUserLastName($login) {
        $this->db->select('last_name');
        $this->db->from('users');
        $this->db->where('login', $login);
        return $this->db->get()->row('last_name');
    }


}
