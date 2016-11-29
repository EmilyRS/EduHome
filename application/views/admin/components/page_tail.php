 <!-- footer content -->
        <footer>
          <div class="pull-right">
           Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
  
    <script src="<?php echo base_url();?>adminFiles/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>adminFiles/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>adminFiles/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>adminFiles/vendors/nprogress/nprogress.js"></script>
    
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>adminFiles/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>adminFiles/vendors/iCheck/icheck.min.js"></script>
    
    <!-- Skycons -->
    <script src="<?php echo base_url();?>adminFiles/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>adminFiles/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>adminFiles/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>adminFiles/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>adminFiles/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>adminFiles/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>adminFiles/production/js/flot/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>adminFiles/production/js/flot/date.js"></script>
    <script src="<?php echo base_url();?>adminFiles/production/js/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url();?>adminFiles/production/js/flot/curvedLines.js"></script>
    
    <!-- datatables -->
    <script src="<?php echo base_url();?>adminFiles/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>adminFiles/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    
    <!-- select2 -->
    <script src="<?php echo base_url();?>adminFiles/vendors/select2/dist/js/select2.full.min.js"></script>
    
    <script src="<?php echo base_url();?>adminFiles/production/js/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>adminFiles/production/js/datepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>adminFiles/build/js/custom.min.js"></script>
    <script src="<?php echo base_url();?>adminFiles/addition.js"></script>
    <script src="<?php echo base_url();?>tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'.mytextarea' });</script>
     
   <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
    
 <!--   <script>
       $(document).ready(function() {
    	$('.select_item').on('change', function (e){
    		$( ".addition" ).empty();
	    	if($(this).val()== 2){
	    	  var html=" <div class='form-group'>";
	    	      html+=" <label class=' col-md-3 col-sm-3 col-xs-12'>Item</label>";
	              html+="     <div class='col-lg-4 col-md-4 col-sm-3 col-xs-12'>";
	              html+="       <select class='select2_single form-control' tabindex='-1'>";
	              html+="          <option></option>";
	              html+="          <option value='item1'>item1</option>";
	              html+="          <option value='item2'>item2</option>";
	              html+="          <option value='item3'>item3</option>";
	              html+="        </select>";
	              html+="     </div> ";
	              html+="     </div> ";
	            $('.addition').append(html);
	         }else if($(this).val()== 1){
		    	  var html=" <div class='form-group'>";
		    	      html+=" <label class=' col-md-3 col-sm-3 col-xs-12'>Parent Menu</label>";
		              html+="     <div class='col-lg-4 col-md-4 col-sm-3 col-xs-12'>";
		              html+="       <select class='select2_single form-control' tabindex='-1'>";
		              html+="          <option></option>";
		              html+="          <option value='item1'>item1</option>";
		              html+="          <option value='item2'>item2</option>";
		              html+="          <option value='item3'>item3</option>";
		              html+="        </select>";
		              html+="     </div> ";
		              html+="     </div> ";
		          $('.addition').append(html);
	         }
	      });
       });
       
    </script>-->

     <script>
       $(document).ready(function() {
    	$('.select_item').on('change', function (e){
    		$( ".addition" ).empty();
	    	if($(this).val()== 2){//single item
	    	  var html=" <td>Choose item</td>"
	    	      html+="<td> <select name='id_item' select class='select2_single form-control' tabindex='-1'>";
	     	      html+="          <option>choose item</option>";
	    	      html+="		   <?php if(count($items)): foreach($items as $item): ?>	"
	              html+="             <option value='<?php echo $item->id_item ?>'><?php echo $item->title?></option>";
	              html+="          <?php endforeach; ?>";
	              html+="          <?php endif; ?>	";
	              html+=" </select> </td>";
	            $('.addition').append(html);
	         }else if($(this).val()== 3){ // single category
	         	  var html=" <td>Choose Category</td>"
		    	      html+="<td> <select name='singleCategory' class='select2_single form-control' tabindex='-1'>";
		    	      html+="          <option>choose category</option>";
		    	      html+="		   <?php if(count($categories)): foreach($categories as $category): ?>	"
		              html+="             <option value='<?php echo $category->id_category?>'><?php echo $category->title?></option>";
		              html+="          <?php endforeach; ?>";
		              html+="          <?php endif; ?>	";
		              html+="  </select> </td>";
		          $('.addition').append(html);
	         }else if($(this).val()== 5){ // category menu
	         	  var html=" <td>Choose Categories Menu</td>"
		    	      html+="<td> <select name='id_categories_menu' class='select2_single form-control' tabindex='-1'>";
		    	      html+="          <option>choose menu</option>";
		    	      html+="		   <?php if(count($menus)): foreach($menus as $menu): ?>	"
		              html+="             <option value='<?php echo $menu->id_menu?>'><?php echo $menu->title?></option>";
		              html+="          <?php endforeach; ?>";
		              html+="          <?php endif; ?>	";
		              html+="  </select> </td>";
		          $('.addition').append(html);
	         }else if($(this).val()== 4){ // list of categories
	         	  var html=" <td>Choose Categories</td>"
		    	      html+="<td> <select name='categoriesList[]' class='select2_multiple form-control' multiple='multiple' tabindex='-1'>";
		    	      html+="          <option>choose categories</option>";
		    	      html+="		   <?php if(count($categories)): foreach($categories as $category): ?>	"
		              html+="             <option value='<?php echo $category->id_category?>'><?php echo $category->title?></option>";
		              html+="          <?php endforeach; ?>";
		              html+="          <?php endif; ?>	";
		              html+="  </select> </td>";
		          $('.addition').append(html);
	         }
	         
	      });
       });
       
    </script>-
  
  </body>
</html>