<?php 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Registration</title>
 </head>
 <body>
 	<form method="POST" action="regCheck.php">
 		<table>
 			<tr>
 				<td>Name:</td>	
 				<td><input type="text" name="name"></td>
 				
 			</tr>
 			<tr>
 				<td>Email:	</td>
 				<td>	 <input type="text" name="email"></td>
 			</tr>
 			<tr>
 				<td>Password:	</td>
 				<td>	 <input type="password" name="password"></td>
 			</tr>
 			<tr>
 				<td>	 DOB:	</td>
 				<td><input type="date" name="date" ></td>
 			</tr>
 			<tr>
 				<td>Gender:</td>
 				<td><input type="radio" name=" gender" value="male">Male 
 					<input type="radio" name=" gender" value="female">Female	
 				</td>
 				<tr>
 					<td></td><td><input type="submit" name="submit" value="Submit"></td>
 				</tr>
 			</tr>
 		
 		
	 
	 
	        
	    </table>    
 	</form>
	 
	        

 
 </body>
 </html>