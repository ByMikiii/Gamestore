<?php 
$title = 'Login';
$iconPath = '/Gamestore/Images/joystickicon.png';
include '../parts/header.php';
require '../scripts/getAllGames.php';
?>
<h1 class='relative text-center text-4xl mt-32 font-semibold'>Login</h1>
<form action="../scripts/loginscript.php" method="post" autocomplete="off" class='grid w-80 relative m-auto mt-14'>
  <input type="text" name="username" id="" placeholder="Username" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <input type="password" name="pass" id="" placeholder="Password" class='h-9 text-lg p-2 rounded-lg'>
  <p id=message class='relative text-center m-5 text-red-700'>
    <?php if (isset($_POST['message'])){echo $_POST['message'];}?></p>
  <button type="submit" class='bg-gray-400 w-24 h-11 m-auto rounded-lg text-lg'>Login</button>
</form>
<?php 
include '../parts/footer.php';
?>