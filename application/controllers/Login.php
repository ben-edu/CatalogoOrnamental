<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->database('default');
    }


    public function index()
    {
        $this->load->view('login/login.php');
    }
}