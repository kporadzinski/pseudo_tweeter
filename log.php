<?php
if ($_GET['log']) {

if (($_GET['log']) === 'out') {
    setcookie('user','1',time()-100000);
    echo'wylogowywanie'.$_GET['dom'];
    echo('<a href="'.$_GET['dom'].'">tu pisz </a>');

} elseif (($_GET['log']) === 'in') {
    echo'zalogowywanie';
    setcookie('user','1');
    echo('<a href="'.$_GET['dom'].'">tu pisz </a>');
} else { echo 'ERROR';} }

?>
