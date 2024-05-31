<?php



if(isset($_SERVER['HTTP_ORIGIN'])){
    header("Access-Control-Allow-Origin: " . "*");
}

$response = "merhaba DPUSEC";
echo "<p>".$response."</p>";

?>
