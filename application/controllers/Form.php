<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('form_model');
    }


    public function submitForm() {
        $this->form_model->insert($_POST);
    }

}

