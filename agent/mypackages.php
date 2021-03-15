<?php include('header.php');?>

<div class="container">
	<div class="row">

		<?php 
		foreach ($object->mypkgs() as $mypkg) {
			
		
		?>
		<div class="col-sm col-md-6 col-lg-4 ftco-animate">
	        <div class="destination">
	          <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/destination-1.jpg);">
	            <div class="icon d-flex justify-content-center align-items-center">
	              <span class="icon-search2"></span>
	            </div>
	          </a>
	          <div class="text p-3">
	            <div class="d-flex">
	              <div class="one">
	                <h3><a href="#"><?php echo $mypkg['pkg_name']?></a></h3>
	                <p class="rate">
	                  <i class="icon-star"></i>
	                  <i class="icon-star"></i>
	                  <i class="icon-star"></i>
	                  <i class="icon-star"></i>
	                  <i class="icon-star-o"></i>
	                  <span>8 Rating</span>
	                </p>
	              </div>
	              <div class="two">
	                <span class="price">545</b></span>
	              </div>
	            </div>
	            <p>Far far away, behind the word mountains, far from the countries</p>
	            <p class="days"><span> nights</span></p>
	            <hr>
	            <p class="bottom-area d-flex">
	              <span><i class="icon-map-o"></i> San Franciso, CA</span>
	              <span class="ml-auto"><a href="#">Discover</a></span>
	            </p>
	          </div>
	        </div>
      </div>
  <?php }?>
	</div>
</div>



<?php include('footer.php');?>