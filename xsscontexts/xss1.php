
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="get">
    username: <input type="text" name="username">
    lastname: <input type="text" name="lastname">
    <input type="submit" name="submit">
</form>
    
</body>
</html>

<?php

if(isset($_GET['submit'])){

    $username = $_GET['username'];
    $lastname = $_GET['lastname'];

    $username = preg_replace("/<script>/","", $username);
    $username = preg_replace("/<\/script>/","", $username);  

    $lastname = preg_replace("/<script>/","", $lastname);
    $lastname = preg_replace("/<\/script>/","", $lastname);

    echo '<h1>'."Hosgeldiniz ". $username. "". $lastname .'</h1>';
}

?>
