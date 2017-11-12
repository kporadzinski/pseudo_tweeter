<?php

require_once('function.php');

echo "
<html>
<head>
 <link rel='stylesheet' type='text/css' href='style.css'>
 <script src='script.js'></script>

</head>

<body>
<p id='op'> nejwi </p>

";

if (!isset($_COOKIE['user'])) {
printLog();} else {
echo 'hello';

printLogged();
printLogout();
showTweets() ; }





echo "</body>





</html>";

?>
