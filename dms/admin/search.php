    
	<?php
		session_start();
	?>
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
			<h3 style='width:915px;height:40px;background:#ddd;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'>Search</h3>
				<form method='post'>
					
						<table>
							<tr>
								<td colspan='4' style='height:60px;'>User Name</td>
								<td colspan='3' style='height:60px;'><input type='text' name='user_name' required style='width:350px;height:25px;box-shadow:3px 3px 3px 3px #006699;'/></td>
							</tr>
									<tr>
									   
										<td colspan='8' style='background:#fff;'><input type='submit' name='submit' value='Search' style='margin-left:380px;margin-top:10px;width:80px;color:white;font-family:Arial;height:40px;background:#006699;'/></td>
									</tr>
								
						</table>
					
				</form>	
                 <br>
				<?php
				
					$connect=mysql_connect('localhost','root','');
					$select=mysql_select_db("dms");
					
					if($_POST)
					{
					
					    $user_name=$_POST['user_name'];
						$month=date("M");
						$year=date("Y");
						
					$data=mysql_query("select * from member where user_name='$user_name'");
					
						$count=mysql_num_rows($data);
					if($count==0)
					{
						echo "<h5 style='width:910px;height:42px;text-align:center;background:#ddd;color:red;margin-bottom:20px;padding-top:20px;'>User Name Does Not Match !...</h5>";
					}
					
					else
					{
					    $_SESSION['user_name']=$user_name;
						echo "<script>location.href='addmoney.php'</script>";
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
	