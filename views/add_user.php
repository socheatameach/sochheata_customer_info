<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add user</title>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<br>
			<form action="../controller/user.php?test()" method="post" class="add-user">
				Username: <input name="username" type="text"><br>
				Password: <input name="password" type="password"><br>
				E-mail: <input name="email" type="email"><br>
				First name: <input name="firstname" type="text"><br>
				Last name: <input name="lastname" type="text"><br>
				Role:
				<select name="role" id="">
					<option value="0">Admin</option>
					<option value="1">Editor</option>
				</select>
				<br>
				<button type="submit" name="submit" value="add">Submit</button>
				<button type="reset">Cancel</button>
			</form>
		</div>
	</div>
</div>
</body>
<br>
<br>
			
		<?php

		require "../dbcon.php";

		$sql = "SELECT * FROM user;";
		$result = $conn->query($sql);

		?>
		<table border="1" class="table table-striped table-bordered">
			<thead>
			    <tr>
			        <th>No</th>
			        <th>Username</th>
			        <th>Password</th>
			        <th>Email</th>
			        <th>Firstname</th>
			        <th>Lastname</th>
			        <th>Role</th>
			        <th width="100">Action</th>
			    </tr>			
		  	</thead>
			<?php
				if ($result->num_rows > 0) { $i=1;
				 while($row = $result->fetch_assoc()) {
				  // echo $row['username']. "<br>";
				  ?>
				 <tr>
					  <td><?php echo $i++ ?></td>
					  <td><?php echo $row["username"]?></td>
					  <td><?php echo $row["password"]?></td>
					  <td><?php echo $row["email"]?></td>
					  <td><?php echo $row["firstname"]?></td>
					  <td><?php echo $row["lastname"]?></td>
					  <td><?php echo $row["role"]?></td>
				  	  <td class="text-right">
							<a href='show_user.php?id=<?php echo $row["id"] ?>' class="btn btn-success btn-xs">
								<span class="glyphicon glyphicon-info-sign"></span>
							</a>
							<a href='update_user.php?id=<?php echo $row["id"] ?>' class="btn btn-primary btn-xs">
								<span class="glyphicon glyphicon-pencil"></span>
							</a>
							<a href='../controller/user.php?id=<?php echo $row["id"] ?>' class="btn btn-danger btn-xs">
								<span class="glyphicon glyphicon-trash"></span>
							</a>
					  </td>	
				 </tr>
				  <?php
				 }
				}
			?>
		</table>
</html>
