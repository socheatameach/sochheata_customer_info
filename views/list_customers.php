<?php
	require "../model/build-sql.php";
	require "../dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List customer info</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
	<!--<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datepicker3.min.css" />-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
	<!--<script src="bootstrap/js/bootstrap-datepicker.min.js"></script>-->
	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h3 class="text-info text-center">Customer list</h3>
			<a href="add_customer.php" class="text-primary">Add</a>
			<table class="table table-hover" id="example">
				<thead>
					<tr class="bg-warning">
						<th>No</th>
						<th><a href="#" id="sortname"><i class="fa fa-arrows-v" aria-hidden="true"></i></a>Name</th>
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
					<?php	$result = $conn->query(build_sql_list_customer()); ?>
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
									<a href='../controller/customer.php?id=<?php echo $row["id"] ?>' class="btn btn-danger btn-xs">
										<span class="glyphicon glyphicon-trash"></span>
									</a>
								</td>
						<?php }
					}
					$conn->close();
					?>
				</tbody>
			</table>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$(document).ready(function() {
				$('#example').DataTable();
			});
		});
	</script>
	
</div>
</body>
</html>
