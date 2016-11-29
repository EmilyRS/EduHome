<?php
class Item extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('item_m');
	}
	
	public function index ()
	{
		// Load view
		$this->data['subview'] = 'admin/item/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	
	
	  public function edit($id = NULL){ 
	    // Fetch a item or set a new one
		if ($id) {
			$this->data['item'] = $this->item_m->get($id);
			count($this->data['item']) || $this->data['errors'][] = 'item could not be found';
		}
		else {
			$this->data ['item'] = $this->item_m->get_new();
		}
	
		// Set up the form
		$rules = $this->item_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->item_m->array_from_post(array(
				'title', 
				'body', 
				'id_category'
				
			));
			$this->item_m->save($data, $id);
			redirect('admin/item');
		}
		
		$this->data['subview'] ='admin/item/edit';
	    $this->load->view('admin/_layout_main', $this->data);
    }
	  
		//NEED to be fixed!!
	public function delete ($id){
			$this->item_m->delete($id);
			redirect('admin/item');
	}
	
	

}