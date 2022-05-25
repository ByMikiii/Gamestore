<?php 
$title = 'Register';
$iconPath = '/Gamestore/Images/joystickicon.png';
include '../parts/header.php';
require '../scripts/getAllGames.php';
?>
<h1 class='relative text-center text-4xl mt-24 font-semibold'>Register</h1>
<form action="" method="post" autocomplete="off" class='grid w-80 relative m-auto mt-14'>
  <input type="text" name="username" placeholder="Username" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <input type="text" name="email" placeholder="Email" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <input type="password" name="pass" placeholder="Password" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <input type="password" name="pass2" placeholder="Repeat Password" class='mb-8 h-9 text-lg p-2 rounded-lg'>
  <div class="flex justify-center items-center mb-2">
    <input type="checkbox" name="checkpromocode" id='checkpromocode' onclick='showPromocode()'>
    <label class="ml-2" for="promocode">Mate promocode?</label>
  </div>
  <input type="text" id='promocode' name="promocode" placeholder="Promocode"
    class='mb-8 h-9 text-lg p-2 rounded-lg invisible'>
  <button type="submit" class='bg-gray-500 w-36 h-11 m-auto rounded-lg text-lg'>Register</button>
</form>
<?php 
include '../parts/footer.php';
?>