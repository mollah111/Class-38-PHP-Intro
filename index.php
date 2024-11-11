<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro Class</title>
</head>
<body>

<h1>This is our first class on PHP</h1>
</body>
</html>

<?php
echo "<h1>Hellow world!"."</h1>"."<br>";

$x = 10;
$y = 20;

$result = $x+$y;

echo "<h2>The result is=".$result."</h2>";

for ($i=1; $i<=5; $i++){
    echo "Hellow world!"."<br>";
}

$phpArray = [92, 88, 71, 69, 57, 43];

for ($i=0; $i<=5; $i++){
    echo $phpArray [$i]. "<br>";
}

// ====While Loop====

$phpLoop = [600, 500, 400, 300, 200, 100];

$i = 0;
while($i<=5){
    echo $phpLoop [$i]. "<br>";
    $i++;
}

// =====Do while loop=====

$phpDo = [1000, 2000, 3000, 4000, 5000];

$i = 0;

do{
    echo $phpDo [$i]. "<br>";
    $i++;
}

while ($i<=4);
?>