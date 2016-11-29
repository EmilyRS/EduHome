<?php

class Page extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('menu_element_m');
		$this->load->model('item_m');
		$this->load->model('category_m');
    }
	
	public function index()
	{
		//Fetch the menu element to display the rigth page
		$this->data['page']=$this->menu_element_m->get_with_type(array('slug'=>(string)$this->uri->segment(1)),TRUE);
		count($this->data['page']) || show_404(current_url());
	    
		  
		// Fetch the page data
    	$method = '_'.$this->data['page']->menu_element_type;
    	if (method_exists($this, $method)) {
    		$this->$method();
    	}
    	else {
    		show_error('Could not load template ' . $method);
    	}
    	
		
		
		 $this->data['subview']= $this->data['page']->menu_element_type;
		// dump( $this->data['subview']);
		 $this->load->view('main_layout',$this->data);
		
	}
	
	
	public function _Single_item()
	{
	   $item_id = $this->data['page']->id_item;
       $this->data['page_item']=$this->item_m->get($item_id,TRUE);
    }
	

	
	public function _List_of_categories()
	{
		$where = array('id_menu_element'=>$this->data['page']->id_menu_element);
		$categories = $this->category_m->get_by($where , false);
		$categories_items = array();
		foreach ($categories as $category) {
			$categories_items[$category->id_category] = $this->item_m->get_by(array('id_category'=>$category->id_category),false);
			$categories_items[$category->id_category]['items_style']=$category->items_style;
			$categories_items[$category->id_category]['categoey_title']=$category->title;
		}
		//dump($categories_items);
	    $this->data['categories_items']=$categories_items;
	}
	
	public function _Nested_categories()
	{
		
	}
	
	
	
	
}