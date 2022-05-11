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
	<h2>Client Register</h2>
</div>
<form class="myform" method="post" action="admin\operations.php">
	<div class="input-group">
		<label>Full Name</label>
		<input type="text" name="fname" placeholder="Enter your name" required>
	</div>
	<div class="input-group">
		<label>Phone No</label>
		<input type="tel" name="phone" placeholder="Enter phone no" required>
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email"  placeholder="Enter email" required >
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="pword"  placeholder="Enter password" required>
	</div>
	<div>
	<td>Gender:</td>
	<input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female

	</div>
	<div class="input-group">
		<label>Location</label>
		<input type="text" name="location"  placeholder="Enter your location" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
</form>
</section>
<?php
					// 	if(isset($_POST['register_btn'])){
					// 		include 'includes/config.php';
					// 		$fname = $_POST['fname'];
					// 		$id_no = $_POST['id_no'];
					// 		$gender = $_POST['gender'];
					// 		$email = $_POST['email'];
					// 		$phone = $_POST['phone'];
					// 		$location = $_POST['location'];
							
					// 		$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
					// 		VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
					// 		$result = $conn->query($qry);
					// 		if($result == TRUE){
					// 			echo "<script type = \"text/javascript\">
					// 						alert(\"Successfully Registered.\");
					// 						window.location = (\"account.php\")
					// 						</script>";
					// 		} else{
					// 			echo "<script type = \"text/javascript\">
					// 						alert(\"Registration Failed. Try Again\");
					// 						window.location = (\"signup.php\")
					// 						</script>";
					// 		}
					// 	}
						
					//   ?>
</body>
</html>