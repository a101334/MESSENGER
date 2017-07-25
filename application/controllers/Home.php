<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Model'));
	}

	public function index()
	{

		$id_user = NULL;

		extract($_POST);
		$params['id_user'] = $id_user;

		;
		if(isset($delete))
		{	
			$this->Model->dissableUser($params);
		}

		$data['fildset'] = array(
									'id_user',
									'name',
									'phone'
								);

		$data['condition'] = array
							(
								'view' => 1 //Show in display the user with view = 1
							);
		$data['order'] = 'id_user asc';

		$data['results'] = $this->Model->getUsers($data);
		$this->load->view('home', $data);
	}
}