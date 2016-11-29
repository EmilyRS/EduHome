<?php
class Category extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
	}
	
	public function index ()
	{
     	// Load view
		$this->data['subview'] = 'admin/category/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	
	  public function edit($id = NULL){ 
	    // Fetch a category or set a new one
		if ($id) {
			$this->data['category'] = $this->category_m->get($id);
			count($this->data['category']) || $this->data['errors'][] = 'category could not be found';
		}
		else {
			$this->data ['category'] = $this->category_m->get_new();
		}
		
		// Set up the form
		$rules = $this->category_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->category_m->array_from_post(array(
				'title', 
				'description', 
				'items_style'
				
			));
			$this->category_m->save($data, $id);
			redirect('admin/category');
		}
		
		$this->data['subview'] ='admin/category/edit';
	    $this->load->view('admin/_layout_main', $this->data);
    }
	  
		//NEED to be fixed!!
	public function delete ($id){
			$this->category_m->delete($id);
			redirect('admin/category');
	}
	
	

}