<?php

//display loging form

function printLog() {

    $urlop = $_SERVER['REQUEST_URI'];
    echo 'IN';
    echo "

    <form class='logform' action='log.php?log=in&dom=".$urlop."' method='post' >

    <input type='text' name='login' value='login' /> <br>
    <input type='password' name='password'  /> <br>
    <input type='submit' value='LOGIN' /> <br>
    </form>

    <form action='register.php' method='post'>
    <input id='ajlox' type='text' name='login'/> wybierz login <br>
    <input id='psw1' type='password' name='password1'/> wpisz hasło <br>
    <input id='psw2' type='password' name='password2'/> potwierdź hasło <br>
    <input type='submit'/><br>





"

;

}

//function log out

function printLogout() {

    $urlop = $_SERVER['REQUEST_URI'];
    echo'OUT';
    echo "<a href='log.php?log=out&dom=".$urlop."'> log out </a>";

}

function printLogged(){

    echo'<form  action="tweet.php?user='.$_COOKIE['user'].'" method="post">
     <input type="text" name="tweet" > what s in your mind </input><br>
     <input type="submit" /></form><br>';


}


function putTweet() {

    $tweet = $_POST['tweet'];
    $user=   $_GET['user'];
    $conn = new mysqli ('localhost','root','','tweeter');
    $query ="INSERT INTO Tweets VALUES ('','$tweet','3')";
    $result = $conn->query($query);
    echo($conn->error);
}


function showTweets() {

    $user = $_COOKIE['user'];
    echo $user;
    $conn = new mysqli('localhost','root','','tweeter');
    $query ="SELECT * FROM `Tweets`";
    $result = $conn->query($query);
    $i=0;
    foreach($result as $row){
        $tekst = $row['tweet'] ;
        printDiv($tekst, $i);
        $i++;
        }


    echo($conn->error);




}

function printDiv($tekst, $i) {



echo ('

  <div class="tweety" data-om='.$i.'>

    <p>'.$tekst.'</p>

    <button class="btn" onclick="noc('.$i.')"> EDIT </button>

    <form class="frm" action="tweet.php" action="post"><br>
    <input type="text" value="'.$tekst.'"><br>
    <input type="submit">

    </form>
  </div>

');

}













?>
