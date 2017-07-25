<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model
{
	protected $tableUsers = 'Users';
	protected $tableMessage = 'Message';

	public function __construct()
	{
		parent::__construct();
	}

	public function registerUser($params)
	{
		$fildset = array( 
							'name' => $params['name'], 
							'biography' => $params['biography'],
							'cep' => $params['cep'],
							'street' => $params['street'],
							'num' => $params['num'],
							'neighborhood' => $params['neighborhood'],
							'city' => $params['city'],
							'state' => $params['state'],
							'phone' => $params['phone']
						);

		$this->db->insert($this->tableUsers, $fildset);
	}

	public function getUsers($params)
	{
		$this->db->select($params['fildset']);
		$this->db->order_by($params['order']);
		$query = $this->db->get_where($this->tableUsers, $params['condition']);

		return $query->result_array();
	}

	public function viewUserInformation($params)
	{
		$this->db->select($params['fildset']);
		$query = $this->db->get_where($this->tableUsers, $params['condition']);

		return $query->result_array();
	}

	public function editUser($params)
	{
		
	}
	
	public function dissableUser($params)
	{
		$fildset = array('view' => 0);
		$condition = array('id_user' => $params['id_user']);

		$this->db->where($condition);
		$this->db->update($this->tableUsers, $fildset);
	}
}