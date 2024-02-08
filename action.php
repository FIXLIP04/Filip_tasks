<?php $title = "Hello"; 
include 'header.php';

$FName = $_POST["fn"];
$LName = $_POST["ln"];

echo "<h3> Hello " . $FName . " " . $LName . ", You are welcome to my site. </h3>";

include "footer.php";
?>