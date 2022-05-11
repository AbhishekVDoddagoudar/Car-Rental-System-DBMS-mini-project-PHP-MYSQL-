
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Update cars</title>
	<link rel="stylesheet" href="css\stylenew.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Update Vehicles
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Update Vehicles</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
                        <?php
								include ("../includes/config.php");
                                $id= $_GET['id'];
                                // $id = $_REQUEST['car_id'];
		                        // $select = "SELECT * FROM cars WHERE car_id = '$id'";
								// $sel = "SELECT * FROM cars WHERE status = 'Available'";
								// $result = $conn->query($select);
								// $row = $result->fetch_assoc();
                                $sel = "SELECT * FROM cars WHERE car_id = '$id'";
						        $rs = $conn->query($sel);
						        $rws = $rs->fetch_assoc();
							?>
								<p>
									<!-- <span class="req">max 100 symbols</span> -->
									<label>Vehicle Name <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_name" required 
                                    value="<?php echo $rws['car_name']; ?>"
                                    />
								</p>	
								<p>
									<!-- <span class="req">max 20 symbols</span> -->
									<label>Vehicle Type <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="car_type" required 
                                    value="<?php echo $rws['car_type']; ?>"
                                    />
								</p>
								<p>
									<!-- <span class="req">max 20 symbols</span> -->
									<label>Vehicle Hire Price <span>(Required Field)</span></label>
									<input type="text" class="field size1" name="hire_cost" required 
                                    value="<?php echo $rws['hire_cost']; ?>"
                                    />
								</p>
								<p>
									<!-- <span class="req">Current Images</span> -->
									<label>Vehicle Image <span>(Required Field)</span></label>
									<input type="file" class="field size1" name="image" required
                                    value="<?php echo $rws['image']; ?>" />
								</p>
								<p>
									<span class="req">In Terms of Passenger Seats</span>
									<label>Vehicle Capacity<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="capacity" required 
                                    value="<?php echo $rws['capacity']; ?>"
                                    />
								</p>	
                               
                               
							
						</div>
						
						<div class="buttons">
                            <a href="add_vehicles.php">Cancel</a>
                            <button type="submit" name="update_btn">Update</button>
							<!-- <input type="button" class="button" value="preview" /> -->
							<!-- <input type="submit" class="button" value="Update" name="send" /> -->
						</div>
						
					</form>
                    <?php
							if(isset($_POST['update_btn'])){
								
								// $target_path = "../img/";
								// $target_path = $target_path . basename ($_FILES['image']['name']);
								// if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								// if($_GET['send'])
                                // {
                                    $id= $_GET['id'];
                                $target_path = "../img/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

								$image = basename($_FILES['image']['name']);
								$car_name = $_POST['car_name'];
								$car_type = $_POST['car_type'];
								$hire_cost = $_POST['hire_cost'];
								$capacity = $_POST['capacity'];
								
                                $qry = "UPDATE cars SET car_name='$car_name',car_type='$car_type',image='$image',hire_cost='$hire_cost',capacity='$capacity' WHERE car_id= '$id'";

								$res = $conn->query($qry);
								//  $res = mysqli_query($conn,$qr);
                            
								if($res){
                                    //    echo "<script>alert('updated')</script>";
                                            echo "<script type =\"text/javascript\">
											alert(\"Updated Successfully\");
											window.location = (\"add_vehicles.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
					<?php
							// if(isset($_GET['update_btn'])){
								
							// 	// $target_path = "../img/";
							// 	// $target_path = $target_path . basename ($_FILES['image']['name']);
							// 	// if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
							// 	// if($_GET['send'])
                            //     // {
                            //     $target_path = "../img/";
							// 	$target_path = $target_path . basename ($_FILES['image']['name']);
							// 	if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){

							// 	$image = basename($_FILES['image']['name']);
							// 	$car_name = $_GET['car_name'];
							// 	$car_type = $_GET['car_type'];
							// 	$hire_cost = $_GET['hire_cost'];
							// 	$capacity = $_GET['capacity'];
								
                            //     $qry = "UPDATE cars SET car_name='$car_name',car_type='$car_type',image='$image',hire_cost='$hire_cost',capacity='$capacity' WHERE car_id= '$id'";

							// 	$res = $conn->query($qry);
							// 	//  $res = mysqli_query($conn,$qr);
                            
							// 	if($res){
                            //            echo "<script>alert('updated')</script>";
                            //                 // echo "<script type =\"text/javascript\">
							// 				// alert(\"Updated Successfully\");
							// 				// window.location = (\"add_vehicles.php\")
							// 				// </script>";
							// 		}
							// 	}
							// 	else 'Failed';
							// }
						?>
				</div>

			</div>
			
			<!-- <div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Management</h2>
					</div>
					 -->
					<!-- <div class="box-content">
					<button class="add-button" onclick="fun()">View cars</button>
					<div class="cl">&nbsp;</div>
					<script>
						function fun() {
							window.location.href="add_vehicles.php"
						}
					</script> -->

					<!-- <div class="box-content">
						<a href="add_vehicles.php" class="add-button"><span>View Our Vehicles</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p>
						 -->
						<!-- Sort -->
						<!-- <div class="sort">
							<label>Sort by</label>
							<select class="field">
								<option value="">Car Type</option>
							</select>
							<select class="field">
								<option value="">Car Name</option>
							</select>
							<select class="field">
								<option value="">Hire Price</option>
							</select>
						</div> -->
						
					</div>
				</div>
			</div>
			
			<!-- <div class="cl">&nbsp;</div>			 -->
		</div>
	</div>
</div>


	
</body>
</html>