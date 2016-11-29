<?php
class Category_m extends MY_Model
{
	protected $_table_name = 'categories';
    protected $_primary_key = 'id_category';
    protected $_order_by = 'title';
	public $rules = array( 
		'title' => array(
			'field' => 'title', 
			'label' => 'Title', 
			'rules' => 'trim|required|max_length[100]'
		),
			'items_style' => array(
			'field' => 'items_style', 
			'label' => 'Category items style', 
			'rules' => 'trim|required'
		),

	);
	
	
	
    public function get_new ()
	{
	    $categoty = new stdClass();
		$categoty->title = '';
		$categoty->description='';
		$categoty->items_style='Single_Item';
		return $categoty;
	}
	
	 public function get_categories_array()
	{
		$cats = parent::get();
		$array = array(
			0 => 'Choose category'
		);
		if (count($cats)) {
			foreach ($cats as $cat) {
				$array[$cat->id_category] = $cat->title;
			}
		}
		
		return $array;
	}
	

	
   	// public function get_with_parent($id = NULL, $single = FALSE)
	// {
		// $this->db->select('categories.*, c.title as parent_title');
		// $this->db->join('categories as c', 'categories.parent_id = c.id_category', 'left');
		// return parent::get($id, $single);
	// }
	
}