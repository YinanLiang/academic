<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/18/15
 * Time: 4:53 PM
 */

class Form_Model extends CI_Model {

    public function __construct() {
        //connect to database
        $this->load->database();
    }

    public function insert($data) {
        print_r($data);

        $this->db->insert('forms', $data);
    }


}