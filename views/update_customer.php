<?php
	include('../dbcon.php');
	include('../model/execute_sql.php');
	include('../beauti_dump.php');
	$customer_id = $_GET['id'];
?>
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

	$sql = "	SELECT * FROM customer WHERE customer.id = $customer_id;";
	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add customer</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<?php   if ($result->num_rows > 0) { $i=1;
		while($row = $result->fetch_assoc()) {?>

			<form method="post" action="../controller/customer.php">
				<div class="row">
					<div class="headcover">
						<div class="col-sm-4 col-xs-12">
							<img src="../bootstrap/img/logo3.png" class="imglogo img-responsive" />
						</div>
						<div class="col-sm-8 col-xs-12">
							<div class="cusinfo text-center">
								<h4>Customer Information</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="titletext">Property Information</h4>
						<div class="table-responsive">
							<table class="table">
								<tbody>
								<tr>
									<td>
										<span class="text-title"><strong>First Name:</strong></span>
										<div class="text-input">
											<input type="text" required name="firstname" value='<?php echo $row["firstname"]?>' class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>last Name:</strong></span>
										<div class="text-input">
											<input type="text" required name="lastname" value='<?php echo $row["lastname"]?>' class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Gender:</strong></span>
										<div class="text-input">
											<input type="text" name="gender" value='<?php echo $row["gender"]?>'  class="" placeholder="..........................................................................................." />
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<span class="text-title"><strong>Nationality:</strong></span>
										<div class="text-input">
											<input type="text" name="nationality" value='<?php echo $row["nationality"]?>' class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Position:</strong></span>
										<div class="text-input">
											<input type="text" name="position" value='<?php echo $row["position"]?>' class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>E-mail:</strong></span>
										<div class="text-input">
											<input type="text" name="mail" value='<?php echo $row["mail"]?>' class="" placeholder="..........................................................................................." />
										</div>
									</td>
								</tr>
								</tbody>
							</table>
							<table class="table">
								<tbody>
								<tr>
									<td>
										<span class="text-title"><strong>Phone:</strong></span>
										<div class="text-input">
											<input type="text" required name="phone_number" value='<?php echo $row["phone_number"]?>' class="" placeholder=".............................................................................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Address:</strong></span>
										<div class="text-input">
											<input type="text" name="address" value='<?php echo $row["address"]?>' class="" placeholder="......................................................................................................................................................................................" />
										</div>
									</td>
								</tr>
								</tbody>
							</table>
							<table class="table">
								<tbody>
								<tr>
									<td>
										<span class="text-title"><strong>Code Banner:</strong></span>
										<div class="text-input">
											<input type="text" name="code_banner" value='<?php echo $row["code_banner"]?>' class="" placeholder="........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................" />
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="titletext">Customer Requirement</h4>
						<span class="text-title service"><strong>Service:</strong></span>
						<div class="">
							<div class="table-responsive">
								<table class="table">
									<tbody>
									<tr>
										<td>
											<label>
												<input type="checkbox" name="service[]" id="blankCheckbox" <?php if(in_array("buy", $service_name)){echo'checked';} ?> value="buy" aria-label="...">
												<div class="text-title"><strong>Buy</strong></div>
											</label>
										</td>
										<td>
											<label>
												<input type="checkbox" name="service[]" id="blankCheckbox" <?php if(in_array("sale", $service_name)){echo'checked';} ?> value="sale" aria-label="...">
												<div class="text-title"><strong>Sale</strong></div>
											</label>
										</td>
										<td>
											<label>
												<input type="checkbox" name="service[]" id="blankCheckbox" <?php if(in_array("rent", $service_name)){echo'checked';} ?> value="rent" aria-label="...">
												<div class="text-title"><strong>Rent</strong></div>
											</label>
										</td>
										<td>
											<span class="text-title"><strong>Budget </strong></span>
											<div class="">
												<input type="text" name="budget" value='<?php echo $row["budget"]?>' class="budget" placeholder="" />
											</div>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="well">
							<div class="table-responsive">
								<h4 class="choiceproperty">Property Type</h4>
								<table class="table">
									<tbody>
									<tr>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("apartement", $property_name)){echo'checked';} ?> value="apartement" aria-label="...">
											</label>
											<div class="text-title"><strong>Apartement</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("building", $property_name)){echo'checked';} ?> value="building" aria-label="...">
											</label>
											<div class="text-title"><strong>Building</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("business", $property_name)){echo'checked';} ?> value="business" aria-label="...">
											</label>
											<div class="text-title"><strong>Business</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("condo", $property_name)){echo'checked';} ?> value="condo" aria-label="...">
											</label>
											<div class="text-title"><strong>Condo</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("factory", $property_name)){echo'checked';} ?> value="factory" aria-label="...">
											</label>
											<div class="text-title"><strong>Factory</strong></div>
										</td>
									</tr>
									<tr>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("hotel", $property_name)){echo'checked';} ?> value="hotel" aria-label="...">
											</label>
											<div class="text-title"><strong>Hotel</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("land", $property_name)){echo'checked';} ?> value="land" aria-label="...">
											</label>
											<div class="text-title"><strong>Land</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("house", $property_name)){echo'checked';} ?> value="house" aria-label="...">
											</label>
											<div class="text-title"><strong>House/Flat</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("villa", $property_name)){echo'checked';} ?> value="villa" aria-label="...">
											</label>
											<div class="text-title"><strong>Villa</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("office", $property_name)){echo'checked';} ?> value="office" aria-label="...">
											</label>
											<div class="text-title"><strong>Office Space</strong></div>
										</td>
									</tr>
									<tr>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" <?php if(in_array("warehouse", $property_name)){echo'checked';} ?> value="warehouse" aria-label="...">
											</label>
											<div class="text-title"><strong>Warehouse</strong></div>
										</td>
									</tr>
									<?php
										$properties = array(
											"apartement",
											"building",
											"business",
											"condo",
											"factory",
											"hotel",
											"land",
											"house",
											"villa",
											"office",
											"warehouse"
										);
										$other ="";
										foreach ($property_name as $value){
											if(!in_array($value, $properties)){
												$other = $value;
											};
										}
									?>
									<tr>
										<td>
											<span class="text-title"><strong>Other</strong></span>
											<div class="text-input">
												<input type="text" value='<?php echo $other; ?>' name="other_property" class="" placeholder="............................................................................................................................................................................................................................................................................................................................................................................" />
											</div>
										</td>
									</tr>

									</tbody>
								</table>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table">
								<tbody>
								<tr>
									<td>
										<span class="text-title"><strong>Favorite Location:</strong></span>
										<div class="text-input">
											<input type="text" name="favorite_location" value='<?php echo $row["favorite_location"]?>' class="" placeholder=" ............................................................................................................................................................................................................................................................................................................................................................................" />
										</div>
									</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="titletext">
							<div class="row">
								<div class="col-sm-6" name="additionalcomment">Additional Comment</div>
								<div class="col-sm-6 purpose-sm">Purpose</div>
							</div>
						</h4>
						<div class="row">
							<div class="col-sm-6">
								<textarea name="comment" class="form-control" rows="5" placeholder="....................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." >
									<?php echo $row["comment"]?>
								</textarea>
							</div>
							<div class="col-sm-12 purpose-xs"><h4 class="titletext" name="purpose">Purpose</h4></div>
							<div class="col-sm-6">
								<textarea name="purpose" class="form-control" rows="5" placeholder="....................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." >
									<?php echo $row["purpose"]?>
								</textarea>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<input type="hidden" name="id" value="<?php echo $_GET['id']?>">
						<a href="list_customers.php" class="btn btn-sm btn-info">Show</a>
						<input type="reset" name="submit" value="Cancel" class="btn btn-sm btn-danger">
						<input type="submit" name="submit" value="update" class="btn btn-sm btn-success">
						<br><br>
					</div>
				</div>
			</form>

		<?php }
		}
		?>
		</div>
	</div>
</div>
</body>
</html>
