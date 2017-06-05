
<!DOCTYPE html>
<html>
    <head>
        <title>Stadium Tickets App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    </head>
    <body>
      <?php require_once "nav.php";?>
        <form method="GET" action="searchticket.php">
            <label style="font-size:30px">Search for your ticket
                <input type="text" name="ticketidinput">
            </label>
            <input type="submit" value="Search it">
        </form>
        <button id="fetchteams">Teams</button>
        <?php
$connection = mysqli_connect('localhost','root','','soccerticketdb');
$output='';
if(isset($_GET['ticketidinput'])){
    $searchkey= $_GET['ticketidinput'];
    $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);

    $query = mysqli_query($connection,"SELECT * FROM soccertable WHERE ticketid LIKE '%$searchkey%'") or die("Could not search!");
    $count = mysqli_num_rows($query);

    if($count == 0){
        $output="There was no search result!";
    }
    else{
        while($row=mysqli_fetch_array($query)){
            $fname=$row['fname'];
            $lname=$row['lname'];
            $phonenumber=$row['phonenumber'];
            $email=$row['email'];
            $ticketid=$row['ticketid'];

            $output ='<div class="resultdiv">' .$fname. ' ' .$lname . '<br>' . 'Phone Number : ' . $phonenumber . '<br>' . 'Email : '.$email . '<br>' . 'Ticket Number : ' .$ticketid . '</div>';
            echo $output;

        }
    }
}
?>﻿



            
      <?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>
