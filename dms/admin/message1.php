    
	<?php
		session_start();
	?>
	<!DOCTYPE html>
	<html>
	<head>
	<title>Dining Management System</title>
	<link rel='stylesheet' type='text/css' href='message.css' />
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
			
			<?php
				if($_GET['id'])
				{
				$id=$_GET['id'];
					mysql_connect('localhost','root','');
					mysql_select_db("dms");
					$qr=mysql_query("select * from member where id='$id'");
					while($data=mysql_fetch_array($qr))
					{
					   $phone=$data['phone'];
					}
				}
			?>
			
		    <section id='content'>
			<h3 style='width:915px;height:40px;background:#ddd;margin:0 auto;margin-top:15px;text-align:center;padding-top:15px;'>Message</h3>
				<form method='post'>
					
						<table cellspacing='14' cellpadding='8'>
							<tr>
								<td>To :</td>
								<td><input type='text' name='user_name' value='+880' class='size' />&nbsp <input type='text' name='user_name' required value='<?php echo $phone; ?>' style='width:208px;'/></td>
							</tr>
							
							<tr>
							    <td>Message :</td>
								<td><textarea name='message' cols='30'></textarea></td>
							</tr>
							
							<tr>
							  <td colspan='2'><input type='submit' name='submit' value='Send' class='send' </td>
							</tr>
								
						</table>
					
				</form>					
						
			</section>
			
			<section id='footer'>
			  <h4>All rights reserved by DMS of BSMRH</h4>
			  <h5>Created by <em>TAL</em></h5>
			</section>
	    </section>
		</body>
	</html>
	