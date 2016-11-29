<?php
class Menu_m extends MY_Model
{
	protected $_table_name = 'menus';
 	protected $_primary_key = 'id_menu';
    protected $_order_by = 'title';
	public $rules = array(
		'title' => array(
			'field' => 'title', 
			'label' => 'Title', 
			'rules' => 'trim|required|max_length[100]'
		), 
		'slug' => array(
			'field' => 'slug', 
			'label' => 'Slug', 
			'rules' => 'trim|required|max_length[100]|url_title|callback__unique_slug'
		), 
		'descreption' => array(
		'field' => 'descreption', 
		'label' => 'Descreption', 
		'rules' => 'trim'
		),

	);
	
	public function get_new ()
	{
		$menu = new stdClass();
		$menu->title = '';
		$menu->slug = '';
		$menu->description = '';
		$menu->menu_type ='links';
		return $menu;
	}
	
	public function get_main_nav_id()
	{
		$where = array('slug'=>'mainMenu');
	    $res = $this->get_by($where,true);
		return $res->id_menu;	
	}

}