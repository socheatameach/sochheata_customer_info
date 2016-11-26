<?php
// including the database connection file
include("../dbcon.php");
include('../model/execute_sql.php');
include('../beauti_dump.php');

/*if(isset($_GET['update']))
{    
    $id = $_GET['id'];
    
    $username=$_GET['username'];
    $password=$_GET['password'];
    $email=$_GET['email']; 
    $firstname=$_GET['firstname'];   
    $lastname=$_GET['lastname'];
    $role=$_GET['role'];
    
    // checking empty fields
    if(empty($username) || empty($password) || empty($email) || empty($firstname) || empty($lastname) || empty($role)) {            
        if(empty($username)) {
            echo "<font color='red'>Username field is empty.</font><br/>";
        }
        
        if(empty($password)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }  

        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty.</font><br/>";
        } 

        if(empty($lastname)) {
            echo "<font color='red'>lastname field is empty.</font><br/>";
        } 

        if(empty($role)) {
            echo "<font color='red'>Role field is empty.</font><br/>";
        }       
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE user SET username='$username',password='$password',email='$email',firstname='$firstname',lastname='$lastname',role='$role' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header( 'Location: http://localhost/sochheata_customer_info-master/views/add_user.php' );  
    }
}*/
?>

<?php
//getting id from url
$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id = $id;";
$user_result = $conn->query($sql);
while($row = $user_result->fetch_assoc())
{
    $username = $row['username'];
    $password = $row['password'];
    $email = $row['email'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $role = $row['role'];
}
?>

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
      <form action="../controller/user.php" method="post">
        Username: <input name="username" type="text" value="<?php echo $username; ?>"><br>
        Password: <input name="password" type="password" value="<?php echo $password; ?>"><br>
        E-mail: <input name="email" type="email" value="<?php echo $email; ?>"><br>
        First name: <input name="firstname" type="text" value="<?php echo $firstname; ?>"><br>
        Last name: <input name="lastname" type="text" value="<?php echo $lastname; ?>"><br>
        Role:
        <select name="role" id="" value="<?php echo $role; ?>">
          <option value="0">Admin</option>
          <option value="1">Editor</option>
        </select>
        <br>
        <div class="col-md-12 text-right"> 
          <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            <a href="add_user.php" class="btn btn-sm btn-info">Show</a>
            <a href="add_user.php" class="btn btn-sm btn-danger">Cancel</a>
            <!-- <a href="add_user.php" class="btn btn-sm btn-success">Update</a> -->
            <!-- <input type="reset" name="submit" value="Cancel" class="btn btn-sm btn-danger"> -->
            <input type="submit" name="submit" value="Update" class="btn btn-sm btn-success">
            <br><br>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
