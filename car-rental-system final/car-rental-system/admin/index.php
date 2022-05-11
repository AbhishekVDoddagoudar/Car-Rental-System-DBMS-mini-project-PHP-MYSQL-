<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<link rel="stylesheet" href="css/stylenew.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to delete this message?")){
				window.location.href ='delete_msg.php?id='+id;
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
			Client Messages
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Client Messages</h2>
						<!-- <div class="right">
							<label>search messages</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div> -->
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<!-- <th width="13"><input type="checkbox" class="checkbox" /></th> -->
								<th>Message Content</th>
								<th>Time Send</th>
								<th>Status</th>
								<th width="110" class="ac"></th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM message";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<!-- <td><input type="checkbox" class="checkbox" /></td> -->
								<td><h3><a href="#"><?php echo $row['message'] ?></a></h3></td>
								<td><?php echo $row['time'] ?></td>
								<td><a href="#"><?php echo $row['status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['msg_id'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
						
					
					</div>
					<!-- <h2><input type="submit" onclick="window.print()" value="Print Here" /></h2> -->
					
				</div>
				<!-- End Box -->

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
					<!-- End Box Head-->
					
					<!-- <div class="box-content">
						<a href="#" class="add-button"><span>Send Messages</span></a>
						<div class="cl">&nbsp;</div> 
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>select all</label></p> 
						<p><a href="#">Delete Selected</a></p> 
						</div> -->
				<!-- </div> -->
				<!-- End Box -->
			<!-- </div> -->
			<!-- End Sidebar -->
			
			<!-- <div class="cl">&nbsp;</div>			 -->
		<!-- </div> -->
		<!-- Main -->
	</div>
</div>
<!-- End Container -->


	
</body>
</html>