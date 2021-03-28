<?php include('header.php');

foreach ($object->pkgdetailid() as $key) {
	
		
	
?>
<section class="container">
<div class="row">
<div id="carouselExampleIndicators" class="carousel slide w-50" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo "../agent/uploads/pkg/thumbnail/".$key['pkg_thumbnail']?>" alt="First slide" style="width: 500px;height: 400px;">
    </div>
    <?php
    foreach ($object->pkgdetailid() as $keya) {
    	# code...
  
    $count = count(json_decode($key['pkg_image']));
	$img = json_decode($key['pkg_image']);
	for ($i=0; $i < $count ; $i++) { 
    ?>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo "../agent/uploads/pkg/".$img[$i]?>" alt="Second slide" style="width: 500px;height: 400px;">
    </div>
    <?php 
}}

    ?>
    <!-- <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="col-sm-12 col-md-6">
  <h1><?php echo $key['pkg_name'] ?></h1>
  <h3><?php echo $key['pkg_price'] ?></h3>
  <br>
  <h5>Company Name: <?php echo $key['agent_company']?></h5>
  <h5>Agent Name: <?php echo $key['agent_fname'] ?></h5>

</div>

</div>


	<?php 
		}

	?>



</section>

<?php include('footer.php');?>