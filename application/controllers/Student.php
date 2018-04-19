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
        $req=new DateTime("30-05-2018");
        $query = "select * from students where id='2'";
        $return = $this->_custom_query($query);
        foreach ($return->result() as $k){
            $tst=$k->ACADFEE;
            $w= new DateTime("30-".$tst);
            $w->format('d-m-Y');
            $d=new DateTime("now");
            print_r(($d));
            echo $d->diff($w);die;
        }
        echo "<pre>";print_r($return->result());die;
        $this->load->view('navbar');
        $this->load->view('unpaidFee');
    }


    public function updateConvFee(){
        $submit=$this->input->post('submit',TRUE);
        if ($submit=="Submit"){
            $mon=$this->input->post('mon');
            $year=$this->input->post('year');
            $acadDate=$mon."-".$year;
            $roll=$this->input->post('rollno',TRUE);
            $query = "UPDATE students SET CONVFEE='".$acadDate."' WHERE ROLL='".$roll."'";
            $this->_custom_query($query);
            echo "<script language=\"javascript\">alert('Fee updated Successfully');</script>";

        }
    }

    public function updateFee(){
        $submit=$this->input->post('submit',TRUE);
        if ($submit=="Submit"){
            $mon=$this->input->post('mon');
            $year=$this->input->post('year');
            $acadDate=$mon."-".$year;
            $roll=$this->input->post('rollno',TRUE);
            $query = "UPDATE students SET ACADFEE='".$acadDate."' WHERE ROLL='".$roll."'";
            $this->_custom_query($query);
            echo "<script language=\"javascript\">alert('Fee updated Successfully');</script>";

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
