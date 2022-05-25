<?php 
require './connection.php';

$username = $_POST['username'];
$password = $_POST['pass'];

$sql = "SELECT * FROM users WHERE password LIKE '".$password."' AND username LIKE '".$username."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  session_start();
  $_SESSION['username'] = $username;

  require 'getOwnedGames.php';

  $message = 'Uspesne prihlaseny!';
  $path = '/Gamestore/';
}
 else {
  $message = 'Nespravne meno alebo heslo!';
  $path = '/Gamestore/Login/';
}
?>
<form id='transfer' method='POST' action='<?php echo $path?>'>
  <input type='hidden' name='message' value="<?php echo $message?>">
</form>

<script type="text/JavaScript">
  function Submit(form)
{	document.getElementById(form).submit();
}
Submit('transfer');
</script>