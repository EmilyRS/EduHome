<h3><?php echo empty($item->id_item) ? 'Add a new item' : 'Edit item: ' . $item->title; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">

		<td>Item Title</td>
		<td><?php echo form_input('title', set_value('title', $item->title)); ?></td>
	</tr>
   
	<tr>
		<td>Item body</td>
		<td><?php echo form_textarea('body', set_value('body', $item->body),'class="form-control editor mytextarea"'); ?></td>
	</tr>
	<tr>
		<td>Item category</td>
		<td><?php echo form_dropdown('id_category', $category_array, $this->input->post('id_category') ? $this->input->post('id_category') : $item->id_category); ?></td>
	</tr>
	<tr>
	<tr>
		<td></td>
		<td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
</table>
<?php echo form_close();?>