<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title']="Home";
		$this->load->view('include/header', $data);
		$this->load->view('index');
		$this->load->view('include/footer');
	}
	public function about()
	{
		$data['title']="About";
		$this->load->view('include/header', $data);
		$this->load->view('about');
		$this->load->view('include/footer');
	}
	public function products()
	{
		$data['title']="Products";
		$this->load->view('include/header', $data);
		$this->load->view('products1');
		$this->load->view('include/footer');
	}
	public function services()
	{
		$data['title']="Services";
		$this->load->view('include/header', $data);
		$this->load->view('services');
		$this->load->view('include/footer');
	}
	public function contact()
	{
		$data['title']="Contact Us";
		$this->load->view('include/header', $data);
		$this->load->view('contact');
		$this->load->view('include/footer');
	}
}
