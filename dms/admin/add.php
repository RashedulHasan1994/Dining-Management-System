    
<?php session_start();?>   
	<!DOCTYPE html>
	<html>
	<head>
	<title>Dining Management System</title>
	<link rel='stylesheet' type='text/css' href='addmeal.css' />
	</head>
	
		<body>
		 
		<section id='wrapper'>
		
			<section id='header'>
			     <div class='logo'>
					<img src='../images/Logo.png'/>
				 </div>
				 
					 <div class='heading'>
						<a href='adminhome.php'><img src='../images/heading.png'/></a>
					 </div>
				 
			     <div class='address'>
					<img src='../images/address.png'/>
				 </div>		
		    </section>
			
		    <section id='content'>
			<h3 style='width:915px;height:40px;background:#ddd;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'>Date: <?php echo date("d, M Y"); ?></h3>
			            
			<form method='post'>
			    <table>
				      <tr>
					  <th>User Name</th>
					  <td><input type='text' name='user_name' required /></td>
				      </tr>
						  <tr>
						  <th>Email</th>
						  <td><input type='text' name='email' required /></td>
						  </tr>
							   <tr>
							  <th>Active/Inactive</th>
							  <td><input type='radio' name='ad' value='ON'/> ON <input type='radio' name='ad' value='OFF'/> OFF</td>
							  </tr>
								  <tr>
								  <td colspan='2'><input type='submit' name='submit' value='Submit' style='background:#006699;color:white;height:32px;width:80px;'/></td>
								  </tr>
			    </table>
				<br>
			</form>	
					<?php	
					
						$connect=mysql_connect('localhost','root','');
						$connectDb=mysql_select_db("dms");
						if($_POST)
						{
							$user_name=$_POST['user_name'];
							$email=$_POST['email'];
							$ad=$_POST['ad'];
							
							$insert=mysql_query("insert into on_off values('','$user_name','$email','$ad')");
							
							if($insert)
							{
							   echo "Successfully Inserted";
							   echo "<br>";
							}
						}
					
					?>
			</section>
			
			<section id='footer'>
			  <h4>All rights reserved by DMS of BSMRH</h4>
			  <h5>Created by <em>TAL</em></h5>
			</section>
	    </section>
		</body>
	</html>
	