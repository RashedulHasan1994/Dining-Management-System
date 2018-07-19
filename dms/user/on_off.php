    
	<?php
		session_start();
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
	<title>Dining Management System</title>
	<link rel='stylesheet' type='text/css' href='user.css' />
	</head>
	
		<body>
		 
		<section id='wrapper'>
		
			<section id='header'>
			     <div class='logo'>
					<img src='../images/Logo.png'/>
				 </div>
				 
					 <div class='heading'>
						<a href='user-home.php'><img src='../images/heading.png'/></a>
					 </div>
				 
			     <div class='address'>
					<h3><a href='logout.php'>Logout</a></h3>
				 </div>		
		    </section>
			
		    <section id='content'>
			<h3 style='width:915px;height:40px;background:#ddd;color:#006699;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'>User Name: <?php echo $_SESSION['user']; ?></h3>
				
			 <table>
			 <tr>
			  <th>Current</th>
			  <th>ON</th>
			  <th>OFF</th>
			 </tr>
			 
				<?php
				   mysql_connect('localhost','root','');
				   mysql_select_db("dms");
	
				   $query=mysql_query("select * from member where user_name='$_SESSION[user]'");
				   				   				   
				  
				   while($data=mysql_fetch_array($query))
				   {
				    $id=$data['id'];
				    $user_name=$data['user_name'];
				    $department=$data['department'];
				    $session=$data['session'];
				    $room_no=$data['room_no'];
				    $phone=$data['phone'];
				    $picture=$data['picture'];
					
					//echo "<img src='$picture' style='width:100px;height:100px;'/>";
					
					$money=mysql_query("select * from money where user_name='$_SESSION[user]'");
					$total_amount=0;
					while($mn=mysql_fetch_array($money))
					{
					$taka=$mn['taka'];
					$total_amount=$total_amount+$taka;
				    
					}
					
					$cost=mysql_query("select * from cost");
					$total_cost=0;
					while($cs=mysql_fetch_array($cost))
					{
					$amount=$cs['amount'];
					$total_cost=$total_cost+$amount;
					}
					
					$qr=mysql_query("select * from meal where user_name='$user_name'");
					$total_meal=0;
					while($collect=mysql_fetch_array($qr))
					{
					    $meal_1=$collect['meal_1'];
						$meal_2=$collect['meal_2'];
						$meal_3=$collect['meal_3'];
						$total_meal=$total_meal+$meal_1+$meal_2+$meal_3;
					}
				
				$new=mysql_query("select * from meal");
				$t_meal=0;
				while($tm=mysql_fetch_array($new))
				{
				   $t_meal=$t_meal+$tm['meal_1']+$tm['meal_2']+$tm['meal_3'];
				}
					$meal_rate=$total_cost/$t_meal;
				    $pay=$total_amount-($total_meal*$meal_rate);
					echo "<tr style='text-align:center;'>";						
					
						$data=mysql_query("select * from on_off where user_name='$_SESSION[user]'");
						
						while($row=mysql_fetch_array($data)){
						
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
						
					
					echo "</tr>";
				   }
				   
				   
				   
				?>
				
			</table>
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
				<br>
						
			</section>
			
			<section id='footer'>
			  <h4>All rights reserved by DMS of BSMRH</h4>
			  <h5>Created by <em>TAL</em></h5>
			</section>
	    </section>
		</body>
	</html>
	