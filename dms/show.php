	
	        <?php session_start(); ?>
			<?php include('header.php'); ?>
			
			
			<section id='content'>
			<br><br>
			 <table>
			 <tr>
			  <th>User Name</th>
			  <th>Department</th>
			  <th>Session</th>
			  <th>Room No</th>
			  <th>Phone</th>
			  <th>Total Amount</th>
			  <th>Total Meal</th>
			  <th>Current</th>
			 </tr>
			 
				<?php
				   mysql_connect('localhost','root','');
				   mysql_select_db("dms");
				
				   $item_per_page=2;
				   $records=mysql_num_rows(mysql_query("select * from member"));
				   $pages=ceil($records/$item_per_page);
				   $page=(isset($_GET['page']) ? (int)$_GET['page'] : $_GET['page']=1);
				   $start=($page-1)*$item_per_page;
				   $query=mysql_query("select * from member LIMIT $start,$item_per_page");
				   
				   
				   
				  
				   while($data=mysql_fetch_array($query))
				   {
				    $id=$data['id'];
				    $user_name=$data['user_name'];
				    $department=$data['department'];
				    $session=$data['session'];
				    $room_no=$data['room_no'];
				    $phone=$data['phone'];
				    $picture=$data['picture'];
					$money=mysql_query("select * from money where user_name='$user_name'");
					$total_amount=0;
					while($mn=mysql_fetch_array($money))
					{
					$taka=$mn['taka'];
					$total_amount=$total_amount+$taka;
				    
					}
					
					$cost=mysql_query("select * from cost");
					$total_cost=0;
					while($cs=mysql_fetch_array($cost))
					{
					$amount=$cs['amount'];
					$total_cost=$total_cost+$amount;
					}
					
					$qr=mysql_query("select * from meal where user_name='$user_name'");
					$total_meal=0;
					while($collect=mysql_fetch_array($qr))
					{
					    $meal_1=$collect['meal_1'];
						$meal_2=$collect['meal_2'];
						$meal_3=$collect['meal_3'];
						$total_meal=$total_meal+$meal_1+$meal_2+$meal_3;
					}
				
				$new=mysql_query("select * from meal");
				$t_meal=0;
				while($tm=mysql_fetch_array($new))
				{
				   $t_meal=$t_meal+$tm['meal_1']+$tm['meal_2']+$tm['meal_3'];
				}
					$meal_rate=$total_cost/$t_meal;
				    $pay=$total_amount-($total_meal*$meal_rate);
					    echo "<tr style='text-align:center;'>";
					
						echo "<td>".$user_name."</td>";
						echo "<td>".$department."</td>";
						echo "<td>".$session."</td>";
						echo "<td>".$room_no."</td>";
						echo "<td>".$phone."</td>";
						echo "<td>".$total_amount."</td>";
						echo "<td>".$total_meal."</td>";
						
						if($pay>0)
						{
						echo "<td>".$pay." "."(Cash)"."</td>";
						}
						else
						{
						echo "<td>".$pay." "."(Due)"."</td>";
						}
						
					
					echo "</tr>";
				   }
				   
				   
				   
				?>
				
			</table>
			<?php
				echo "<br>";
				for($i=1;$i<=$pages;$i++)
				   {
				      
				    echo "<span style='background:#006699;margin-left:10px;padding:5px 5px;'>".'<a href="?page='.$i.'" style="padding-left:5px;color:white;text-decoration:none;">'.$i." ".'</a>'."</span>";
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