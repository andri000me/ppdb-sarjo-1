<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth_model');
  }
  
  public function index()
  {
    
  }

}

/* End of file Auth.php */
