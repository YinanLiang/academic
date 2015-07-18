<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('record_model');
    }


    public function submitForm() {

        $this->record_model->insert($_POST);

        //switch to table page after submit form
        $this->loadTable(0);
    }

    public function loadTable($numRows) {

        //Fetch fields of the table
        $data['fields'] = $this->record_model->getTableFields();
        //Fetch all records
        $data['records'] = $this->record_model->select(0);
        $this->load->view('templates/header');
        $this->load->view('table/index', $data);
        $this->load->view('templates/footer');

    }

}

