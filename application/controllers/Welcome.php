<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('biodata');
	}


	public function index()
	{
		$this->load->model('biodata');
		$data["biodata_array"] = $this->biodata->getBiodataArray();
		$data["biodata_object"] = $this->biodata->getBiodataObject();
		$this->load->view('welcome_message',$data);

	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
}
