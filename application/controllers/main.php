<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */

class Main extends CI_Controller {
	
	public function index()
	{
		 $this->load->view('header1_view');
		 $this->load->view('main_view'); 
		 $this->load->view('footer_view');
	}
	public function signUp()
	{
		$data =  array('main_content' => 'register_view');
		$this->load->view('tamplate', $data);
		
	}
	public function events()
	{
		$data =  array('main_content' => 'events_view');
		$this->load->view('tamplate', $data);
		
	}
	public function courses()
	{
		$data =  array('main_content' => 'courses_view');
		$this->load->view('tamplate', $data);
		
	}
	public function about($section)
	{
		if($section == "aboutUS"){
		 $data =  array('main_content' => 'aboutUs_view');
		 $this->load->view('tamplate', $data);	
		 
		}else if($section == "msgOfManager"){
		 $data =  array('main_content' => 'msgOfManager_view');
		 $this->load->view('tamplate', $data);
		 	
		}else if($section == "ourTeam"){
		  $data =  array('main_content' => 'ourTeam_view');
		  $this->load->view('tamplate', $data);	
		}	
	}
	
	public function contact()
	{
		$data =  array('main_content' => 'contact_view');
		$this->load->view('tamplate', $data);
	}
	public function courseInfo()
	{
		$data =  array('main_content' => 'courseInfo_view');
		$this->load->view('tamplate', $data);
	}
	public function studentProfile()
	{
		$data =  array('main_content' => 'studentProfile_view');
		$this->load->view('tamplate', $data);
	}
	public function chating()
	{
		$data =  array('main_content' => 'chating');
		$this->load->view('tamplate', $data);
	}
	public function creatPage()
	{
       $type=$this->input->post('Template');
	  
	   $data =  array('main_content' =>'creatPage_view' , 'data'=>$type);
	   $this->load->view('tamplate', $data);	
	}
	public function adminProfile()
	{
	   $data =  array('main_content' =>'adminProfile_view');
	   $this->load->view('tamplate', $data);	
	}
	 public function test($value='')
	{
		$this->load->view('index.php/admin/_layout_main');	
	}
	public function addPage($value='')
	{
		$data =  array('view' =>'admin/page/addPage');
	    $this->load->view('index.php/admin/_layout_main', $data);
		
	}
	public function editPage($value='')
	{
		$data =  array('view' =>'admin/page/editPage');
	    $this->load->view('index.php/admin/_layout_main', $data);
		
	}
	public function pageToEdit($value='')
	{
		$data =  array('subview' =>'admin/page/pageToEdit' ,'page'=>$value);
	    $this->load->view('admin/_layout_main', $data);
		
	}
}