<?php $title = "While loop"; 
include "header.php";

$Number = $_POST["nbr1"];
$i = 1;

while($i <= $Number)
{
    echo $i. "<br>";
    $i++;  
}

include "footer.php";
?>