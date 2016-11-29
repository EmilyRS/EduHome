<!-- Type list of Item : DefaultColumn_Item-->
<div class="row">
	
<?php if(count($category_items)): foreach($category_items as $id=>$item): ?>
	
  <div class="col-lg-3 col-md-3 col-sm-4">
		<!-- div يحوي صورة قبل هي  item  حطي شرط ازا ما كان ال  -->
		
	    <div class="box-image-text blog">
	       
		        <div class="top">
		            <div class="image">
		              <?php if($item->image!=null):?>
		                <img src="<?php echo base_url().$item->image?>" alt="" class="img-responsive">
		              <?php else: ?>
		              	<img src="<?php echo base_url();?>img/defalut_column_defalut.jpg" alt="" class="img-responsive">
		              <?php endif; ?>
		            </div>
		            <div class="bg"></div>
		            <div class="text">
		                <p class="buttons">
		                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
		                </p>
		            </div>
		        </div>
	       
	        <div class="content">
	            <h4><a href="blog-post.html"></a><?php echo $item->title?></h4>
	            <p class="intro"><?php echo $item->body?></p>
	            </p>
	        </div>
	    </div>
	    <!-- /.box-image-text -->
   </div>
   
<?php endforeach; ?>
<?php else: ?>
      <h1>We could not find any items in this category.</h1>
<?php endif; ?>	
  <!--  <ul class="pager">
        <li class="previous"><a href="#">&larr; Older</a>
        </li>
        <li class="next disabled"><a href="#">Newer &rarr;</a>
        </li>
  </ul>-->
</div>