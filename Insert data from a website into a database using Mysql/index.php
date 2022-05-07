<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learn PHP Programs</title>
</head>
<body>

<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="email" placeholder="E-mail">
    <br>
    <input type="text" name="uid" placeholder="Username">
    <br>
    <input type="password" name="pwd" placeholder="Password">
    <button type="submit">Sign up</button>
</form>

<!-- <?php
    $sql = "SELECT * FROM users;";
    $result = mysql_query($conn, $sql);
    $resultCheck = mysql_num_rows ($result);

    if ($resultCheck > 0 ) {
        while ($row = mysql_fetch_assoc($result )) {
            echo $row['user_uid'] . "<br>" ;
        }
    }
?>-->
    
</body>
</html>