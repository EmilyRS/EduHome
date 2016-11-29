<h3><?php echo empty($menu_item->id_menu_element) ? 'Add a new item to: ' . $this->session->userdata('current_menu')->title : 'Edit menu item "' . $menu_item->title .'" in menu: ' .$this->session->userdata('current_menu')->title.''; ?></h3>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
<table class="table">

	<tr>
		<td>Title</td>
		<td><?php echo form_input('title', set_value('title', $menu_item->title)); ?></td>
	</tr>
	<tr>
		<td>Slug</td>
		<td><?php echo form_input('slug', set_value('slug', $menu_item->slug)); ?></td>
	</tr>
	
    <tr>
		<td>Parent Item</td>
		<td><?php echo form_dropdown('id_parent', $parent_choices_array, $this->input->post('id_parent') ? $this->input->post('id_parent') : $menu_item->id_parent); ?></td>
	</tr>
		
	<tr>
		<td>Type</td>
		<td><?php echo form_dropdown('id_menu_element_type', $menu_item_types, $this->input->post('type_id') ? $this->input->post('type_id') : $menu_item->id_menu_element_type,'class="select_item"'); ?></td>
	</tr>
	
	<tr class="addition">
		<!-- loading from javascript -->
	</tr>
	
	<tr>
		<td>Page style</td>
		<td><?php echo form_dropdown('page_style', array('Rows' => 'Rows', 'Collapse' => 'Collapse'), $this->input->post('page_style') ? $this->input->post('page_stle') : $menu_item->page_style); ?></td>
	</tr>

	<tr>
      <td><?php echo form_submit('submit', 'Save', 'class="btn btn-primary"'); ?></td>
	</tr>
	
</table>
     <?php echo form_hidden('id_menu',$this->session->userdata('current_menu')->id_menu); ?>
<?php echo form_close();?>