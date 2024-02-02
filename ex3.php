<?php $title = "Exercise 3: Variable, Strings & Operators";
include "header.php"; 
?>
<h1>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.</h1>
<form action="action.php" method="post">
    <label for="fn" class="form-label"> First Name</label>
    <input type="text" name="fn" class="form-control" required><br>
    <label for="ln" class="form-label"> Last Name</label>
    <input type="text" name="ln" class="form-control" required>
    <input type="submit" value="Submit">
</form>
<br><br>    
<table class="table">
    <tr><th> S.n. </th> <th> Name </th> <th> Grade </th> </tr>
    <tr>
        <td> 1 </td> 
        <td> John </td> 
        <td> <?php echo 5; ?> </td> 
    </tr>
    <tr>
        <td> 2 </td> 
        <td> Alice </td> 
        <td> <?php echo 4; ?> </td> 
    </tr>
    <tr>
        <td> 3 </td> 
        <td> Bob </td> 
        <td> <?php echo 5; ?> </td> 
    </tr>
</table>
<?php 
$str1 = "Hello";
$str2 = "World";
echo $str1 . " " . $str2;
?>

<br>

<?php
$result = 298+234+46;
echo $result;
?>

<br>

<?php 
//test
?>
<?php include "footer.php"; ?>