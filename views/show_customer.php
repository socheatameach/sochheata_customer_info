<?php
	include('../dbcon.php');
	include('../model/execute_sql.php');
	include('../beauti_dump.php');
	$customer_id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List customer info</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
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
					<th width="120">Service</th>
					<th>Properties</th>
					<th>Favorite location</th>
					<th>Butget $</th>
					<th>Banner code</th>
					<th>Position</th>
					<th>gender</th>
					<th>Additonal comment</th>
					<th>Purpose</th>
					<th width="100">Action</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$service_sql = "SELECT service_name FROM service WHERE customer_id = $customer_id";
				$service_result = $conn->query($service_sql);
				$service_name = array();
				while($row = $service_result->fetch_assoc()) {
					$service_name[] = $row["service_name"];
				}

				$property_sql = "SELECT property_name FROM property WHERE customer_id = $customer_id";
				$property_result = $conn->query($property_sql);
				$property_name = array();
				while($row = $property_result->fetch_assoc()) {
					$property_name[] = $row["property_name"];
				}

				$sql = "	SELECT * FROM customer WHERE  customer.id = $customer_id;";
				$result = $conn->query($sql);

				?>

				<?php   if ($result->num_rows > 0) { $i=1;
				while($row = $result->fetch_assoc()) {?>
				<tr>
					<td><?php echo $i++?></td>
					<td><?php echo $row["firstname"]." ". $row["lastname"]?></td>
					<td><?php echo $row["phone_number"]?></td>
					<td><?php echo $row["mail"]?></td>
					<td><?php echo implode(', ', $service_name);?></td>
					<td><?php echo implode(', ', $property_name);?></td>
					<td><?php echo $row["favorite_location"]?></td>
					<td><?php echo $row["budget"]?></td>
					<td><?php echo $row["code_banner"]?></td>
					<td><?php echo $row["position"]?></td>
					<td><?php echo $row["gender"]?></td>
					<td><?php echo $row["comment"]?></td>
					<td><?php echo $row["purpose"]?></td>
					<td class="text-right">
						<a href='show_customer.php?id=<?php echo $row["id"] ?>' class="btn btn-success btn-xs">
							<span class="glyphicon glyphicon-info-sign"></span>
						</a>
						<a href='?id=<?php echo $row["id"] ?>' class="btn btn-primary btn-xs">
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
