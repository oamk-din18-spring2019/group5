<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }


    public function login()
    {
        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        $this->load->view('templates/header', $data); //Load generic header
        $this->load->view('access/login'); //Show login message/form       
        $this->load->view('templates/footer', $data); //Load generic footer
    }


    public function login_check()
    {
        $this->load->model('Access_model');

        //Get input from users
        $login    = $this->input->post('login');
        $password = $this->input->post('password');

        //Get user password from database
        $user_password = $this->Access_model->getUserPassword($login);

        if($user_password == $password) {
            //Password correct, set data to users session and redirect to main page
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_first_name'] = $this->Access_model->getUserFirstName($login);
            $_SESSION['user_last_name']  = $this->Access_model->getUserLastName($login);
            redirect('main');
        } else {
            //Wrong password or login, redirect back to login page
            redirect('access/login');
        }
    }


    function logout() {
        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        //Clear session data
        $_SESSION['user_logged_in'] = false;
        $_SESSION['user_first_name'] = "";
        $_SESSION['user_last_name']  = "";

        $this->load->view('templates/header', $data); //Load generic header
        $this->load->view('access/logout'); //Show logout message
        $this->load->view('templates/footer', $data); //Load generic footer        
    }


    function admin_menu() {
        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
            $this->load->view('templates/header', $data); //Load generic header
            $this->load->view('access/admin_menu'); //Show administrator menu
            $this->load->view('templates/footer', $data); //Load generic footer  
        } else {
            //User not logged in, redirect to login page
            redirect('access/login');
        }
    }


    function add_user_form() {
        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
            $this->load->view('templates/header', $data); //Load generic header
            $this->load->view('access/add_user_form'); //Show add user form
            $this->load->view('templates/footer', $data); //Load generic footer  
        } else {
            //User not logged in, redirect to login page
            redirect('access/login');
        }
    }


    function add_user() {
        $this->load->model('Access_model');
        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value

        if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
            //Get input from users
            $login     = $this->input->post('login');
            $password  = $this->input->post('password');
            $first_name =$this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $this->Access_model->addUser($login, $password, $first_name, $last_name);

            $data['users']=$this->Access_model->getUsers();
            $this->load->view('templates/header', $data); //Load generic header
            $this->load->view('access/show_users', $data); //Show users
            $this->load->view('templates/footer', $data); //Load generic footer  

        } else {
            //User not logged in, redirect to login page
            redirect('access/login');
        }
    }


    function show_users() {
        $data['title'] = ucfirst($this->router->fetch_class()); //Set title to same as this class name with capital letter at first, header.php echoes title value
        $this->load->model('Access_model');
        $data['users']=$this->Access_model->getUsers();
        $this->load->view('templates/header', $data); //Load generic header
        $this->load->view('access/show_users', $data); //Show users
        $this->load->view('templates/footer', $data); //Load generic footer  
    }


    function edit_user($user_id) {
        $this->load->model('Access_model');
        $data['user']=$this->Access_model->getUser($user_id)[0];
        $this->load->view('templates/header', $data); //Load generic header
        $this->load->view('access/edit_user_form', $data); //Show user edit form
        $this->load->view('templates/footer', $data); //Load generic footer  
    }

    function modify_user() {
        $this->load->model('Access_model');
        if(empty($_SESSION['user_logged_in']) == false && $_SESSION['user_logged_in'] == true) {
            //Get input from users
            $user_id   = $this->input->post('user_id');
            $login     = $this->input->post('login');
            $password  = $this->input->post('password');
            $first_name =$this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $this->Access_model->modifyUser($user_id, $login, $password, $first_name, $last_name);

           $data['users']=$this->Access_model->getUsers();
            $this->load->view('templates/header', $data); //Load generic header
            $this->load->view('access/show_users', $data); //Show users
            $this->load->view('templates/footer', $data); //Load generic footer
        } else {
            //User not logged in, redirect to login page
            redirect('access/login');
        }
    }



    function confirm_delete_user($user_id) {
        $this->load->model('Access_model');
        $data['user']=$this->Access_model->getUser($user_id)[0];
        $this->load->view('templates/header', $data); //Load generic header
        $this->load->view('access/confirm_delete_user', $data); //Show confirmation for user delete
        $this->load->view('templates/footer', $data); //Load generic footer  
    }


    function delete_user($user_id) {
        $this->load->model('Access_model');
        $this->Access_model->deleteUser($user_id);
        $data['users']=$this->Access_model->getUsers();
        $this->load->view('templates/header', $data); //Load generic header
        $this->load->view('access/show_users', $data); //Show users
        $this->load->view('templates/footer', $data); //Load generic footer  
    }


}
