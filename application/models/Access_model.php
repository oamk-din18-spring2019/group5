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


    public function addUser($login, $password, $first_name, $last_name) {
        $data = array(
            'login'      => $login,
            'password'   => $password,
            'first_name' => $first_name,
            'last_name'  => $last_name);
        $this->db->db_debug = false;
        $this->db->insert('users', $data);
    }


    public function getUsers() {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->result_array();
    }


    public function getUser($user_id) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id', $user_id);
        return $this->db->get()->result_array();
    }


    public function modifyUser($user_id, $login, $password, $first_name, $last_name) {
        $this->db->set('login',      $login);
        if(strlen($password) > 0)
        {
            $this->db->set('password',   $password);
        }       
        $this->db->set('first_name', $first_name);
        $this->db->set('last_name',  $last_name);
        $this->db->where('user_id', $user_id);
        $this->db->update('users'); 
    }


    public function deleteUser($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->delete('users');
    }


}
