		   	</td>
  			</tr>
 		</table>
	</td>
		
			
<!-- koniec srodka -->

<!-- right menu -->
	<td width=200 valign=top>	
<?
if (isset($_SESSION['rights']) & $_SESSION['rights'] > 0 )
{
	echo ("
									<div class='contentright'><center><h2>ADMIN PANEL</h2></center></div>
				  					 <div class='subboxright'>
										<ul>
										<li><a href='admin.php?cat=home'>Accounts Info &raquo;</a></li>
										<li><a href='admin.php?cat=vouchers'>Vouchers &raquo;</a></li>
										<li><a href='vouchers_list.php'>Print Vouchers List &raquo;</a></li>	
										<li><a href='admin.php?cat=dishes'>Dishes &raquo;</a></li>
										<li><a href='admin.php?cat=delivery'>Delivery &raquo;</a></li>									
										<li><a href='/sml15/admin/index.php'>Mailing List &raquo;</a></li>
										");
									
										if( isset($_SESSION['rights']) & $_SESSION['rights'] == 2 )
										{
										 echo ("<li><a href='phpmv2/index.php'>Statistics &raquo;</a></li>");
										}
										echo "</ul>";
										echo ("
									 </div>
								 <div class='bottom_menu_right'></div>
	");	
}
?>		
	
				<div class="contentright"><center><h2>DELIVERY CHARGES</h2></center></div>
					
				<div class="subboxright">
					<ul>
						<li><center><a href="penzance.php">Penzance &raquo;</a></center></li>
					</ul>	
				</div>
							
						<?
							//echo $_SESSION['userlogin'];
							if ( isset($_SESSION['userlogin']) && $_SESSION['userlogin']==1 )
							{
							echo "	<div class='contentright'><center><h2>LOGIN</h2></center></div>
										<div class='subboxright'>	";
								echo "You are log in as <b> ".$_SESSION['user']."</b>";
								echo "
									<form action='logout.php' method=post>
									<center><input class='button' type='submit' value='Logout'></center>
									</form>
								";
								echo "</div>";
							}else{
							?>
					
						
				<div class="contentright"><center><h2>LOGIN</h2></center></div>
					<div class="subboxright">
					
						<form action='login.php' method=post>
						<label for='email'>Email:</label>								
							<input id=label size=20 type ='text' name='userid'>
						<label for='password'>Password:</label>
							<input id=password size=20 type ='password' name='password'></font>		
							<input class='button' type='submit' value='Submit  '></font>
						</form>
						<form action='register.php' method='post'>
						<input class='button' type='submit' value='Register'>
						</form>
					</div>
<?
}
?>
				<div class="contentright"><center><h2>SET MENUS</h2></center></div>
					<div class="subboxright"><ul><?menu_list();?></ul></div>
			
				<div class="contentright"><center><h2>SPECIAL DISHES</h2></center></div>
					<div class="subboxright"><ul><? special_list(); ?></ul></div>
			
				<div class="contentright"><center><h2>DRINKS</h2></center></div>
					<div class="subboxright"><ul><? drinks_list(); ?></ul></div>
			
		  </td>
		 </tr>
		</table>
			<!-- end of right columnt -->
 	 </td>
	</tr>
  </table>
 			<!-- end of center without sides -->
  </td>
 </tr>
</table>
			<!-- end of table with both sides -->

<table style="width: 1000px; background-image:url(graphics/bottom.png); height: 46px" cellpadding="0" cellspacing="0" align=center>
<tr><td></td></tr>	
</table>

<table style="background-color:white" width=100% border=0 align=center cellpadding="0" cellspacing="0">
		<tr><td align=center><a href=admin.php>W</a>ebsite design by <a href="http://www.amidev.co.uk">aMiDeV</a></td>
</tr>
</table>

<!-- phpmyvisites -->
<a href="http://www.phpmyvisites.us/" title="Free web analytics, website statistics"
onclick="window.open(this.href);return(false);"><script type="text/javascript">
<!--
var a_vars = Array();
var pagename='';

var phpmyvisitesSite = 2;
var phpmyvisitesURL = "http://jade-palace.co.uk/phpmv2/phpmyvisites.php";
//-->
</script>
<script language="javascript" src="http://jade-palace.co.uk/phpmv2/phpmyvisites.js" type="text/javascript"></script>
<object><noscript><p>Free web analytics, website statistics
<img src="http://jade-palace.co.uk/phpmv2/phpmyvisites.php" alt="Statistics" style="border:0" />
</p></noscript></object></a>
<!-- /phpmyvisites -->
</body>
</html>