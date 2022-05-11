<?php
	include '../includes/config.php';
?>


<?php
							if(isset($_POST['insert_btn'])){
								
								$target_path = "../img/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
								$qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
								$res = $conn->query($qr);
								if($res){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>


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
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"../adminlogin.php\")
									</script>";
					}
				}
			?>


<?php
							// if(isset($_POST['update_btn'])){
								
							// 	// $target_path = "../img/";
							// 	// $target_path = $target_path . basename ($_FILES['image']['name']);
							// 	// if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
							// 	// if($_GET['send'])
                            //     // {
                            //         $id= $_GET['id'];
                            //     $target_path = "../img/";
							// 	$target_path = $target_path . basename ($_FILES['image']['name']);
							// 	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

							// 	$image = basename($_FILES['image']['name']);
							// 	$car_name = $_POST['car_name'];
							// 	$car_type = $_POST['car_type'];
							// 	$hire_cost = $_POST['hire_cost'];
							// 	$capacity = $_POST['capacity'];
								
                            //     $qry = "UPDATE cars SET car_name='$car_name',car_type='$car_type',image='$image',hire_cost='$hire_cost',capacity='$capacity' WHERE car_id= '$id'";

							// 	$res = $conn->query($qry);
							// 	//  $res = mysqli_query($conn,$qr);
                            
							// 	if($res){
                            //         //    echo "<script>alert('updated')</script>";
                            //                 echo "<script type =\"text/javascript\">
							// 				alert(\"Updated Successfully\");
							// 				window.location = (\"add_vehicles.php\")
							// 				</script>";
							// 		}
							// 	}
							// 	else 'Failed';
							// }
						?>


<?php
						if(isset($_POST['register_btn'])){
							// include 'includes/config.php';
							$fname = $_POST['fname'];
							$pword = $_POST['pword'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];
							
							$qry = "INSERT INTO client (fname,pword,gender,email,phone,location,status)
							VALUES('$fname','$pword','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"../clientlogin.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"../clientsignup.php\")
											</script>";
							}
						}
						
					  ?>


<?php
				if(isset($_POST['client_login'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pword'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND pword = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['pword'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful\");
									window.location = (\"../index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"../clientlogin.php\")
									</script>";
					}
				}
			?>