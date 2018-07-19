    
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
			<h3 style='width:915px;height:40px;background:#ddd;color:#006699;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'>User Name: <?php echo $_SESSION['user_name']; ?></h3>
				<form method='post'>
					
						<table>
						<tr>
						   <th>Serial</th>
						   <th>User Name</th>
						   <th>Email</th>
						   <th>Date</th>
						   <th>Amount</th>
						   
						</tr>
						<tr>
						<?php
							$connect=mysql_connect('localhost','root','');
							$select=mysql_select_db("dms");
					         $data=mysql_query("select * from member where user_name='$_SESSION[user_name]'");
						     
						while($row=mysql_fetch_array($data)){
						
							echo "<td>".$row['id']."</td>";
							echo "<td>".$row['user_name']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".date('d-M-Y')."</td>";
							echo "<td>"."<input type='text'/ name='amount' required style='width:60px;'>"."</td>";
							
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
					
						$amount=$_POST['amount'];
						$month=date("M");
						$year=date("Y");
						
					$data=mysql_query("select * from member where user_name='$_SESSION[user_name]'");
					while($row=mysql_fetch_array($data)){
						$id=$row['id'];
						$user_name=$row['user_name'];
						$email=$row['email'];
						$date=date('d-M-Y');
						
						
						}
						
						$insert=mysql_query("insert into money values('','$user_name','$email','$date','$amount')");
						
						if($insert)
						{
							echo "<span style='margin-left:10px;color:red;'>Successfully Added!....</span>";
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
	