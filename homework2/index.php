<!DOCTYPE html>
<?php
    function play(){
    function printGameState($curryTeam, $lebronTeam){
        $one = rand(0,4);
        $two = rand(0,4);
            echo "<section id= 'left'>";
            echo "<p id= 'pic1'>" .$curryTeam[$one]['name']. "</p>";
            echo "<img id= 'cur' src='" .$curryTeam[$one]['imgURL']. "' /> <br/>";
            echo "</section>";
            echo "<section id= 'right'>";
            echo "<p id= 'pic2'>" .$lebronTeam[$two]['name']. "</p>";
            echo "<img id= 'jam' src='" .$lebronTeam[$two]['imgURL']. "' /> <br/>";
            echo "</section>";
            if($curryTeam[$one]['points'] > $lebronTeam[$two]['points']){
                echo "<p id= 'winner'>Team Stephen Wins!!</p>";
            }
            elseif($curryTeam[$one]['points'] < $lebronTeam[$two]['points']){
                echo "<p id= 'winner'>Team Lebron Wins!!</p>";
            }

    }
    
    $curry = array('name' => 'Stephen Curry', 'imgURL' => './img/curry.png', 'points' => 8000);
    $derozan = array('name' => 'Demar Derozan', 'imgURL' => './img/derozan.png', 'points' => 3000);
    $giannis = array('name' => 'Giannis Antetokounmpo', 'imgURL' => './img/giannis.png', 'points' => 4000);
    $harden = array('name' => 'James Harden', 'imgURL' => './img/harden.png', 'points' => 7000);
    $embid = array('name' => 'Joel Embid', 'imgURL' => './img/embid.png', 'points' => 2000);
    $lebron = array('name' => 'Lebron James', 'imgURL' => './img/lebron.png', 'points' => 9000);
    $kyrie = array('name' => 'Kyrie Irving', 'imgURL' => './img/kyrie.png', 'points' => 5000);
    $durant = array('name' => 'Kevin Durant', 'imgURL' => './img/durant.png', 'points' => 10000);
    $drummond = array('name' => 'Andre Drummond', 'imgURL' => './img/drummond.png', 'points' => 1000);
    $davis = array('name' => 'Anthony Davis', 'imgURL' => './img/davis.png', 'points' => 6000);
    
    $curryTeam = array($curry, $derozan, $giannis, $harden, $embid);
    $lebronTeam = array( $lebron, $kyrie, $durant, $drummond, $davis);
    
    printGameState($curryTeam, $lebronTeam);
    }
?>
<html>
    <head>
        <title>homework 2</title>
        
        <style type="text/css">
            h2{
                text-align: center;
                color:white;
                margin: 0;
                padding-top:24px;
                padding-bottom:24px;
                font-size:30px;
            }
            body{
                background-size:cover;
                margin:0;
                font-family: 'Quantico', sans-serif;
                background: linear-gradient(rgba(0,0,0, .2), rgba(0,0,0,.2)), url(./img/allstarback.jpg);
            }
            header{
                background-color:black;
                letter-spacing:5px;
                
            }
            #ste, #leb{
                text-align:center;
                width: 50%;
                float: left;
                font-size:24px;
            }
            #ste{
                background:#c91700;
            }
            #pic1, #pic2{
                text-decoration:underline;
            }
            #leb{
                background:#011399;
            }
            #left, #right{
                text-align:center;
                width: 50%;
                float: left;
            }
            #winner{
                clear:both;
                text-align:center;
                font-size:28px;
                margin:0;
                text-decoration:underline;
                text-decoration-color: #02edd1;
                /*border-bottom:3px #02edd1 solid;*/
            }
            form{
                text-align: center;
                margin: 0;
                padding-bottom: 25px;
            }
            footer{
                padding-bottom: 20px;
                text-align: center;
            }
            a{
                color:#f7ef09;
                
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Quantico" rel="stylesheet">
    </head>
    
    <body>
        <header>
            <h2>All-Star One on One Matchup</h2>
        </header>
        
        <section id= "ste"><p>Team Stephen</p></section>
        <section id= "leb"><p>Team Lebron</p></section>
        <?php
            play();
        ?>
        <form>
                <input type="submit" value="Matchup!" />
        </form>
        
        <footer><hr width= "50%"><a href= "stats.php">stats page</a></footer>
    </body>
    
</html>