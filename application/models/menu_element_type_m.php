<?php
class Menu_element_type_m extends MY_Model
{
	protected $_table_name = 'menu_element_type';
 	protected $_primary_key = 'id_menu_element_type';
	
	public function get_types_array()
	{
		$types = parent::get();
		$array = array(
		 0 => 'Dropdown'
		);
		if (count($types)) {
			foreach ($types as $type) {
				$array[$type->id_menu_element_type] = $type->name;
			}
		}
		
		return $array;
	}
}