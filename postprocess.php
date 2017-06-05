<?php session_start();
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$ccardnum=$_POST['ccardnum'];
$ticketid=(substr($_POST['fname'],0,2) . substr($_POST['lname'],0,2) . substr($_POST['phonenumber'],0,2));

$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phonenumber'] = $_POST['phonenumber'];
$_SESSION['ccardnum'] = $_POST['ccardnum'];
$_SESSION['ticketid'] = $ticketid;
$connection = mysqli_connect("localhost", "root", "", "soccerticketdb");
$query="INSERT INTO soccertable (fname, lname, phonenumber, ccardnum, email, ticketid) VALUES ('$fname', '$lname', '$phonenumber', '$ccardnum', '$email', '$ticketid');";
mysqli_query($connection, $query);

mysqli_close($connection);
header('Location: confirmation.php');








?>