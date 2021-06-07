<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_seo";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/sidebar.css"> 

</head>

    <body>
        
        <?php
            include 'header.php';
        ?>
       <div class="container" style="margin-top:200px">
        <?php

					$q = mysqli_query($connection,
							"select * from tbl_user where is_delete = 0") or die("Error". mysqli_error($connection));

						echo "<table border='1px' style='border-style: solid; border-width: 2px'>";
						echo "<tr>";
						echo "<th>Name</th>";
						echo "<th>Email</th>";
						echo "<th>Mobile</th>";
						echo "</tr>";
						
						while ($row = mysqli_fetch_array($q)) {
							echo "<tr>";
							echo "<td>{$row['user_name']}</td>";
							echo "<td>{$row['user_email']}</td>";
							echo "<td>{$row['user_mono']}</td>";
							echo "<td><a href='delete.php?deleteid={$row['user_id']}'> Delete </a></td>";
							echo "</tr>";
						}
						echo "</table>";
					
        ?>
        </div> 
        <?php
            include 'footer.php';
        ?>
    
    </body>
    
</html>