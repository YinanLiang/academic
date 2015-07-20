<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/20/15
 * Time: 11:49 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pec extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('Pec_Model');
    }


    public function submitForm() {

    }

}