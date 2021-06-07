<html>
<head>
<style type="text/css">
		table{
	border-collapse: collapse;
	 width: 100%;
	 margin-left: auto; 
  margin-right: auto;
}
th, td {
  padding: 10px;
  text-align: left;
  font-family:verdana;
}
tr:hover {background-color:#f5f5f5;}

	</style>
</head>
</html>
<?php 
					$host = "localhost";
					$username = "root";
					$passwd = "";
					$dbname = "db_student";

					$connection = mysqli_connect($host, $username, $passwd, $dbname);



					$q = mysqli_query($connection,
							"select * from tbl_student where is_delete = 0") or die("Error". mysqli_error($connection));

						echo "<table >";
						echo "<tr>";
						echo "<th>Name</hd>";
						echo "<th>Email</th>";
						echo "<th>Mobile</th>";
						echo "<th>Date Of Birth</th>";
						echo "<th>Gender</th>";
						echo "<th>Blood Group</th>";
						echo "<th>Address</th>";
						echo "<th>Area</th>";
						echo "<th>Pincode</th>";
						echo "<th>Action</th>";
						echo "</tr>";
						
						while ($row = mysqli_fetch_array($q)) {
							echo "<tr>";
							echo "<td>{$row['st_name']}</td>";
							echo "<td>{$row['st_email']}</td>";
							echo "<td>{$row['st_mobile']}</td>";
							echo "<td>{$row['st_dob']}</td>";
							echo "<td>{$row['st_gender']}</td>";
							echo "<td>{$row['st_bloodgroup']}</td>";
							echo "<td>{$row['st_address']}</td>";
							echo "<td>{$row['st_area']}</td>";
							echo "<td>{$row['st_pincode']}</td>";
							echo "<td><a href='delete.php?deleteid={$row['st_id']}'><img style='width:16px;' src='trash.png'>Delete </a></td>";
							echo "</tr>";
						}echo "<tr> <td> <a href='insert_form.php'> Add Record </a> </td> </tr>";
						echo "</table>";
					
				?>