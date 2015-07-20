<?php
/**
 * Created by PhpStorm.
 * User: Lynn
 * Date: 7/20/15
 * Time: 11:50 AM
 */

class Pec_Model extends CI_Model {

    public function __construct() {
        //connect to database
        $this->load->database();
    }

    public function insert($data) {

        //convert checkbox data to array
        //$data['checkbox'] = implode(', ', $data['checkbox']);
        //$data['inlineCheckbox'] = implode(', ', $data['inlineCheckbox']);

        $this->db->insert('forms', $data);
    }

    public function select($numRows) {
        //select specific number of rows from table. If numRows is 0, then fetch all records
        if ($numRows === 0) {
            //fetch the entire table
            return $this->db->get('forms')->result();
        } else {

        };
    }

    public function getTableFields() {
        return $this->db->list_fields('forms');
    }
}