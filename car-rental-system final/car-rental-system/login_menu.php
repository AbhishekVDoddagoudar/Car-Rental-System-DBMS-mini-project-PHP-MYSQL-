<?php
	error_reporting(E_NOTICE);
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../clientlogin.php");
	}
?>
<div id="top">
			
			<div id="top-navigation">
				Welcome <strong>Admin</strong>|
				<a href="logout.php">Log out</a>
			</div>
		</div>