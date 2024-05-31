<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Same Origin Policy Example</title>
</head>
<body>
    <h1>Same Origin Policy Examplea</h1>
    <button onclick="getData()">Veri Al</button>
    <div id="response"></div>

    <script>
        function getData() {
            var req = new XMLHttpRequest();
            req.onload = reqListener; 
            req.open("GET", "http://localhost/cors/index.php", true);
            req.send();
            function reqListener(){
                var getText = req.responseText;
                console.log(getText);
            }
        }
    </script>
</body>
</html>
