<?php
$server="localhost";
$username="root";
$password="";
$database="wedkowanie";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="ryby.css">
</head>

<body>
    <div class="baner"><h2>Wędkuj z nami!</h2></div>
    <div class="lewy">
        <img href="ryba2.jpg" alt="szczupak"></div>
    <div class="prawy"><h3>Ryby spokojnego żeru (białe)</h3>
    <?php
    $result = mysqli_query(mysql: $conn, query: "SELECT `id`,`nazwa`,`wystepowanie`FROM ryby where `id`=(2,7,8)");
    while($item=mysqli_fetch_array(result: $result)){
        echo "<li>",$item[0],$item[1], "wystepuje w:", $item[2], $item[3], "</li>";}
?>
    <ol>
        <li><a href="https://wedkuje.pl/">Odwiedź także</a></li>
        <li><a href="http://www.pzw.org.pl/">Polski Związek Wędkarski”</a></li>
    </ol>
</div>
    <div class="stopka"><p>Stronę wykonał: 000000000</p></div>     
   
</body>
</html>