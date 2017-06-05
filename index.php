<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Stadium Tickets App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    </head>
    <body>
        <?php require_once "nav.php"; ?>
        <img class = 'img-responsive' src = 'images/oldtraffordmain.jpg'>
            <div id = 'indexmain' class = 'row' style="background:white">
                <div class = 'col-sm-3 cola'><a href = 'ticketpurchase.php'><h1>Buy Tickets Here</h1></a></div>
                <div class = 'col-sm-9 cola'><img src = 'images/footballart.jpg' class = 'img-responsive'></div>
            </div>
        <?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>