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
</html>
