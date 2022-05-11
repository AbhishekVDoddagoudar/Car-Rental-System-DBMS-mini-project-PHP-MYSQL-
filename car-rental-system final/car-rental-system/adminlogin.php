
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	<link rel="stylesheet" href="css\style.css">
</head>
<body>
<section class="clbg">
<?php
    include 'header.php';
?>
<div class="header">
	<h2>Admin Login</h2>
</div>
<form method="post" action="adminlogin.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="uname" placeholder="Enter username" required value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="pass" placeholder="Enter password" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="admin_login">Login</button>
	</div>
</form>
</section>

<?php
				if(isset($_POST['admin_login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"../adminlogin.php\")
									</script>";
					}
				}
			?>
</body>
</html>