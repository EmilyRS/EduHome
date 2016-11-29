<!-- Type list of Item : memberColumn_Item-->
<div class="row">
	<!-- item -->
  <?php if(count($category_items)): foreach($category_items as $id=>$item): ?>
    <div class=" col-md-3 col-sm-3">
        <div class="team-member" data-animate="fadeInUp">
            <div class="image">
                <a href="team-member.html">
                  <?php if($item->image!=null):?>
		                <img src="<?php echo base_url().$item->image?>" alt="" class="img-responsive img-circle">
		          <?php else: ?>
		              	<img src="<?php echo base_url();?>img/member-default.jpg" alt="" class="img-responsive img-circle">
		          <?php endif; ?>
                </a>
            </div>
            <h3><a href="team-member.html"><?php echo $item->title  ?></a></h3>
            <p class="role">Founder(this should be custom field)</p>
            <div class="social">
                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
            </div>
            <div class="text">
                <p><?php echo $item->body  ?></p>
            </div>
        </div>
        <!-- /.team-member -->
    </div>
    
	<?php endforeach; ?>
	<?php else: ?>
	      <h1>We could not find any items in this category.</h1>
	<?php endif; ?>

 </div>