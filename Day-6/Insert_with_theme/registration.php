<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_seo";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

?>

<!DOCTYPE html>
<html>
<head>
        <style>
      
               
                input[type=submit],
                input[type=reset] 
                {
                    width: 15vw;
                    padding: 10px 20px;
                    margin: 20px 25px;
                    font-size: 18px;
                    font-weight: bold;
                    display: inline-block;
                    background-color: #808080;
                    color: #f2f2f2;
                    border: 1px solid #808080;
                    border-radius: 5px;
                    box-sizing: border-box;
                    box-shadow:  3px 2px 5px rgba(0, 0, 0, .1);
                    cursor: pointer;
                }   
                
                textarea
                {
                        width: 100%;
                        height: 70px;
                        padding: 12px;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        resize: vertical;
                }
            
                input[type=text],
                input[type=email],
                input[type=number],
                input[type=tel],
                select {
                    width: 20vw;
                    padding: 10px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    border: 1px solid #f2f2f2;
                    border-radius: 5px;
                    box-sizing: border-box;
                }
                
                form 
                {
                    margin-left: 3vw;
                }
                
                .flex-container
                {
                     display: flex;
                    margin-top:150px; 
                }

                .flex-container > div {
                    background-color: #f2f2f2;
                    margin: 10px;
                    margin-left: 25%;
                    margin-right: 25%;
                    padding: 20px;
                    font-size: 20px;
                }
                .end 
                {
                     text-align: center;
                }
        </style>
    <title>Registration-Form</title>
</head>

    <body>
    
    <?php
    include 'header.php';
    ?>

    
    
<div class="flex-container">
<div style="flex-basis:6000px">   
    
<h2  align="center">Registration Form :-</h2>
<hr class="heading">   


   
    <form method="post">
        <table align="center"> 


     
	<tr>
        <td><label for="text">Name:</label></td>
		<td><input type="text" name="name" placeholder="Enter Your Full Name"required></td>
	</tr>
	<tr>
        <td><label for="email">Email:</label></td>
		<td><input type="email" name="email" placeholder="Enter Email Id"required></td>
	</tr>
	<tr>
		<td><label for="tel"> Mobile Number : </label> </td>
        <td><input type="tel" id="number" name="mobile" placeholder="Enter your Phone no." pattern="[0-9]{10}"required></td>
	</tr>
	
	<tr>
        <td>
	 <div class="end">
                <input type="submit" value="Submit" name="submit">
     </div>
        </td>  
        <td><input type="reset" value="Reset" name="reset"></td>
    </tr>

</table>
</form>
    </div>
    </div>
    
        

     <?php
    
    include'footer.php'
        
    ?>
    
</body>
</html>

<?php
       
       $name  = $_POST['name'];
	   $email = $_POST['email'];
	   $mobile = $_POST['mobile'];
        
        
        $q=mysqli_query($connection,
                       "insert into tbl_user(user_name,user_email,user_mono)
                       values('{$name}','{$email}','{$mobile}')")
                        or die("Error". mysqli_error($connection));
        if($q){
		echo"<script>alert('Record Added');</script>";
	}

?>






