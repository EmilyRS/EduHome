<?php
class Menu_items extends Admin_Controller
{

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('menu_element_m');
		$this->load->model('category_m');
	}
	
	public function index($id_menu)
	{
		$current_menu_info = $this->menu_m->get($id_menu , TRUE);
		$this->session->set_userdata('current_menu',$current_menu_info);
		$this->data['menu_items']= $this->menu_element_m->getMenuItems($id_menu);
		$this->session->set_userdata('current_menu_items',$this->data['menu_items']);
		$this->data['subview'] = 'admin/menu_items/index';
		$this->load->view('admin/_layout_main', $this->data);
	}
	

	
	public function edit($id = NULL){
	    // Fetch menu items or set a new one
		if ($id) {
			$this->data['menu_item'] = $this->menu_element_m->get($id);
			count($this->data['menu_item']) || $this->data['errors'][] = 'menu item could not be found';
		}
		else {
			$this->data ['menu_item'] = $this->menu_element_m->get_new();
		}
		
		//get the parent choices
		$this->data['parent_choices_array']=$this->menu_element_m->parent_choices_array($this->session->userdata('current_menu_items'));
		
		// Fetch the menu item types
		$this->load->model('menu_element_type_m');
		$this->data['menu_item_types']= $this->menu_element_type_m->get_types_array();
		// Set up the form
		$rules = $this->menu_element_m->rules;
		$this->form_validation->set_rules($rules);
		
		// Process the form
		if ($this->form_validation->run() == TRUE) {
			$data = $this->menu_element_m->array_from_post(array(
				'title', 
				'slug', 
				'id_menu_element_type', 
				'id_menu',
				'id_parent',
				'id_item',
				'id_categories_menu',
				'page_style'				
			));
			$category_select_data = $this->menu_element_m->array_from_post(array(
			   'singleCategory',
			   'categoriesList'
			));
			
			//Saveing edits in menu_elements table
			$this->menu_element_m->save($data, $id);
			
			//Saveing edits in categories table
			$id_menu_element = $this->data['menu_item']->id_menu_element;
			$dataUpdated = array('id_menu_element'=>$id_menu_element);
			if(isset($category_select_data['singleCategory'])){
				$id_category = $category_select_data['singleCategory'];
				$this->category_m->save($dataUpdated , $id_category);
			}elseif(isset($category_select_data['categoriesList'])){
				$category_ids_array = $category_select_data['categoriesList'];
				foreach ($category_ids_array as $id) {
					$this->category_m->save($dataUpdated , $id);
				}
			}
			
			redirect('admin/menu_items/index/'.$this->session->userdata('current_menu')->id_menu);
		}
		
		$this->data['subview'] ='admin/menu_items/edit';
	    $this->load->view('admin/_layout_main', $this->data);
    }
	
	
	public function delete ($id){
			$this->menu_element_m->delete($id);
			redirect('admin/menu_items/index/'.$this->session->userdata('current_menu')->id_menu);
	}
	
	public function _unique_slug ($str)
	{
		// Do NOT validate if slug already exists
		// UNLESS it's the slug for the current menu item
		$id = $this->uri->segment(4);
		$this->db->where('slug', $this->input->post('slug'));
		! $id || $this->db->where('id_menu_element !=', $id);
		$menu_item = $this->menu_element_m->get();
		
		if (count($menu_item)) {
			$this->form_validation->set_message('_unique_slug', '%s should be unique');
			return FALSE;
		}
		
		return TRUE;
	}
}