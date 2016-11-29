<?php
class Item_m extends MY_Model
{
	protected $_table_name = 'items';
	protected $_primary_key = 'id_item';
    protected $_order_by = 'title';
	public $rules = array(
		'title' => array(
			'field' => 'title', 
			'label' => 'Title', 
			'rules' => 'trim|required|max_length[100]'
		), 

		'body' => array(
		'field' => 'descreption', 
		'label' => 'Descreption', 
		'rules' => 'trim'
		),
		

	);
	
	public function get_new ()
	{
		$item = new stdClass();
		$item->title = '';
		$item->body = '';
		$item->id_category = 1;
		$item->image= null;
		$item->vedio = null;
		return $item;
	}
	
}