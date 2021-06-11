<!DOCTYPE html>
 <html>
      <head>
      </head> 
      <body>
        <form action="get_database.php" method="GET">
        <table>
           <tr>
           <td>Name</td>
           <td><input type="text" name="txt1" required/></td>
           </tr>
           <tr>
           <td>Age</td>
           <td><input type="number" name="txt2" min="1" max="100" required/></td>
           </tr>
           <tr>
           <td>Email</td>
           <td><input type="email" name="txt3" required/></td>
           </tr>
           <tr>
           <td>Date</td>
           <td><input type="date" name="txt4" required/></td>
           </tr>
           <tr>
           <td>City</td>
           <td>
             <select input type="date" name="txt5" required>
                <option value="Shehera">Shehera</option>
                 <option value="Godhra">Godhra</option>
                 <option value="Lunawada">Lunawada</option>
                 <option value="Modasa">Modasa</option>
             </select>
           </td>
           </tr>
           <tr>
           <td><input type="submit" /></td>
           <td><input type="reset" /></td>
           </tr>
           </table>
        </form>
      </body>    
 </html>