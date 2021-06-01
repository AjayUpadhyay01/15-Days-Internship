<!DOCTYPE html>
<html>
  <head>
    <title>Sort and Sum of Values</title>
  </head>
<body>
  <div>
    <center>
      <fieldset>
          <form method="post">
            <table>
              <tr>
                <td width="70px">  No. </td>
                <td width="150px"> Enter Numbers </td>
              </tr>  
              <tr>
                  <td> 1 </td>  
                  <td> <input type="Number" name="txt1" required> </td>
              </tr>  
              <tr>
                  <td> 2 </td>   
                  <td> <input type="Number" name="txt2" required> </td>
              </tr>  
              <tr>
                  <td> 3 </td>  
                  <td> <input type="Number" name="txt3" required> </td>
              </tr>  
              <tr>
                  <td> 4 </td>  
                  <td> <input type="Number" name="txt4" required> </td>
              </tr>  
              <tr>
                  <td> 5 </td>  
                  <td> <input type="Number" name="txt5" required> </td>
              </tr> 
              <tr>
                <td></td>
                <td><input type="submit" /></td>
                <td><input type="reset" /></td>
              </tr> 
            </table>
          </form>
        </fieldset>
      </center>
    </div>
  </body>
</html> 

<?php

if($_POST)
{
	$a[0] = $_POST['txt1'];
	$a[1] = $_POST['txt2'];
	$a[2] = $_POST['txt3'];
	$a[3] = $_POST['txt4'];
	$a[4] = $_POST['txt5'];
	$s = array_sum ($a);
	echo "<br/>Sum = $s.<br/>";
	asort($a);
	echo "<pre> Sorted ";
	print_r($a);
}
?>