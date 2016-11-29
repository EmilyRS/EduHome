<!--  Type list of Item : Single_Item-->
<div class="row">
  <?php if(count($category_items)): foreach($category_items as $id=>$item): ?>
		<div class="col-lg-3 col-md-3 col-sm-4">
	      <?php if($item->image!=null):?>
                <img src="<?php echo base_url().$item->image?>" alt="" class="img-responsive img-circle">
          <?php else: ?>
              	<img src="<?php echo base_url();?>img/detailsquare.jpg" alt="" class="img-responsive img-circle">
          <?php endif; ?>
	    </div>
	    <div class="col-lg-9 col-md-8 col-sm-8" >
	        <p class="lead"><?php echo $item->body  ?></p>
	    </div>
 <?php endforeach; ?>
 <?php else: ?>
      <h1>We could not find any items in this category.</h1>
 <?php endif; ?>	
</div>
