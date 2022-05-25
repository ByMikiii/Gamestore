<?php
require 'connection.php';
$sql = "SELECT *, country_name AS 'country' FROM USERS INNER JOIN country ON country.country_id= users.country_id";
$result = $conn->query($sql);
$users = [];

while($user = $result->fetch_assoc()){
  array_push($users, $user);
}

$conn->close();

?>