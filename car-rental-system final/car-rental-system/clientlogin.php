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
	<h2>Client Login</h2>
</div>
<form id="clientloginbg" method="post" action="admin\operations.php">
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="Enter your email" required value="">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="pword" placeholder="Enter password" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="client_login">Login</button>
        <a id="signuphere" href="clientsignup.php">Signup Here</a>
	</div>
</form>
</section>

<?php
			// 	if(isset($_POST['login_btn'])){
			// 		include 'includes/config.php';
					
			// 		$uname = $_POST['email'];
			// 		$pass = $_POST['pass'];
					
			// 		$qy = "SELECT * FROM client WHERE email = '$uname' AND pword = '$pass'";
			// 		$log = $conn->query($qy);
			// 		$num = $log->num_rows;
			// 		$row = $log->fetch_assoc();
			// 		if($num > 0){
			// 			session_start();
			// 			$_SESSION['email'] = $row['email'];
			// 			$_SESSION['pass'] = $row['id_no'];
			// 			echo "<script type = \"text/javascript\">
			// 						alert(\"Login Successful\");
			// 						window.location = (\"index.php\")
			// 						</script>";
			// 		} else{
			// 			echo "<script type = \"text/javascript\">
			// 						alert(\"Login Failed. Try Again\");
			// 						window.location = (\"account.php\")
			// 						</script>";
			// 		}
			// 	}
			// ?>
</body>
</html>