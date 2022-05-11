<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css\stylenew.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='delete_car.php?id='+id;
			}
		}
	</script>
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
		<!-- End Main Nav -->
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Vehicle Management
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Our Vehicles</h2>
						<!-- <div class="right">
							<label>search vehicles</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div> -->
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<!-- <th width="13"><input type="checkbox" class="checkbox" /></th> -->
								<th>Car id</th>
								<th>Image</th>
								<th>Car Name</th>
								<th>Car Type</th>
								<th>Hire Price</th>
								<th>Capacity</th>
								<th width="130" class="ac">Delete/Update</th>
							</tr>
							<style>
								.myclass{
									font-size: 13px;
								}
								
							</style>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM cars WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							
							<tr class="myclass">
							<!-- img\suzuki-swift-2019.png -->
								<!-- <td><input type="checkbox" class="checkbox" /></td> -->
								
								<td><?php echo $row['car_id'] ?></td>
								<td><img src="../img/<?php echo $row['image'] ?>" alt="" height=100px width=150px></td>
								<td><?php echo $row['car_name'] ?></td>
								<td><?php echo $row['car_type'] ?></td>
								<td><?php echo $row['hire_cost'] ?></td>
								<td><?php echo $row['capacity'] ?></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['car_id'];?>)" class="ico del">Delete</a>
								<a href="update_cars.php?id=<?php echo $row['car_id'] ?>" class="ico edit">Update</a>
								
								</td>
							</tr>
							<?php
								}
							?>
						</table>
						
						<!-- Pagging -->
						<!-- <div class="pagging">
							<div class="left">Showing 1-12 of 44</div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div> -->
						<!-- End Pagging -->
						
					<!-- </div> -->
					<!-- <h2><input type="submit" onclick="window.print()" value="Print Here" /></h2> -->
					
				</div>
				<!-- End Box -->
							</div>
			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<!-- <div id="sidebar"> -->
				
				<!-- Box -->
				<!-- <div class="box"> -->
					
					<!-- Box Head -->
					<!-- <div class="box-head">
						<h2>Management</h2>
					</div> -->
					<!-- End Box Head -->
					<div class="box-content">
					<button class="add-button" onclick="fun()">Add new cars</button>
					<div class="cl">&nbsp;</div>
					<script>
						function fun() {
							window.location.href="add_cars.php"
						}
					</script>
					<!-- <div class="box-content">
						<a href="add_cars.php" class="add-button"><span>Add new Vehicles</span></a>
						<div class="cl">&nbsp;</div> -->
						
						<!-- <p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p>
						<p><a href="#">Delete Selected</a></p> -->
						
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
						<!-- End Sort -->
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<!-- <div class="cl">&nbsp;</div>			 -->
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->


	
</body>
</html>