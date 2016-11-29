<h3><?php echo empty($category->id_category) ? 'Add a new category' : 'Edit category ' . $category->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">
	<tr>
		<td>Title</td>
		<td><?php echo form_input('title', set_value('title', $category->title)); ?></td>
	</tr>
	
	<tr>
		<td>Description</td>
		<td><?php echo form_textarea('description', set_value('description', $category->description),'class="form-control editor tinymce"'); ?></td>
	</tr>
	
	<tr>
		<td>Category items style</td>
		<td><?php echo form_dropdown('items_style', array('Defult_Columns_Item' => 'Defult_Columns_Item',
		                                                  'Slider_Column_Item' => 'Slider_Column_Item',
														  'Member_Column_Item'=>'Member_Column_Item',
														  'Tap_Column_Item'=>'Tap_Column_Item',
														  'Single_Item'=>'Single_Item',
														  'Rows_Item'=>'Rows_Item')
		                                                  , $this->input->post('items_style') ? $this->input->post('items_style') : $category->items_style); ?></td>
	</tr>
	
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
	

</table>
<?php echo form_close();?>