<!DOCTYPE html>
<!-- Kevin Hinterlong May 2, 2016 Quarter 4 Project -->
<html>
<?php
    session_start();
    if(isset($_SESSION['username']) && $_POST["action"] == "logout") {
	session_destroy();
    }
    if(!isset($_SESSION['username'])){
	header("Location:index.php");
    }
    include("config.php");


?>
    <head>
	<title>
	   <?php echo $companyName ?> - Leaderboards
	</title>

	<link rel="stylesheet" type="text/css" href="gameStyle.css">
	
	<script type="text/javascript" src="login.js"></script>
    </head>

    <body>
	<h1>Game of Craps</h1>
	<?php 
	    include("menuBar.php");
	?>	

<!-- 
    create database if not exists leaderboards
    use database
    create table if not exists
    select * from table asc
    for each value, print name and score
    maybe show stats about leaderboards?    
-->
    </body>
</html>
