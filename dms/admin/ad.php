    
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
			<h3 style='width:915px;height:40px;background:#ddd;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'><a href='add.php' style='text-decoration:none;'>Add Meal Member</a></h3>
				<form method='post'>
					
						<table>
						<tr>
						   <th>Serial</th>
						   <th>Name</th>
						   <th>Email</th>
						   <th>Date</th>
						   <th>Current</th>
						   <th>ON</th>
						   <th>OFF</th>
						</tr>
						<tr>
						<?php
							$connect=mysql_connect('localhost','root','');
							$select=mysql_select_db("dms");
					         $data=mysql_query("select * from on_off");
						
						while($row=mysql_fetch_array($data)){
						
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['user_name']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".date('d-M-Y')."</td>";
						if($row['on_off']=="ON")
						{
						echo "<td style='color:green;font-family:Elephant'>"."ON"."</td>";
						}
						else
						{
						    echo "<td style='color:red;'>"."OFF"."</td>";
						}
						
						echo "<td>".'<a href="?user_name='.$row['user_name'].'" style="text-decoration:none;">'."ON".'</a>'."</td>";
						echo "<td>".'<a href="?email='.$row['email'].'" style="text-decoration:none;">'."OFF".'</a>'."</td>";
					     
									
								echo "</tr>";
						}
						?>
					
							
						</table>
					  <br>
				</form>	

				<?php
						if(isset($_GET['user_name']))
						 {
							 $user_name=$_GET['user_name'];
	
							 $update=mysql_query("update on_off SET on_off='ON' where user_name='$user_name'");
						 }		 		
                 ?>	

					<?php

					 if(isset($_GET['email']))
						 {
						 $email=$_GET['email'];		 
						 $update=mysql_query("update on_off SET on_off='OFF' where email='$email'");
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
	