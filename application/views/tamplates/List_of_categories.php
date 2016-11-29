<!-- content -->
<div id="content">
	<!-- container -->
    <div class="container-fluid">
<!-- 1) type List Of category : collapse_Categories  --> 
     <?php if($page->page_style=='Collapse'): ?>
	    <?php $this->load->view('tamplates/collapse_Categories');?>
	 <?php endif; ?>
<!-- 2) type List Of category : Rows_Categories  -->  
    <?php if($page->page_style=='Rows'): ?>
	    <?php $this->load->view('tamplates/Rows_Categories');?>
	<?php endif; ?>
	</div>
    <!-- /.container -->
</div>
<!-- /#content -->