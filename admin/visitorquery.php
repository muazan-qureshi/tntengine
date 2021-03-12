<?php include('header.php');

?>


<section class="container">
	<div>
		<div class="h4">
			Total Queries: <?php echo mysqli_num_rows($object->client_query())?>
		</div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
				<th>Sr No</th>
				<th>Query ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
			</tr>
			</thead>
			<tbody>
				<?php
				$srno = 1;
				foreach ($object->client_query() as $vquery) {
					
				?>
				<tr>
					<td><?php echo $srno ?></td>
					<td><?php echo $vquery['cq_id'] ?></td>
					<td><?php echo $vquery['cq_name'] ?></td>
					<td><?php echo $vquery['cq_email'] ?></td>
					<td><?php echo $vquery['cq_subject'] ?></td>
					<td><?php echo $vquery['cq_message'] ?></td>	
				</tr>
				<?php
				$srno++;
					}
				?>
			</tbody>
		</table>
	</div>

</section>


<?php
	include('footer.php');
?>