<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewUser extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Model'));
	}

	public function index()
	{
		$id_user = NULL;
		$data = NULL;
		
		extract($_POST);

		$id_user;
		
			$data['fildset'] = array
							   (
									'id_user',
									'name',
									'birthday',
									'biography',
									'cep',
									'street',
									'num',
									'neighborhood',
									'city',
									'state',
									'phone'

								);

			$data['condition'] = array
								(
									'id_user' => $id_user
								);

			$data['results'] = $this->Model->viewUserInformation($data);

		$this->load->view('view_user/index', $data);

	}
}
