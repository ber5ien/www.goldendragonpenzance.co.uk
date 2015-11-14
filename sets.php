<?
include('top_page.php');
include('middle.php');

	$category = $_GET['cat'];
	$category=ucwords($category);
	echo ("<table style='empty-cells: hide' border=1 width=100% bgcolor=white cellpadding=5 cellspacing=11>");
	echo ("<tr><td></td><td bgcolor=#00B246><center><h2>".$category." Set Menu</h2></center></td><td></td></tr>");
	echo "<tr><td><b>No.</b></td><td><b>Name of the Set</b></td><td><b>Price</b></td></tr>";
	$category=strtolower($category);
	include('config.php');
	$mysqli = new mysqli($address,$dbuser,$dbpassword,$dbname);
	$result = $mysqli->query("SELECT * FROM sets WHERE type=\"".$category."\" ORDER BY sort_number");
	while ( $data = $result->fetch_object() )
	{	
		echo ("<tr>");
		echo ("<td width=10%><font size=4 color=#C80006>".$data->sort_number."</font></td><td><b>".$data->name."</b><br>".$data->dishes."</td><td width=10%>&pound;".$data->price."</td>");
		echo ("</tr>");					
	}
	echo ("</table>");
include('footer.php');
?>