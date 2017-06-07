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
        
        <div class="favoriteplayershere">
           <?php
            $connection = mysqli_connect('localhost','root','','soccerticketdb');
            $query=mysqli_query($connection, "SELECT playername FROM favplayers");
            $count = mysqli_num_rows($query);
            echo "Total Number of Favorite Players : " . $count .'<br>';
            if ($count === 0) {
                $displaythis="No favourited players in the list";
                }    
            else {
                while($row=mysqli_fetch_array($query)) {
                    $playername = $row['playername'];
                    echo '<li>' . $playername . '</li>';
                }
            }
            mysqli_close($connection);
                
            
            ?>
        </div>
      
        <?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>
