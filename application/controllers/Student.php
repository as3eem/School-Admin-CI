<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Controller {

    public function studentAdd()
    {
        $submit = $this->input->post('submit',TRUE);
        if ($submit == "Submit"){
            $data['NAME'] = $this->input->post('name',TRUE);
            $data['FNAME'] = $this->input->post('father',TRUE);
            $data['CONTACT'] = $this->input->post('phone',TRUE);
            $data['ROLL'] = $this->input->post('roll',TRUE);
            $data['CLASS'] = $this->input->post('class',TRUE);
            $data['ADDRESS'] = $this->input->post('address',TRUE);
            $this->_insert($data);
        }
    }
    public function search(){
        $this->load->view('navbar');
        $this->load->view('search');
    }
    public function findStudent()
    {
        $submit=$this->input->post('submit',TRUE);
        if($submit== "FIND BY ROLL NUMBER");
        {
            $roll=$this->input->post('roll',TRUE);

        }
    }

    function _insert($data)
    {
        $this->load->model('User_model');
        $this->User_model->_insert($data);
    }
    function get_where($id)
    {
        if (!is_numeric($id)) {
            die('Non-numeric variable!');
        }

        $this->load->model('User_model');
        $query = $this->User_model->get_where($id);
        return $query;
    }
}
