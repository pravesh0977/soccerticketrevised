<?php session_start(); ?>
<?php mysqli_connect("localhost", "fssb", "Webdevfun1!", "fssb") or die ('not found maera'); ?>
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
        <?php require_once "nav.php"; ?>
            <form class="lookupform" action="lookupticket.php" method="post">
                <label>Please enter your Ticket Number</label>
                <input type="text" name="lookuper">
                <input type="submit" name="submitlookup" value="search">
            </form>
<?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>
<!-- 
$connection = mysqli_connect('localhost','fssb','Webdevfun1!','fssb'); -->