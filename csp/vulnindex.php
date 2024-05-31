<?php 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        İsim:<input type="text" name="name">
        Soyisim:<input type="text" name="lastname">
        <input type="submit" name="submit">

    </form>
</body>
</html>

<?php 

if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    echo "Hosgeldiniz"." ".$name." ".$lastname ; 
}




?>