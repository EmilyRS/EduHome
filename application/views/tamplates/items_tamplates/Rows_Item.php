 <!-- Type list of Item : Rows_Item-->
<div class="row">
	<div class="col-lg-1 col-md-1 clearfix"></div>
    <div class="col-lg-10 col-md-10">
        <div class="" id="blog-listing-medium">
        	<!-- Item 1--> 
          <?php if(count($category_items)): foreach($category_items as $id=>$item): ?>
            <section class="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box-image">
                            <div class="image">
                            <?php if($item->image!=null):?>
		                      <img src="<?php echo base_url().$item->image?>" alt="" class="img-responsive">
		                    <?php else: ?>
		              	      <img src="<?php echo base_url();?>img/rows_default.jpeg" alt="" class="img-responsive">
		                    <?php endif; ?>
                            </div>
                            <!-- منعالجها بعدين -->
                            <div class="bg"></div>
                            <div class="name">
                                <h3><a href="portfolio-detail.html"><?php echo $item->title?></a></h3> 
                            </div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                    <a href="#" class="btn btn-template-transparent-primary">Website</a>
                                </p>
                            </div>
                            <!-- منعالجها بعدين -->
                        </div>
                    </div>
                    <div class="col-md-8" style="margin-top: 20px;">
                        <h2><a href="post.htmls"><?php echo $item->title?></a></h2>
                        <p class="intro"><?php echo $item->body?></p>
                        </p>
                    </div>
                </div>
            </section>
            
          <?php endforeach; ?>
	      <?php else: ?>
	          <h1>We could not find any items in this category.</h1>
	      <?php endif; ?>
   
            <!-- end list of item -->
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next disabled"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
     </div>
</div>