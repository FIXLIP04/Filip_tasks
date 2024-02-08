<?php $title = "Can you vote?"; 
include 'header.php';

$Name = $_POST["name"];
$Age = $_POST["age"];

if ($Age >= 18)
{
    echo "You are eligible for voting!";
}
else
{
    echo "You are not eligible for voting.";
}

include "footer.php";
?>