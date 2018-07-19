    
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
					<img src='../images/address.png'/>
				 </div>		
		    </section>
			
		    <section id='content'>
			<h3 style='width:915px;height:40px;background:#ddd;color:#006699;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'>User Name: <?php echo $_SESSION['user']; ?></h3>
				
			 <table>
			 <tr>
			  <th>Date</th>
			  <th>Breakfast</th>
			  <th>Lunch</th>
			  <th>Dinner</th>
			 </tr>
			 
			 <tr>
				<?php
				   mysql_connect('localhost','root','');
				   mysql_select_db("dms");
	
	                if($_GET['user_name'])
					{
				   $query=mysql_query("select * from meal where user_name='$_GET[user_name]'");		   				   
				  
				   while($data=mysql_fetch_array($query))
				   {
				    $id=$data['id'];
				    $user_name=$data['user_name'];
				    $email=$data['email'];
				    $date=$data['date'];
				    $meal_1=$data['meal_1'];
				    $meal_2=$data['meal_2'];
				    $meal_3=$data['meal_3'];
					//echo "<img src='$picture' style='width:100px;height:100px;'/>";
					echo "<td>".$date."</td>";
					echo "<td>".$meal_1."</td>";
					echo "<td>".$meal_2."</td>";
					echo "<td>".$meal_3."</td>";
					
					echo "</tr>";
				   }
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
	