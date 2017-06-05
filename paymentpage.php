<? session_start(); ?>
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
        <form method="post" action="postprocess.php" enctype ='multipart/form-data' class="paymentform">
            <label> First Name
                <input type="text" name="fname" placeholder="First Name">
            </label><br>
             <label> Last Name
                <input type="text" name="lname" placeholder="Last Name">
            </label><br>
             <label> Email
                <input type="text" name="email" placeholder="Email Address">
            </label><br>
             <label> Phone Number
                <input type="number" name="phonenumber" placeholder="Phone Number">
            </label><br>
            <label> Credit Card Number
                <input type="number" name="ccardnum" placeholder="Credit Card Number">
            </label><br>
            <input type="submit" value="Submit Payment">
         </form>
         <p id='editthispara'>edit this please</p>
         <?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>