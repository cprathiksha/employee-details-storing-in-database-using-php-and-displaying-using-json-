 <?php include 'database.php'?>

<?php
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$desi=$_POST['desi'];


 mysqli_query($con,"insert into employees(name,
 address,email,desi) values('$name','$address','$email','$desi')");
echo "1 record inserted";
?>

<a href="json1.php">view</a>
