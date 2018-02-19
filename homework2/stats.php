
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
                /*background-size:cover;*/
                background-color: #cecece;
                margin:0;
                font-family: 'Quantico', sans-serif;
                /*background: linear-gradient(rgba(0,0,0, .2), rgba(0,0,0,.2)), url(./img/allstarback.jpg);*/
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
                clear:both;
            }
            a{
                color:#f7ef09;
                
            }
            h5{
                padding-left:85px;
                font-size:30px;
                margin: 0;
            }
            ul{
                padding-left: 150px;
                margin:0;
                font-size:26px;
            }

            div, section{
                width:50%;
                float:left;
                padding-bottom:75px;
                padding-top:25px;
            }
            img{
                border-radius:50px;
            }
            div{
                padding-top: 75px;
            }
        </style>
        <link href="https://fonts.googleapis.com/css?family=Quantico" rel="stylesheet">
    </head>
    <body>
        <header>
            <h2>All-Star Game Stats</h2>
        </header>
        <div>
        <?php
    $dd = array('name' => 'Demar Derozan', 'points' => 21);
    $dl = array('name' => 'Damian Lillard', 'points' => 21);
    $je = array('name' => 'Joel Embiid', 'points' => 19);
    $lj = array('name' => 'Lebron James', 'points' => 29);
    $kd = array('name' => 'Kevin Durant', 'points' => 19);
    $pg = array('name' => 'Paul George', 'points' => 16);
   
    $cScoringleaders = array($dd, $dl, $je);
    
    $lScoringleaders = array($lj, $kd, $pg);
    
    echo "<h5>Team Stephen</h5>";
    echo "<ul>";
    for($i = 0; $i < 3; $i++){
        echo "<li>" .$cScoringleaders[$i]['name']. "| Points: " .$cScoringleaders[$i]['points']. "</li>";
    }
    echo "</ul>";
    echo "<h5>Team Lebron</h5>";
    echo "<ul>";
    for($i = 0; $i < 3; $i++){
        echo "<li>" .$lScoringleaders[$i]['name']. "| Points: " .$lScoringleaders[$i]['points']. "</li>";
    }
    echo "</ul>";
?>
</div>
<section>
    <img src= "./img/mvp.jpg"/>
</section>

        <footer><hr width= "50%"><a href= "index.php">main page</a></footer>
    </body>
</html>