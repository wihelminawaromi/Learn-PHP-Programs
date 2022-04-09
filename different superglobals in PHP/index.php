<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Learn PHP PROGRAMS</title>

</head>

<body>
<?php
    /*
    $_GlOBALS
    $_GET
    $_COOKIE
    $_SESSION
    */

    $x = 5;

    function something() {
        $y = 10;
        echo $GLOBALS['x'];
    }

    something();
?>

</body>
</html>