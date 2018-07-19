    <?php
      session_start();	
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
	<title>Dining Management System</title>
	<link rel='stylesheet' type='text/css' href='style.css' />
	</head>
	
		<body>
		 
		<section id='wrapper'>
		
			<section id='header'>
			     <div class='logo'>
					<img src='../images/Logo.png'/>
				 </div>
				 
					 <div class='heading'>
						<img src='../images/heading.png'/>
					 </div>
				 
			     <div class='address'>
					<h3><a href='logout.php'>Logout</a></h3>
				 </div>		
		    </section>
			
		    <section id='content'>
				<div class='left-content'>
					<div class='info'>
					<?php
								mysql_connect('localhost','root','');
								mysql_select_db("dms");
							 	$month=Date("M");
								$year=Date("Y");
								$data=mysql_query("select * from meal where month='$month' and year='$year' ");
									   $sum=0;
									   $sum1=0;
									   $sum2=0;
								while($row=mysql_fetch_array($data)){
									   
									   $meal1=$row['meal_1'];
									   $meal2=$row['meal_2'];
									   $meal3=$row['meal_3'];
									   $sum=$sum+$meal1;
									   $sum1=$sum1+$meal2;
									   $sum2=$sum2+$meal3;
										}
										
										$cost_data=mysql_query("select * from cost");
										$total_cost=0;
								while($cost_row=mysql_fetch_array($cost_data))
										{
											$amount=$cost_row['amount'];
											$total_cost=$total_cost+$amount;
										}
										
										$cash_data=mysql_query("select * from money");
										$total_cash=0;
								while($cash_row=mysql_fetch_array($cash_data))
										{
											$cash_amount=$cash_row['taka'];
											$total_cash=$total_cash+$cash_amount;
										}
									
								$total_meal=$sum+$sum1+$sum2;
								$meal_rate=$total_cost/$total_meal;
								$hand_cash=$total_cash-$total_cost;
								
					
								echo "<h3 style='border-bottom:4px solid #00AAEC;margin:10px 10px;'>Total Amount</h3>";
							    echo "<h4 style='margin:10px 10px;color:gray;'>"."Cash Amount :  "."<span style='color:red;'>". "&nbsp".$total_cash."</span>"."  &nbsp | till ".date("d, F Y.")."</h4>";
								
								echo "<h3 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:6px;'>Cost Amount</h3>";
							    echo "<h4 style='margin:10px 10px;color:gray;'>"."Total  Cost :  "."<span style='color:red;'>". "&nbsp".$total_cost."</span>"."  &nbsp | till ".date("d, F Y.")."</h4>";
								
								echo "<h3 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:6px;'>Hand Cash</h3>";
							    echo "<h4 style='margin:10px 10px;color:gray;'>"."Hand Cash :  "."<span style='color:red;'>". "&nbsp".$hand_cash."</span>"."  &nbsp | till ".date("d, F Y.")."</h4>";
								
								echo "<h3 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:6px;'>Total Meal</h3>";
							    echo "<h4 style='margin:10px 10px;color:gray;'>"."Total  Meal :  "."<span style='color:red;'>". "&nbsp". $total_meal."</span>"."  &nbsp | till ".date("d, F Y.")."</h4>";			
								
								echo "<h3 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:6px;'>Meal Rate</h3>";
							    echo "<h4 style='margin:10px 10px;color:gray;'>"."Meal Rate :  "."<span style='color:red;'>". "&nbsp".$meal_rate."</span>"."  &nbsp | till ".date("d, F Y.")."</h4>";
							
					?>
				     </div>
				</div>
				
					<div class='right-content'>
						<div class='list'>
							<h3><a href='message.php'>Message</a></h3>
							<h3><a href='addmeal.php'>Add Meal</a></h3>
							<h3><a href='view.php'>View</a></h3>
							<h3><a href='ad.php'>Active/Inactive</a></h3>
							<h3><a href='search.php'>Add Money</a></h3>
							<h3><a href='cost.php'>Add Cost</a></h3>
							<h3><a href='addmember.php'>Add Member</a></h3>
						</div>
					</div>
					
										
			
			</section>
			
			<section id='footer'>
			  <h4>All rights reserved by DMS of BSMRH</h4>
			  <h5>Created by <em>TAL</em></h5>
			</section>
	    </section>
		</body>
	</html>
	