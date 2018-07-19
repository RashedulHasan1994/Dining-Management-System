	
			<?php
				session_start();
			?>
			
			<?php include('header.php'); ?>
			
			
			
			<section id='content'>
			
			<div class='admin-registration'>
				<form method='post'>
					  <h1>Admin Login Form</h1>
					  <input type='text' name='email' required placeholder='Enter Email'/><br><br>
					  <input type='password' name='password' required placeholder='Enetr Password'/><br>
					  <button name='submit' class='submit'/>Login</button>
				
				</form>
				
				<?php
					$connect=mysql_connect('localhost','root','');
					$connectDb=mysql_select_db("dms");
					
					if($_POST)
					{
						$email=$_POST['email'];
						$password=$_POST['password'];
						
						$value=mysql_query("select * from admin where email='$email' and password='$password' ");
						$count=mysql_num_rows($value);
						        
							if($count==0)
								{
								  echo "<br>";
								  echo "<span style='margin-left:20px;color:red;'>Your Email/Password does not Exists.</span>";  
								}
						    else
							{
							    $data=mysql_fetch_array($value);
								$_SESSION['email']=$data['email'];
								echo "<script>location.href='admin/adminhome.php'</script>";	
							}
						
					}

				?>
			</div>
				
			</section>
			
			<section id='footer'>
			  <h4>All rights reserved by DMS of BSMRH</h4>
			  <h5>Created by <em>TAL</em></h5>
			</section>
			
		</section>
		
		
		</body>
		
	</html>