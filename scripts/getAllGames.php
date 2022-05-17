<?php 
require "connection.php";

$sql = "SELECT * FROM games INNER JOIN price ON price.game_id = games.game_id";
$result = $conn->query($sql);
$games = [];

while($game = $result->fetch_assoc()){
  array_push($games, $game);
}


$conn->close();
?>