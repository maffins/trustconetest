<div class="counsilorDocuments form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Fault Reported); ?></h1>
			</div>
		</div>
	</div>
	<div class="col-md-12">
	<h2>Fault reported by : <?php echo $name?></h2>
    <p>
	 Below are the fault details:
	</p>
	</div><!-- end row -->
	<table>
		<tr>
			<td><b>Fault Name</b></td>
			<td><?php echo $fault['Fault']['name']?></td>
		</tr>
		<tr>
			<td><b>Date Fault Reported</b></td>
			<td><?php echo $fault['Fault']['created']?></td>
		</tr>
		<tr>
			<td><b>Street name</b></td>
			<td><?php echo $fault['Fault']['address']?></td>
		</tr>
		<tr>
			<td><b>Town / Township / Ward number / Location</b></td>
			<td><?php echo $fault['Fault']['area']?></td>
		</tr>
	</table>
</div>
