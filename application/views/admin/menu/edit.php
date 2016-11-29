<h3><?php echo empty($menu->id_menu) ? 'Add a new menu' : 'Edit menu ' . $menu->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">

		<td>Menu Title</td>
		<td><?php echo form_input('title', set_value('title', $menu->title)); ?></td>
	</tr>
	<tr>
		<td>Menu Slug</td>
		<td><?php echo form_input('slug', set_value('slug', $menu->slug)); ?></td>
	</tr>
	
	<tr>
		<td>Menu Type</td>
		<td><?php echo form_dropdown('menu_type', array('Links' => 'links', 'Taps' => 'taps'), $this->input->post('menu_type') ? $this->input->post('menu_type') : $menu->menu_type); ?></td>
	</tr>
	
	<tr>
		<td>Menu Description</td>
		<td><?php
		 echo form_textarea('description', set_value('description', $menu->description),'class="form-control editor tinymce mytextarea"'); ?></td>
	</tr>
	

	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>