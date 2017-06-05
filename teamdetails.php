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
           <p style="font-size:30px">See The Premier League Teams List and Their Squad</p>
            <button id="fetchteamsbutton">See Teams</button>
            <div class="putteamshere"></div>
            <div class="putplayershere">
                    <button class="clearplayerlist">Clear the list</button>
            </div>
            <div class="clearingdiv"></div>
            
            
      
      
      
      <?php require_once "footer.php";?>

       <script>
            const fetchteamsbutton = document.getElementById('fetchteamsbutton');
        const putteamshere = document.querySelector('.putteamshere');
        const putplayershere = document.querySelector('.putplayershere');
        const clearplayerlist = document.querySelector('.clearplayerlist');
        fetchteamsbutton.addEventListener('click', fetchstuffyo);
         
        function fetchstuffyo (){
            fetch('http://api.football-data.org/v1/competitions/398/teams', {
              method: 'get',
              headers: {
                "X-Auth-Token": "2d4e53c7ff084f2f92921c8a1436c754",
                "Accept": "json"
      }
    })
      .then((response) => {
        return response.json();
      }).then((TeamData) => {

 console.log(TeamData);
    renderteams(TeamData);
})
}
           
        function renderteams(TeamData){
              //console.log(TeamData.teams[2].name);
             let unorderteams = document.createElement('ul');
                TeamData.teams.map((elem)=>{
                    let listofteams = document.createElement('li');
                    listofteams.innerHTML = elem.name;
                    listofteams.setAttribute('class', 'listofteams');
                    let cresturl = document.createElement('img');
                    cresturl.setAttribute('class', 'cresturl');
                    cresturl.src=elem.crestUrl;
                    unorderteams.appendChild(listofteams);
                    unorderteams.appendChild(cresturl);
                    listofteams.addEventListener('click', fetchsquad);
                        function fetchsquad() {
                            fetch(elem._links.players.href, {
              method: 'get',
              headers: {
                "X-Auth-Token": "2d4e53c7ff084f2f92921c8a1436c754",
                "Accept": "json"
      }
    })
      .then((response) => {
        return response.json();
      }).then((fullsquad) => {
        console.log(fullsquad);
        renderplayers(fullsquad);
                })
            }
            })
            putteamshere.appendChild(unorderteams);
           }
        
        function renderplayers(fullsquad) {
            unorderplayers = document.createElement('ul');
             //why is unorderplayers available to use on clearplayerlist function?  i thought it had block scope?
            fullsquad.players.map((elem)=>{
                let eachplayer = document.createElement('div');
                eachplayer.setAttribute('class', 'eachplayer');
                let listofplayers = document.createElement('li');
                listofplayers.innerHTML = elem.name +"<br>" + "Position : " + elem.position + "<br>" + "Nationality : " + elem.nationality +"<br>" + "Jersey Number : " + elem.jerseyNumber +"<br>" + "Contract Until : " + elem.contractUntil +"<br>" + "Date of Birth : " + elem.dateOfBirth +"<br>" +"<br>";
                let playerform = document.createElement('form');
                playerform.action = "teamdetails.php";
                playerform.method = "post";
                let hidinput = document.createElement('input');
                hidinput.setAttribute('class', 'hidinput');
                hidinput.type="hidden";
                hidinput.name = "playername";
                hidinput.value = elem.name;
                let submitplayer = document.createElement('input');
                submitplayer.type = "submit";
                submitplayer.name = "submit";
                playerform.appendChild(submitplayer);
                playerform.appendChild(hidinput);
                unorderplayers.appendChild(playerform);
                unorderplayers.appendChild(listofplayers);
            })
            putplayershere.appendChild(unorderplayers);
            
        }
        
           clearplayerlist.addEventListener('click', removelist);
            function removelist() {
                    putplayershere.removeChild(unorderplayers);
                }    
        </script>          
               
        <?php 
        if(isset($_POST['submit'])) {
          $playername = $_POST['playername'];
          echo $playername;
          $connection = mysqli_connect('localhost','root','','soccerticketdb');
          $query="INSERT INTO favplayers (playername) VALUES ('$playername');";
          mysqli_query($connection, $query);

          mysqli_close($connection);
        
        
        
        }
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>