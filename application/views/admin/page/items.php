<div class="x_panel">
	<div class="x_title">
	    <h2 style="margin-top: 10px;">All Items</h2>
	    <div class="pull-right" >
            <button  onclick="window.location='<?php echo base_url("index.php/admin/page/addItem");?>'" type="button" class="btn btn-md btn-primary"><li class="glyphicon glyphicon-plus" ></li> Add</button>

            <button type="button" class="btn btn-success"><li class="glyphicon glyphicon-ok"></li>  Publish</button>

            <button type="button" class="btn btn-danger"><li class="glyphicon glyphicon-trash"></li> Delete</button>

         </div>
         <div class="clearfix"></div>
    </div>
    <div class="x_content">	
		<section>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_content">
						<div class="table-responsive">
							<table id="datatable" class="table table-striped jambo_table bulk_action text-center">
			                    <thead>
			                      <tr class="headings">
			                        <th>
			                          <input type="checkbox" id="check-all" class="flat text-center">
			                        </th>
									<th class="column-title text-center">Title</th>
									<th class="column-title text-center">Description</th>
									<th class="column-title text-center">category</th>
									
									<th class="column-title text-center">Edit</th>
									<th class="column-title text-center">Delete</th>
			                        <th class="bulk-actions text-center" colspan="7">
			                          <a class="antoo" style="color:#fff; font-weight:500;"> ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
			                        </th>
			                      </tr>
			                    </thead>
			                    <tbody>
			                      <tr class="even pointer">
			                        <td class="a-center " align="left" style="width: 5px;">
			                          <input type="checkbox" class="flat" name="table_records">
			                        </td>
			                        <td><?php echo "ooo" ?></td>
									<td><?php echo "ppp"?></td>
									<td><?php echo "cccc"?></td>
									<td ><?php echo btn_edit("ll"); ?></td>
									<td ><?php echo btn_delete("ll"); ?></td>
			                        
			                        </td>
			                      </tr>
			                      <tr class="even pointer">
			                        <td class="a-center " align="left" style="width: 5px;">
			                          <input type="checkbox" class="flat" name="table_records">
			                        </td>
			                        <td><?php echo "ooo" ?></td>
									<td><?php echo "ppp"?></td>
									<td><?php echo "cccc"?></td>
									<td ><?php echo btn_edit("ll"); ?></td>
									<td ><?php echo btn_delete("ll"); ?></td>
			                        </td>
			                      </tr>
			                      <tr class="even pointer">
			                        <td class="a-center " align="left" style="width: 5px;">
			                          <input type="checkbox" class="flat" name="table_records">
			                        </td>
			                        <td><?php echo "ooo" ?></td>
									<td><?php echo "ppp"?></td>
									<td><?php echo "cccc"?></td>
									<td ><?php echo btn_edit("ll"); ?></td>
									<td ><?php echo btn_delete("ll"); ?></td>
			                        </td>
			                      </tr>
			                      <tr class="even pointer">
			                        <td class="a-center " align="left" style="width: 5px;">
			                          <input type="checkbox" class="flat" name="table_records">
			                        </td>
			                        <td><?php echo "ooo" ?></td>
									<td><?php echo "ppp"?></td>
									<td ><?php echo btn_edit("ll"); ?></td>
									<td><?php echo btn_delete("ll"); ?></td>
			                        </td>
			                      </tr>
			                      <tr class="even pointer">
			                       <td class="a-center " align="left" style="width: 5px;">
			                          <input type="checkbox" class="flat" name="table_records">
			                        </td>
			                        <td><?php echo "ooo" ?></td>
									<td><?php echo "ppp"?></td>
									<td><?php echo "cccc"?></td>
									<td ><?php echo btn_edit("ll"); ?></td>
									<td><?php echo btn_delete("ll"); ?></td>
			                        </td>
			                      </tr>
			                    </tbody>
							</table>
						</div>
					</div>     
				</div>
			</div>
		</section>
	</div>
</div>		