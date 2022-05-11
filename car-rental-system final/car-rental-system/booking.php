<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book car</title>
    <link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="cars.css">
</head>
<body>
<section class="clbgbook">
<?php
    include 'header.php';
?>
<?php
						include 'includes/config.php';
						$id='$_GET[id]';
						$sel = "SELECT * FROM cars WHERE car_id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<!-- <li> -->
				
				<!-- </li> -->
			
				
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
	<div class="header">
	<h2>Proceed to rent the car</h2>
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
		Already registered?<a href="clientlogin.php">Login</a>
	</div>
</form>
<?php
					} else
						{
							?>	<div class="properties">
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
								<img class="thumb" src="img/<?php echo $rws['image'];?>" width="500" height="400" >
							</a>
							<!-- <span class="price">ws['hire_cost'];?></span> -->
							<!-- <div class="property_details"> -->
								<h1>
									<!-- <a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Type>'.$rws['car_type'];?></a> -->
								</h1>
								<h2>Cost/day: <span class="property_size"><?php echo $rws['hire_cost'].' Rs';?></span></h2>
								<h2>Car Name: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
								<h3>Proceed to Hire <?php echo $rws['car_name'];?>. </h3>
							<!-- </div> -->
							</div>
							<div class="book"><button class=" pointer">
        <a href="pay.php" class="book1">Book Now</a>
            <!-- <a href="booking.php?id="; class="book">Book Now</a>  -->
            <!-- <script>
      function bookcar() {
          window.location.href = "booking.php?id=";
      }
      </script> -->
          </button></div>
								<!-- <a href="pay.php" class="properties">Click here to book your car</a> -->
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,car_id,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
							}
						}
						
					  ?>
</section>
</body>
</html>