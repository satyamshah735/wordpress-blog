   
<?php
echo "Here are our files<br/> <br/>";
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
	if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
		echo "<div class='col-md-3'>";
		echo "<a href='$path/$file'>$file</a><br /><br />";
		echo "</div>";
		$i++;
	}
}
closedir($dh);
?> 

