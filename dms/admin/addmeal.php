    
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
						   <th>Serial</th>
						   <th>Name</th>
						   <th>Email</th>
						   <th>Date</th>
						   <th>Meal-1</th>
						   <th>Meal-2</th>
						   <th>Meal-3</th>
						</tr>
						<tr>
						<?php
							$connect=mysql_connect('localhost','root','');
							$select=mysql_select_db("dms");
					         $data=mysql_query("select * from on_off where on_off='ON'");
						
						while($row=mysql_fetch_array($data)){
						
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['user_name']."</td>";
						echo "<td>".$row['email']."</td>";
						echo "<td>".date('d-M-Y')."</td>";
						echo "<td>"."<input type='text'name='meal-1' required style='width:40px;'/>"."</td>";
						echo "<td>"."<input type='text' name='meal-2' required style='width:40px;'/>"."</td>";
						echo "<td>"."<input type='text' name='meal-3' required style='width:40px;'/>"."</td>";
							
						echo "</tr>";
						}
						?>
							
						</table>
					<input type='submit' name='add' value='Add' style='width:80px;height:40px;margin-top:15px;margin-left:10px;margin-bottom:15px;background:#006699;color:white;'/>
					
				</form>	

				<?php
				
					$connect=mysql_connect('localhost','root','');
					$select=mysql_select_db("dms");
					
					if($_POST)
					{
					
					    $meal_1=$_POST['meal-1'];
						$meal_2=$_POST['meal-2'];
						$meal_3=$_POST['meal-3'];
						$month=date("M");
						$year=date("Y");
						
					$data=mysql_query("select * from on_off");
					while($row=mysql_fetch_array($data)){
						$id=$row['id'];
						$user_name=$row['user_name'];
						$email=$row['email'];
						$date=date('d-M-Y');
						
						$insert=mysql_query("insert into meal values('','$user_name','$email','$date','$month','$year','$meal_1','$meal_2','$meal_3')");
						
						
						}
						
						if($insert)
						{
							echo "<span style='margin-left:10px;color:red;'>Successfully Inserted!....</span>";
						}
					
					}
				?>
				
						
			</section>
			
			<section id='footer'>
			  <h4>All rights reserved by DMS of BSMRH</h4>
			  <h5>Created by <em>Rashedul Hasan Likhon</em></h5>
			</section>
	    </section>
		</body>
	</html>
	