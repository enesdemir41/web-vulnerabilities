<?php
$allowedOrigins = array(
    "http://localhost",
    "https://example.com",
    "https://dpusec.org"
);

if (in_array($_SERVER['HTTP_ORIGIN'], $allowedOrigins)) {
    header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);


    $response = "merhaba DPUSEC";

    echo "<p>".$response."</p>";
} else {

    //header("HTTP/1.1 403 Forbidden");
    echo "Bu kök domain'den gelen istek kabul edilmiyor.";
}


?>
