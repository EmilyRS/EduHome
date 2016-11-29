<?php
class Menu_element_m extends MY_Model
{
	protected $_table_name = 'menu_elements';
 	protected $_primary_key = 'id_menu_element';
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
		'Type'=>array(
		    'field' => 'id_menu_element_type', 
			'label' => 'Type', 
			'rules' => 'trim|required'
		),
		'page_style'=>array(
		    'field' => 'page_style', 
			'label' => 'Page style', 
			'rules' => 'trim|required'
		)

	);
	
	public function getMenuItems($id_menu,$id_current_item=null)
	{   if($id_current_item!=null){
		$this->db->where('id_menu_element!=',$id_current_item);
	    }
		
		$where = array('id_menu'=>$id_menu);
	    return $this->get_by($where,false);
	}
	
	public function get_new ()
	{
		$menu_item = new stdClass();
		$menu_item->title = '';
		$menu_item->slug = '';
		$menu_item->id_menu_element_type = 1 ;
		$menu_item->id_menu = 1; // default 
		$menu_item->id_parent = 0;
		$menu_item->id_item= null;
		$menu_item->id_categories_menu = null;
		$menu_item->page_style='Rows';
		return $menu_item;
	}
	
	
	
	//بدها تزبيط بحيث تردأكثر من مستوى للقائمة
    public function get_nested ($id_menu)
	{
		$this->db->order_by($this->_order_by);
		$this->db->where('id_menu',$id_menu);
		$elems = $this->db->get('menu_elements')->result_array();
		
		$array = array();
		foreach ($elems as $elem) {
			if (! $elem['id_parent']) {
				// This menu element has no parent
				$array[$elem['id_menu_element']] = $elem;
			}
			else {
				// This is a child menu element
				$array[$elem['id_parent']]['children'][] = $elem;
			}
		}
		return $array;
	}

	  public function parent_choices_array($elements)
	  {
		   	$array = array(
				0 => 'No parent item'
			);
			if (count($elements)) {
				foreach ($elements as $element) {
					$array[$element->id_menu_element] = $element->title;
				}
			}
			
			return $array;
	  }

	  public function get_with_type($where,$single = FALSE)
	  {
	      $this->db->select('menu_elements.*, type.name as menu_element_type');
		  $this->db->join('menu_element_type as type', 'menu_elements.id_menu_element_type=type.id_menu_element_type', 'left');
		  return parent::get_by($where, $single);
	  }
  
	  public function delete ($id)
		{
			// Delete a page
			parent::delete($id);
			
			// Reset parent ID for its children
			$this->db->set(array(
				'id_parent' => 0
			))->where('id_parent', $id)->update($this->_table_name);
		}
}