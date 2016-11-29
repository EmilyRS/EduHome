<?php $this->load->view('header1_view'); 
 $this->load->view('header2_view');
if(isset($data))
 $this->load->view($main_content,$data); 
else
 $this->load->view($main_content); 

 $this->load->view('footer_view'); 
 
?>