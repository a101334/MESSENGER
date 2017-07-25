<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertUser extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Model'));
		// $this->load->library('form_validation');

		// $config = array(
		// 					array(
		// 							'fildset' => 'name',
		// 							'label' => 'NAME',
		// 							'rules' => 'required',
		// 							'error' => array(
		// 												'required' => 'Please input %s',
		// 											),

		// 						 )


		// 			   );

		// $this->form_validation->set_rules($config);
	}

	public function index()
	{
		$name = NULL;
		$birthday = NULL;
		$biography = NULL;
		$cep = NULL;
		$street = NULL;
		$num = NULL;
		$neighborhood = NULL;
		$city = NULL;
		$state = NULL;
		$phone = NULL;

		extract($_POST);

		$params['name'] = $name;
		$params['birthday'] = $birthday;	
		$params['biography'] = $biography;
		$params['cep'] = $cep;
		$params['street'] = $street;
		$params['num'] = $num;
		$params['neighborhood'] = $neighborhood;
		$params['city'] = $city;
		$params['state'] = $state;
		$params['phone'] = $phone;
		
		
		if(isset($submit))
		{	

			$this->Model->RegisterUser($params);
			echo "Register User Successflly!!<br>";
			$submit = NULL;
			$params = NULL;

		}

		$this->load->view('insert_user');
	}

}
