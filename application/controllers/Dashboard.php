<?php
/**
 * Created by PhpStorm.
 * User: Aditya
 * Date: 10/07/2015
 * Time: 12:43 PM
 */

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('dashboard_model');
    }

    public function index()
    {
        $data=array();
        //$data['news'] = $this->news_model->get_news();
        //$data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');

    }

}