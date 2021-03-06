<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class library extends CI_Controller {
    public function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('userlogin')) {
			redirect('user/login');
		}
	}
	public function index()
	{
		$this->home();
	}
	public function home()
	{
		$data=array();
		$data['title']='library management system';
		$data['header']=$this->load->view('inc/header',$data,TRUE);
		$data['sidebar']=$this->load->view('inc/sidebar','',TRUE);
		$data['content']=$this->load->view('inc/content','',TRUE);
		$data['footer']=$this->load->view('inc/footer','',TRUE);
		$this->load->view('home',$data);
	}

	public function sendFeedback(){
		$feedback=$this->input->post('feedback');
		$data = array(
			'feedback'=>$feedback
		);
		$this->db->insert('feedback',$data);
		redirect('/', 'refresh');
	}
}
