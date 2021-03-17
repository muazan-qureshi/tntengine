<?php include('header.php');?>


<section class="container">
	<?php 
		foreach ($object->pkgdetailid() as $key) {
			echo $key['pkg_name'];
			echo "<br>";
			echo $key['agent_fname'];
		}

	?>

</section>

<?php include('footer.php');?>