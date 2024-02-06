<?php $title = "Number multiplication table"; 
include "header.php";

$Number = $_POST["nbr"];

for($i=1; $i <=10; $i++)
{
    echo $Number. "x" .$i. "=" .$i*$Number. "<br>";
    
}

include "footer.php";
?>