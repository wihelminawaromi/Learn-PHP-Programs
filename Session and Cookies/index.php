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
    $_COOKIE
    $_SESSION
    */

    setcookie("name", "Daniel", time() - 86400);

    $_SESSION['name'] = "12";

?>

</body>

</html>