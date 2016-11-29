<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Languages extends Admin_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('language_m');
  }
  
   public function index()
  {
  	$this->data['languages'] = $this->language_m->get();
	$this->data['subview']='admin/language/index';
    $this->load->view('admin/_layout_main',$this->data);
  }
 
  public function create()
  {
	$rules = $this->language_m->rules;
	$this->form_validation->set_rules($rules); 
	if($this->form_validation->run()===FALSE)
	  {
	    $this->data['subview']='admin/language/create';
        $this->load->view('admin/_layout_main',$this->data);
	  }
	else
	  {
	  	$new_language = $this->language_m->array_from_post(array(
				'language_name', 
				'slug',  
				'language_directory', 
				'language_code',
				'default'
			));
		$this->session->set_flashdata('message', 'Language added successfully');
	    if (!$this->language_m->create($new_language))
	    {
	      $this->session->set_flashdata('message', 'There was an error inserting the new language');
	    }
	    redirect('admin/languages', 'refresh');
			
			
	  }
  }
 
  public function update()
  { 
  }
 
  public function delete()
  { 
  }
}