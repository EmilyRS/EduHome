<?php
class Menu extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('menu_element_m');
	}
	
 	public function index ()
	{
		// Load view
		$this->data['subview'] = 'admin/menu/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
    public function edit($id = NULL){ 
	    // Fetch a menu or set a new one
		if ($id) {
			$this->data['menu'] = $this->menu_m->get($id);
			count($this->data['menu']) || $this->data['errors'][] = 'menu could not be found';
		}
		else {
			$this->data ['menu'] = $this->menu_m->get_new();
		}
		
		// Set up the form
		$rules = $this->menu_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->menu_m->array_from_post(array(
				'title', 
				'slug', 
				'description', 
				'menu_type'
				
			));
			$this->menu_m->save($data, $id);
			redirect('admin/menu');
		}
		
		$this->data['subview'] ='admin/menu/edit';
	    $this->load->view('admin/_layout_main', $this->data);
    }
	
	
	//NEED to be fixed!!
	public function delete ($id){
			$this->menu_m->delete($id);
			redirect('admin/menu');
	}
	
	
	public function _unique_slug ($str)
	{
		// Do NOT validate if slug already exists
		// UNLESS it's the slug for the current menu
		$id = $this->uri->segment(4);
		$this->db->where('slug', $this->input->post('slug'));
		! $id || $this->db->where('id_menu !=', $id);
		$menu = $this->menu_m->get();
		
		if (count($menu)) {
			$this->form_validation->set_message('_unique_slug', '%s should be unique');
			return FALSE;
		}
		
		return TRUE;
	}
	

}