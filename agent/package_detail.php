<?php include('header.php');?>

<div class="container">
	<?php 
	foreach($object->pkg_detail() as $ppo)
	{
		echo $ppo['pkg_name'];
	}
	?>
</div>


<?php include('footer.php');?>