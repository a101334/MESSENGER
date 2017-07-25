<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsertUser extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model(array('Model'));
	}

	public function index()
	{
		$name = NULL;
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
			switch ($submit)
			{

				case 'REGISTER':
				{
						$this->Model->RegisterUser($params);
						echo "Register User Successflly!!<br>";
						$submit = NULL;
					
				}break;

				case 'EDIT':
				{
					echo "Make update!!<br>";
				}break;

			}
		}

		$this->load->view('insert_user');
	}

}
