<ul class="owl-carousel testimonials same-height-row">
	<!-- item 1 -->
<?php if(count($category_items)): foreach($category_items as $id=>$item): ?>
	
    <li class="item">
        <div class="testimonial same-height-always">
            <div class="text">
            	<h5><?php echo $item->title?></h5>
                <p><?php echo $item->body?></p>
            </div>
            <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i>
                </div>
                <div class="name-picture">
                    <?php if($item->image!=null):?>
		                <img src="<?php echo base_url().$item->image?>" alt="" class="">
		             <?php else: ?>
		              	<img src="<?php echo base_url();?>img/person-1.jpg" alt="" class="">
		             <?php endif; ?>
                    <p>custom field!</p>
                </div>
            </div>
        </div>
    </li>
  
<?php endforeach; ?>
<?php else: ?>
      <h1>We could not find any items in this category.</h1>
<?php endif; ?>	

</ul>