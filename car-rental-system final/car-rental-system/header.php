<?php
	session_start();
	error_reporting(E_NOTICE);
?>
<link rel="stylesheet" href="css/style.css">
<header>
			<div class="wrapper">
			
			
            <nav id="navbar">
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
			
            <div id="logo">
                <img src="img/Screenshot (49).jpg" alt="Car-rent.com">
            </div>
            <ul>
                <li class="item"><a href="index.php">Home</a></li>
                <li class="item"><a href="cars.php">Rent car</a></li>
                <li class="item"><a href="#about">About</a></li>
                <li class="item"><a href="#contact">Contact Us</a></li>
            <div class=login>
                <li class="item2"><a href="adminlogin.php">Admin login</a></li>
                <li class="item2"><a href="clientlogin.php">Client login</a></li>
            </div>

            </ul>
        
					<?php
						} else{
					?>
				
			
			<!-- <div id="top-navigation">
				Welcome 
				
			</div> -->
	
							<ul>
								<li><a href="index.php">Home</a></li>
								<!-- <li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li> -->
							</ul>
					<a href="admin/logout.php" id="clientlogout">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>