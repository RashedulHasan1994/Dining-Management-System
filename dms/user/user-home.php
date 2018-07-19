    
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
			<h3 style='width:915px;height:40px;background:#ddd;color:#006699;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'><a href='on_off.php'>Active/Inactive</a></h3>
				
			 <table>
			 <tr>
			  <th>Department</th>
			  <th>Session</th>
			  <th>Room No</th>
			  <th>Phone</th>
			  <th>Total Amount</th>
			  <th>Total Meal</th>
			  <th>Current</th>
			  <th>Update</th>
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
						echo "<td>".$department."</td>";
						echo "<td>".$session."</td>";
						echo "<td>".$room_no."</td>";
						echo "<td>".$phone."</td>";
						echo "<td>".$total_amount."</td>";
						echo "<td style='color:red;'>".$total_meal."  ".'<a href="meal_view.php?user_name='.$data['user_name'].'" style="text-decoration:none;background:#006699;color:white;padding:3px 3px;">'."(View)".'</a>'."</td>";
						
						if($pay>0)
						{
						echo "<td>".$pay." "."(Cash)"."</td>";
						}
						else
						{
						echo "<td>".$pay." "."(Due)"."</td>";
						}
						echo "<td style='color:red;'>".'<a href="update.php?id='.$data['id'].'" style="text-decoration:none;background:#006699;color:white;padding:3px 3px;">'."Update".'</a>'."</td>";
					
					echo "</tr>";
				   }
				   
				   
				   
				?>
				
			</table>

				<br>
						
			</section>
			
			<section id='footer'>
			  <h4>All rights reserved by DMS of BSMRH</h4>
			  <h5>Created by <em>TAL</em></h5>
			</section>
	    </section>
		</body>
	</html>
	