
<?php
// $link = mysql_connect('localhost', 'root', '');
// if (!$link) {
//     die('Could not connect: ' . mysql_error());
// }
// echo 'Connected successfully';
// mysql_select_db("school");
// mysql_close($link);

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("school");
?>
