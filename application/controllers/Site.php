<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('record_model');

    }

    public function index()
	{
		$data['title'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('templates/footer');
	}

    public function about()
    {
        $data['title'] = 'About';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }

    public function contact()
    {
        $data['title'] = 'Contact';
        $this->load->view('templates/header', $data);
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }

    public function form()
    {
        $data['title'] = 'Form';
        $this->load->view('templates/header', $data);
        $this->load->view('form/index');
        $this->load->view('templates/footer');
    }

    public function table()
    {
        $data['title'] = 'Table';
        //Fetch fields of the table
        $data['fields'] = $this->record_model->getTableFields();
        //Fetch all records
        $data['records'] = $this->record_model->select(0);
        $this->load->view('templates/header', $data);
        $this->load->view('table/index', $data);
        $this->load->view('templates/footer');
    }

    public function pec()
    {
        $data['title'] = 'PEC Form';
        $this->load->view('templates/header', $data);
        $this->load->view('pec/form');
        $this->load->view('templates/footer');
    }

}

