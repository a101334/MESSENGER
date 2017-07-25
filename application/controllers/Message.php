<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Model'));
	}

	public function index()
	{
		$this->load->view('header');

		$this->load->view('message_view');

		$this->load->view('footer');
	}
}