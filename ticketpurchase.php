<?php session_start(); ?>
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

    <div class = 'sectionselector'>
        <h1>Please Select Your Section</h1>
        <img src = 'images/oldtraffordseating.png' class = 'img-responsive'>  
    </div>
    
    <div class = 'selectdiv'>
        <h1>Enter the number of people</h1>
        <input type= 'text' id = 'numberofpeople'>
        <select name="seatinglist" form="ticketform" id = 'seatingselect'>
          <option value="stretford">Stretford End</option>
          <option value="safstand">Sir Alex Ferguson Stand</option>
          <option value="eaststand">East Stand</option>
          <option value="southstand">South Stand</option>
        </select>
        
        <p>Are you a Season ticket Holder?</p>
        <select name="seasonticketholder" form="ticketform" id = 'seasonticket'>
            <option value="yesseason">YES</option>
            <option value="noseason">NO</option>
        </select>
    </div>
        
    <form id="ticketform">
        <input type="submit" value = 'Check price and Availability' class = 'ticketsubmit'>   
    </form>
<!--<button id = 'exambutton'>checker</button>-->
        
        <div class = 'printtickethere'></div>
        
        
    <?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>