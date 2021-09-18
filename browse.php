<?php
$a = file_get_contents($_GET['url']);
if ($a) {
	echo $a;
} else {
	echo "<h1>It seems like you are lost...</h1><form>Type your url here:<input name=url><input type=submit>";
}
?>