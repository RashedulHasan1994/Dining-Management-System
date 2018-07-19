	
			<?php include('header.php'); ?>
			
			
			<section id='content'>
				<div class='left-content'>
				  <img src='images/ok.gif' width='584px' height='40px' style='margin-top:10px;margin-left:15px;'/>
				  <br/>
				  <br/>
				  
				  <div class='info'>
				  
				  <?php
								mysql_connect('localhost','root','');
								mysql_select_db("dms");
							 	date_default_timezone_set('Asia/Dhaka');
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
								
								echo "<br>";
								echo "<h4 style='border-bottom:4px solid #00AAEC;margin:10px 10px;'>Total Amount</h4>";
							    echo "<h5 style='margin:10px 10px;color:gray;'>"."Cash Amount :  "."<span style='color:red;'>". "&nbsp".$total_cash."</span>"."  &nbsp | till ".date("d, F Y, g:i:s A.")."</h5>";
								
								echo "<h4 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:10px;'>Cost Amount</h4>";
							    echo "<h5 style='margin:10px 10px;color:gray;'>"."Total  Cost :  "."<span style='color:red;'>". "&nbsp".$total_cost."</span>"."  &nbsp | till ".date("d, F Y, g:i:s A.")."</h5>";
								
								echo "<h4 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:10px;'>Hand Cash</h4>";
							    echo "<h5 style='margin:10px 10px;color:gray;'>"."Hand Cash :  "."<span style='color:red;'>". "&nbsp".$hand_cash."</span>"."  &nbsp | till ".date("d, F Y, g:i:s A.")."</h5>";
								
								echo "<h4 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:10px;'>Total Meal</h4>";
							    echo "<h5 style='margin:10px 10px;color:gray;'>"."Total  Meal :  "."<span style='color:red;'>". "&nbsp". $total_meal."</span>"."  &nbsp | till ".date("d, F Y.")."</h5>";			
								
								echo "<h4 style='border-bottom:4px solid #00AAEC;margin:10px 10px;padding-top:10px;'>Meal Rate</h4>";
							    echo "<h5 style='margin:10px 10px;color:gray;'>"."Meal Rate :  "."<span style='color:red;'>". "&nbsp".$meal_rate."</span>"."  &nbsp | till ".date("d, F Y.")."</h5>";
							
					?>
				
				  </div>
				  
				</div>
				
					<div class='right-content'>
						<div class='news'>
							<h4>Update News</h4>
							<marquee>Tommorow's meal will be closed.</marquee>
						</div>
							<div class='right-image'>
								<img src='img/d2.jpg'/>
							</div>
							
								<div class='message'>
									<marquee direction='up' scrollamount='2'>
									  => Every Member must provide 1000tk within 5 days beginning of the month.<br><br>
									  => Every Member must provide 1000tk within 5 days beginning of the month.<br><br>
									  => If anyone fail to this then his meal will be closed.
									</marquee>
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