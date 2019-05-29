<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" />
    <title>BlackJack</title>
</head>
<body>
    <form action="game.php" method="post">
        <button class="play" type="submit" name="submit">Play</button>
    </form>
</body>
</html>