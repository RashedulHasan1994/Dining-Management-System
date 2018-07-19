    
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
					
						<table style='margin-bottom:25px;'>
						<tr style='font-family:Arial;'>
						   <th>Date</th>
						   <th>Day</th>
						   <th>Month</th>
						   <th>Year</th>
						   <th>Amount</th>
						   <th rowspan='2' style='width:180px;'><input type='submit' name='submit' value='Add' style='width:80px;height:50px;color:white;font-family:cooper;background:linear-gradient(#006699,#00AAEC)'/></th>
						</tr>
						<tr style='font-size:18px;'>
								<?php
							        echo "<td>".$date=date("d-M-Y")."</td>";
									echo "<td>".$day=date("d")."</td>";
									echo "<td>".$month=date("M")."</td>";
									echo "<td>".$year=date("Y")."</td>";
									echo "<td><input type='text' name='cost' required style='width:80px;' /></td>";
								?>
						</tr>
							
						</table>					
				</form>	

						<?php
								
									$connect=mysql_connect('localhost','root','');
									$select=mysql_select_db("dms");
									
									if($_POST)
									{	
										$date=date("d-M-Y");
										$day=date("d");
										$month=date("M");
										$year=date("Y");
										$amount=$_POST['cost'];
										$insert=mysql_query("insert into cost values('','$date','$day','$month','$year',$amount)");												
										
										if($insert)
										{
											echo "<span style='margin-left:10px;color:red;font-size:18px;margin-bottom:20px;'>Successfully Added!....</span>";
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
	