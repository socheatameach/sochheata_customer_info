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
											<input type="text" required name="firstname" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>last Name:</strong></span>
										<div class="text-input">
											<input type="text" required name="lastname" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Gender:</strong></span>
										<div class="text-input">
											<input type="text" name="gender" class="" placeholder="..........................................................................................." />
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<span class="text-title"><strong>Nationality:</strong></span>
										<div class="text-input">
											<input type="text" name="nationality" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Position:</strong></span>
										<div class="text-input">
											<input type="text" name="position" class="" placeholder="..........................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>E-mail:</strong></span>
										<div class="text-input">
											<input type="text" name="mail" class="" placeholder="..........................................................................................." />
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
											<input type="text" required name="phone_number" class="" placeholder=".............................................................................................................................................." />
										</div>
									</td>
									<td>
										<span class="text-title"><strong>Address:</strong></span>
										<div class="text-input">
											<input type="text" name="address" class="" placeholder="......................................................................................................................................................................................" />
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
											<input type="text" name="code_banner" class="" placeholder="............................................................................................." />
										</div>
									</td>
									<td>
										<div class="form-group">
											<label class="col-xs-3 control-label">Date</label>
											<div class="col-xs-5 date">
												<div class="input-group input-append date" id="datepicker">
													<input type="text" class="form-control" name="date" />
													<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
												</div>
											</div>
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
												<input type="checkbox" name="service[]" id="blankCheckbox" value="buy" aria-label="...">
												<div class="text-title"><strong>Buy</strong></div>
											</label>
										</td>
										<td>
											<label>
												<input type="checkbox" name="service[]" id="blankCheckbox" value="sale" aria-label="...">
												<div class="text-title"><strong>Sale</strong></div>
											</label>
										</td>
										<td>
											<label>
												<input type="checkbox" name="service[]" id="blankCheckbox" value="rent" aria-label="...">
												<div class="text-title"><strong>Rent</strong></div>
											</label>
										</td>
										<td>
											<span class="text-title"><strong>Budget </strong></span>
											<div class="">
												<input type="text" name="budget" class="budget" placeholder="" />
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
												<input type="checkbox" name="property[]" id="blankCheckbox" value="apartement" aria-label="...">
											</label>
											<div class="text-title"><strong>Apartement</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="building" aria-label="...">
											</label>
											<div class="text-title"><strong>Building</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="business" aria-label="...">
											</label>
											<div class="text-title"><strong>Business</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="condo" aria-label="...">
											</label>
											<div class="text-title"><strong>Condo</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="factory" aria-label="...">
											</label>
											<div class="text-title"><strong>Factory</strong></div>
										</td>
									</tr>
									<tr>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="hotel" aria-label="...">
											</label>
											<div class="text-title"><strong>Hotel</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="land" aria-label="...">
											</label>
											<div class="text-title"><strong>Land</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="house" aria-label="...">
											</label>
											<div class="text-title"><strong>House/Flat</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="villa" aria-label="...">
											</label>
											<div class="text-title"><strong>Villa</strong></div>
										</td>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="office" aria-label="...">
											</label>
											<div class="text-title"><strong>Office Space</strong></div>
										</td>
									</tr>
									<tr>
										<td>
											<label>
												<input type="checkbox" name="property[]" id="blankCheckbox" value="warehouse" aria-label="...">
											</label>
											<div class="text-title"><strong>Warehouse</strong></div>
										</td>
									</tr>


									<tr>
										<td>
											<span class="text-title"><strong>Other</strong></span>
											<div class="text-input">
												<input type="text" name="other_property"  class="" placeholder="............................................................................................................................................................................................................................................................................................................................................................................" />
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
											<input type="text" name="favorite_location" class="" placeholder=" ............................................................................................................................................................................................................................................................................................................................................................................" />
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
								<textarea name="comment" class="form-control" rows="5" placeholder="....................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." ></textarea>
							</div>
							<div class="col-sm-12 purpose-xs"><h4 class="titletext" name="purpose">Purpose</h4></div>
							<div class="col-sm-6">
								<textarea name="purpose" class="form-control" rows="5" placeholder="....................................................................................................................................................................................................................................................................................................................................................................................................................................................................................." ></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<a href="list_customers.php" class="btn btn-sm btn-info">Show</a>
						<input type="reset" name="submit" value="Cancel" class="btn btn-sm btn-danger">
						<input type="submit" name="submit" value="add" class="btn btn-sm btn-success">
						<br><br>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
