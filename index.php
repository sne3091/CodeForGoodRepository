<?php



$hi = $_POST['username'];
$p = $_POST['password'];

if(unset($hi)){$hi = "S";}
if(unset($p)){$p = "S";}

echo "Hello $hi your password is $p";



echo "<form method=POST action=\"index.php\">";
echo "
	<input type=\"text\" name=\"username\">
	<input type=\"password\" name=\"password\">
	<input type=submit value=\"Login\">


";

echo "</form>";

?>