<?php
class Language_m extends MY_Model
{
	protected $_table_name = 'language';
	protected $_primary_key = 'id_language';
	protected $_order_by = 'language_name';
	public $rules = array(
		'language_name' => array(
			'field' => 'language_name', 
			'label' => 'Language name', 
			'rules' => 'trim|required|is_unique[language.language_name]'
		), 
		'language_slug' => array(
			'field' => 'Slug', 
			'label' => 'Slug', 
			'rules' => 'trim|alpha_dash|required|is_unique[language.slug]'
		), 
		'language_directory' => array(
			'field' => 'language_directory', 
			'label' => 'Language directory', 
			'rules' => 'trim|required'
		), 
		'language_code' => array(
			'field' => 'language_code', 
			'label' => 'Language code', 
			'rules' => 'trim|alpha_dash|required|is_unique[language.language_code]'
		), 
		'default'=>array(
		    'field' => 'default', 
			'label' => 'Default', 
			'rules' => 'trim|in_list[0,1]'
		),
		

	);
	
	public function create($data)
	{
	  if($data['default']=='1')
	  {
	    $this->db->where('default', '1');
	    $this->db->update('language', array('default'=>'0'));
	  }
	  return $this->db->insert('labguage',$data);
	}
	
}