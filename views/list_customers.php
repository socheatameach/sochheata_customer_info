<?php
	include('../dbcon.php');
	include('../model/execute_sql.php');
	include('../beauti_dump.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List customer info</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3 class="text-info text-center">Customer list</h3>
			<a href="add_customer.html" class="text-primary">Add</a>
			<table class="table table-hover">
				<thead>
					<tr class="bg-warning">
						<th>No</th>
						<th>Name</th>
						<th>Tel</th>
						<th>Mail</th>
						<th>Service</th>
						<th>Properties</th>
						<th>Favorite location</th>
						<th>Butget $</th>
						<th>Banner code</th>
						<th width="100">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT customer.id,
								   customer.create_time,
								   customer.firstname,
								   customer.lastname,
								   customer.phone_number,
								   customer.mail,
								   service.service_name,
								   property.property_name,
								   customer.favorite_location,
								   customer.budget,
								   customer.code_banner
							FROM customer
							LEFT OUTER JOIN service ON
							customer.id=service.customer_id
							LEFT OUTER JOIN property ON
							customer.id=property.customer_id
							GROUP BY customer.create_time DESC
							LIMIT 14;";
					?>
					<?php	$result = $conn->query($sql); ?>
					<?php   if ($result->num_rows > 0) { $i=1;
						while($row = $result->fetch_assoc()) {?>
							<tr>
								<td><?php echo $i++?></td>
								<td><?php echo $row["firstname"]." ". $row["lastname"]?></td>
								<td><?php echo $row["phone_number"]?></td>
								<td><?php echo $row["mail"]?></td>
								<td><?php echo $row["service_name"]?></td>
								<td><?php echo $row["property_name"]?></td>
								<td><?php echo $row["favorite_location"]?></td>
								<td><?php echo $row["budget"]?></td>
								<td><?php echo $row["code_banner"]?></td>
								<td class="text-right">
									<a href='show_customer.php?id=<?php echo $row["id"] ?>' class="btn btn-success btn-xs">
										<span class="glyphicon glyphicon-info-sign"></span>
									</a>
									<a href='update_customer.php?id=<?php echo $row["id"] ?>' class="btn btn-primary btn-xs">
										<span class="glyphicon glyphicon-pencil"></span>
									</a>
									<a href='?<?php echo $row["id"] ?>' class="btn btn-danger btn-xs">
										<span class="glyphicon glyphicon-trash"></span>
									</a>
								</td>
						<?php }
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>
