<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->output->set_header("last-Modified:" .gmdate('D,d M Y H:i:s').'GMT');
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0",false);
        $this->output->set_header("Pragma: no-cache");
		$this->load->model('student_model');
		$this->load->model('dep_model');
		$data=array();
		if (!$this->session->userdata('userlogin')) {
			redirect('user/login');
		}
	}

	public function studentlist(){
		$data=array();
		$data['title']='User list';
		$data['header']=$this->load->view('inc/header',$data,TRUE);
		$data['sidebar']=$this->load->view('inc/sidebar','',TRUE);
		$data['studentdata']=$this->student_model->getAllstudentData();
		$data['content']=$this->load->view('inc/liststudent',$data,TRUE);
		$data['footer']=$this->load->view('inc/footer','',TRUE);
		$this->load->view('home',$data);
	}

	public function editstudent($id){
		$data=array();
		$data['title']='Edit User';
		$data['header']=$this->load->view('inc/header',$data,TRUE);
		$data['sidebar']=$this->load->view('inc/sidebar','',TRUE);
		$data['stuById']=$this->student_model->getStudentById($id);
		$data['departdata']=$this->dep_model->getAlldepData();
		$data['content']=$this->load->view('inc/editstudentform',$data,TRUE);
		$data['footer']=$this->load->view('inc/footer','',TRUE);
		$this->load->view('home',$data);
	}
	public function updatestudent(){
		$data['id']=$this->input->post('id');
		$data['name']=$this->input->post('name');
		$data['phone']=$this->input->post('phone');
		$data['email']=$this->input->post('email');

        $id=$data['id'];
		$name=$data['name'];
		$phone=$data['phone'];
		$email=$data['email'];
		if(empty($name) && empty($phone)&& empty($email)){
           $sdata=array();
           $sdata['msg']='<span style="color:red ">field must not be empty</span>';
           $this->session->set_flashdata($sdata);
           redirect("student/editstudent/".$id);
		}else{
			$this->student_model->updateStudentData($data);
			$sdata=array();
            $sdata['msg']='<span style="color:green;">updated</span>';
            $this->session->set_flashdata($sdata);
            redirect("student/editstudent/".$id);
		}
	}
	public function delstudent($id){
            $this->student_model->delStudentById($id);
			$sdata=array();
            $sdata['msg']='<span style="color:green;">deleted</span>';
            $this->session->set_flashdata($sdata);
            redirect("student/studentlist");
	}
}
