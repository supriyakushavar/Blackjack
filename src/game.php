<?php
session_start();
include 'blackjack.php';
$player = new blackjack;
$dealer = new blackjack;
unset ($_SESSION['score']);

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
    <form action="" method="post">
        <button name="hit" type="submit" value="Hit">Hit</button>
        <button name="stand" type="submit" value="stand">Stand</button>
        <button name="surrender" type="submit"value="surrender">Surrender</button>
    </form>

<?php 

if ($_POST["hit"]) {
    if ($player->score == 0) {
        $player->hit(); 
    }
    $player->hit();
    if ($player->score == 21) {
       unset($_SESSION['score']);
       echo "<p>You Won</p>";
   } else if ($player->score > 21) {
       unset($_SESSION['score']);
       echo "<p>You Lost!</p>";
   } else {
       echo "<p>Your score is now: " . $player->score."</p>";
   }
}

if($_POST["stand"]){
    $player->stand();
}

if($_POST["surrender"]){
    $player->surrender();
}
 
?>  
</body>

</html>