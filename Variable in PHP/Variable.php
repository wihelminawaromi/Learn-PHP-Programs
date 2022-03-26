<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn PHP Programs</title>
</head>

<body>

<form methid = "GET">
    <input type="text" name="person">
    <button>SUBMIT</button>
</form>

<?php
    $name = $_GET['person'];
    echo $name. "is a handsome fellow!";
?>

</body>

</html>