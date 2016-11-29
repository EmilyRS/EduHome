<!-- 2) type List Of category : Rows_Categories  -->
<?php if(count($categories_items)): foreach($categories_items as $id_category => $category_items): ?>
<!-- category  -->
<section <?php if($category_items['items_style']=='Slider_Column_Item'): echo 'dir="ltr"'; endif; ?>>
    <div class="container-fluid">
    	<?php if($category_items['items_style']=='Slider_Column_Item'): echo '<div class="row">'; endif; ?>
			<div class="col-md-12">
                <div class="heading text-center">
                    <h2><?php echo $category_items['categoey_title'];?></h2>
                </div>
                
                  <?php $this->load->view('tamplates/items_tamplates/'.$category_items['items_style'],
                                          array('category_items'=>array_slice ($category_items,0,count($category_items)-2,true))) ?> 
                                          <!-- i used the array slice function to remove 
                                          the last two elements from the array which are the style and the title
                                          i just want the items of the category -->
                                          	
               <!-- منعالجها بعدين -->
        </div>
       <?php if($category_items['items_style']=='Slider_Column_Item'): echo '</div>'; endif; ?>
    </div>
    <!-- /.container -->
</section>
<!-- ./ category  --> 
<?php endforeach; ?>
<?php else: ?>
      <h2>We could not find any categories in this page.</h2>
<?php endif; ?>	

