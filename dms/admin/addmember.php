    
	<!DOCTYPE html>
	<html>
	<head>
	<title>Dining Management System</title>
	<link rel='stylesheet' type='text/css' href='addmember.css' />
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
				<form method='post' enctype='multipart/form-data'>
					
						<table>
						
							<tr>	
							<td colspan='2' style='padding-left:360px;;background:#006699;height:35px;color:white;font-family:cooper;'>Registration Form</td>
							</tr>
							
							<tr>
							<td>Room No :</td>
							<td><input type='text' name='room' placeholder='Enter Room No' required/></td>
							</tr>
							
							
							
							<tr>
							<td>Nick Name : </td>
							<td><input type='text' name='nname'  placeholder='Enter Nick Name' required/></td>
							</tr>
								<tr>
								<td>User Name : </td>
								<td><input type='text' name='uname' placeholder='Enter User Name' required/></td>
								</tr>
							
							<tr>
							<td>Email : </td>
							<td><input type='text' name='email' placeholder='Enter E-mail' required/></td>
							</tr>
								<tr>
								<td>Phone Number : </td>
								<td><input type='text' name='pnumber' placeholder='Enter Phone Number'/></td>
								</tr>
								
							<tr>
							<td>Department : </td>
							<td><input type='text' name='department' placeholder='Enter Department' required/></td>
							</tr>
							
								<tr>
								<td>Session : </td>
								<td><input type='text' name='session' placeholder='Enter Session' required/></td>
								</tr>
								
								<tr>
								<td>Password : </td>
								<td><input type='password' name='password' placeholder='Enter password' required/></td>
								</tr>
								
							<tr>
							<td>Picture : </td>
							<td><input type='file' name='pic'/></td>
							</tr>
							
								<tr style='background:#006699;'>
								<td colspan='2'><input type='submit' value='Submit' name='submit' style='width:65px;height:30px;margin-left:260px;'/>
								<input type='reset' value='Reset' name='reset' style='width:65px;height:30px;'/></td>
								</tr>
						</table>
						</form>	

				<?php
				
					$connect=mysql_connect('localhost','root','');
					$select=mysql_select_db("dms");
					if($_POST)
					{
						$room_no=$_POST['room'];
						$first_name=$_POST['nname'];
						$last_name=$_POST['uname'];
						$email=$_POST['email'];
						$phone=$_POST['pnumber'];
						$department=$_POST['department'];
						$session=$_POST['session'];
						$password=$_POST['password'];
						
						 $destination="../upload/".uniqid().$_FILES['pic']['name'];
						 $file_name=$_FILES['pic']['tmp_name'];
						 $picture=move_uploaded_file($file_name,$destination);
						
						$insert=mysql_query("insert into member values('','$room_no','$first_name','$last_name','$email','$phone','$department','$session','$password','$destination')");
						
						
						if($insert)
						{
							echo "<span style='margin-left:10px;color:red;'>Successfully Inserted!....</span>";
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
	