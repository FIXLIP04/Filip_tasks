<?php $title = "Exercise 4: Control flow and loops";
include 'header.php';?>

<h1> Exercise 4: Control flow and loops </h1>

<form action="ex4-voting.php" method="post">
    <label for="name" class="form-label"> Name </label>
    <input type="text" name="name" class="form-control" required><br>
    <label for="age" class="form-label"> Age </label>
    <input type="text" name="age" class="form-control" required>
    <input type="submit" value="Submit">
</form>

<br>
<?php 
    switch(date("F"))
    {
        case "August":
            echo "It's August, so it's still holiday.";
            break;
        default:
            echo "Not August, this is ". date("F") ." so I don't have any holidays.";
            break;
    }
?>
<br>
<br>

<form action="ex4-number.php" method="post">
    <label for="nbr" class="form-label"> Write a number (for loop)</label>
    <input type="text" name="nbr" class="form-control" required><br>
    <input type="submit" value="Submit">
</form>

<br>
<br>

<form action="ex4-while.php" method="post">
    <label for="nbr1" class="form-label"> Write a number (while loop)</label>
    <input type="text" name="nbr1" class="form-control" required><br>
    <input type="submit" value="Submit">
</form>

<br>
<br>

<?php 
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    foreach($myarray as $value)
    {
        echo $value . "<br>";
    }
?>

<?php include "footer.php"; ?>