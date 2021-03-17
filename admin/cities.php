<?php include('header.php');?>


<section class="container">
	<div>
		<h1 class="text-center">All Cities</h1>
		<table class="table table-bordered">
			<tr>
				<th>City Id</th>
				<th>City Name</th>
			</tr>

			<?php 
				foreach ($object->totalcities() as $city) {
					
				
			?>
			<tr>
				<td><?php echo $city['ct_id']?></td>
				<td><?php echo $city['ct_name']?></td>
			</tr>
		<?php } ?>
		</table>
	</div>
</section>


<?php include('footer.php');?>