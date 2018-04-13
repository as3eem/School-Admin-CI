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
            $data['ACADFEE']=-1;
            $data['CONVFEE']=-1;
            $this->_insert($data);
        }
    }
    public function search(){
        $this->load->view('navbar');
        $this->load->view('search');
    }

    public function unpaidList(){
        $mon= date("n");
        $req=$mon-2;
        $query = "select * from students where ACADFEE < '".$mon."'";
        $return = $this->_custom_query($query);
        $this->load->view('navbar');
        $this->load->view('unpaidFee');

    }

    public function updateFee(){
        $submit=$this->input->post('submit',TRUE);
        if ($submit=="Submit"){

            $x[0]=$this->input->post('jan',TRUE);
            $x[1]=$this->input->post('feb',TRUE);
            $x[2]=$this->input->post('mar',TRUE);
            $x[3]=$this->input->post('apr',TRUE);
            $x[4]=$this->input->post('may',TRUE);
            $x[5]=$this->input->post('june',TRUE);
            $x[6]=$this->input->post('july',TRUE);
            $x[7]=$this->input->post('aug',TRUE);
            $x[8]=$this->input->post('sep',TRUE);
            $x[9]=$this->input->post('oct',TRUE);
            $x[10]=$this->input->post('nov',TRUE);
            $x[11]=$this->input->post('dec',TRUE);
            $roll=$this->input->post('rollno',TRUE);

            $newMonth=max($x);
            $query = "UPDATE students SET ACADFEE='".$newMonth."' WHERE ROLL='".$roll."'";
            $this->_custom_query($query);
        }
    }
    public function findStudent()
    {
        $submit=$this->input->post('submit',TRUE);
        if($submit== "FIND BY ROLL NUMBER");
        {
            $roll=$this->input->post('roll',TRUE);
            $query = "select * from students where ROLL = '$roll'";
            $return = $this->_custom_query($query);
            foreach ($return->result() as $row)
            {
                $data['id'] = $row->id;
                $data['NAME'] = $row->NAME;
                $data['FNAME'] = $row->FNAME;
                $data['CONTACT'] = $row->CONTACT;
                $data['ROLL'] = $row->ROLL;
                $data['CLASS'] = $row->CLASS;
                $data['ADDRESS'] = $row->ADDRESS;
                $data['ACADFEE'] = $row->ACADFEE;
                $data['CONVFEE'] = $row->CONVFEE;
            }

            $this->load->view('navbar');
            $this->load->view('studentView',$data);
        }
    }
    function _custom_query($mysql_query)
    {
        $this->load->model('User_model');
        $query = $this->User_model->_custom_query($mysql_query);
        return $query;
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
