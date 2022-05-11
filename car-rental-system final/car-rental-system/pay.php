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
	<h2>Booking</h2>
</div>
<form id="clientloginbg" method="post" action="">
	<div class="input-group">
		<label>id</label>
		<input type="text" name="mpesa" placeholder="Enter transaction id" required value="">
	</div>
	<div class="input-group">
		<label>Contact no</label>
		<input type="tel" name="phone_no" placeholder="Enter phone no" required>
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="pay">Submit</button>
       
	</div>
</form>
</section>
<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$phone_no = $_POST['phone_no'];
							
							$qry = "UPDATE client SET mpesa = '$mpesa' WHERE phone = '$phone_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Booked. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Booking Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
						
					  ?>

</body>
</html>