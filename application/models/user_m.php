<?php
class User_M extends MY_Model
{
	
	protected $_table_name = 'user';
	protected $_order_by = 'name';
	public $rules = array(
	
	    'email' => array(
			'field' => 'email', 
			'label' => 'Email', 
			'rules' => 'trim|required|valid_email'
		), 
 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);

	function __construct ()
	{
		parent::__construct();
	}

	public function login ()
	{
		$user = $this->get_by(array(
			'email' => $this->input->post('email'),
			'password' =>$this->input->post('password'),
		), TRUE);
		
		if (count($user)) {
			// Log in user
			$data = array(
				'name' => $user->name,
				'email' => $user->email,
				'id' => $user->id_user,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
		}
	}

	public function logout ()
	{
		$this->session->sess_destroy();
	}

	public function loggedin ()
	{
		return (bool) $this->session->userdata('loggedin');
	}
	

}