    
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
				<form method='post'>
				<table>
				<?php
			     if($_GET['id'])
				 {
				     $id=$_GET['id'];
					 mysql_connect('localhost','root','');
					 mysql_select_db("dms");
					 
					 $qr=mysql_query("select * from member where id='$id'");
					 while($data=mysql_fetch_array($qr))
					 {
					     $room_no=$data['room_no'];
					     $user_name=$data['user_name'];
					     $email=$data['email'];
					     $phone=$data['phone'];
					     $picture=$data['picture'];
						 
						 echo "<tr>";
							echo "<td>"."User Name"."</td>";
							echo "<td>"."<input type='text' name='user-name' value='$user_name' style='text-align:center;width:200px;height:25px;'/>"."</td>";
						 echo "</tr>";
						 
							 echo "<tr>";
								echo "<td>"."Room No"."</td>";
								echo "<td>"."<input type='text' name='room_no' value='$room_no' style='text-align:center;width:200px;height:25px;'/>"."</td>";
							 echo "</tr>";
							 
								echo "<tr>";
								echo "<td>"."Email"."</td>";
								echo "<td>"."<input type='text' name='email' value='$email' style='text-align:center;width:200px;height:25px;'/>"."</td>";
								echo "</tr>";
								
									echo "<tr>";
									echo "<td>"."Phone"."</td>";
									echo "<td>"."<input type='text' name='phone' value='$phone' style='text-align:center;width:200px;height:25px;'/>"."</td>";
									echo "</tr>";
									
										echo "<tr>";
										echo "<td colspan='2'>"."<input type='submit' name='submit' value='Update' style='text-align:center;width:100px;height:30px;background:#006699;color:white;'/>"."</td>";
										echo "</tr>";
								 
					 }
				 }
				?>
				
				</table>
				</form>
				
				<?php
				    if(isset($_POST['submit']))
					{
					  $user_name=$_POST['user-name'];
					  $room_no=$_POST['room_no'];
					  $email=$_POST['email'];
					  $phone=$_POST['phone'];
					  mysql_connect('localhost','root','');
					  mysql_select_db("dms");
					  $update=mysql_query("update member SET user_name='$user_name',room_no='$room_no' where id='$id'");
					  
					  if($update)
					  {
					     echo "<span style='color:red;margin-left:20px;'>"."Successfully Updated"."</span>";
					  }
					  echo "<br>";
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
	