<?php
class User extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
		$this->load->library('ion_auth');
	}

	public function index ()
	{
		$this->load->view('admin/user/login', $this->data);
	}

	public function login ()
	{
		$dashboard = 'index.php/admin/dashboard';
		$this->user_m->loggedin() == FALSE || redirect($dashboard);
		// Set form
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
	  
		// Process form
		if ($this->form_validation->run() == TRUE) {
			// We can login and redirect
			if ($this->user_m->login() == TRUE) {
				redirect($dashboard);
			}
			else {
				$this->session->set_flashdata('error', 'That email/password combination does not exist');
				redirect('index.php/admin/user/login', 'refresh');
			}
		}
		
		// Load view
		$this->load->view('admin/user/login', $this->data);
		
	}

	public function logout ()
	{
		$this->user_m->logout();
		redirect('admin/user/login');
	}

	public function _unique_email ($str)
	{
		// Do NOT validate if email already exists
		// UNLESS it's the email for the current user
		
		$id = $this->uri->segment(4);
		$this->db->where('email', $this->input->post('email'));
		!$id || $this->db->where('id !=', $id);
		$user = $this->user_m->get();
		
		if (count($user)) {
			$this->form_validation->set_message('_unique_email', '%s should be unique');
			return FALSE;
		}
		
		return TRUE;
	}
}