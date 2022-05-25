<?php 
$title = 'Library';
$iconPath = '/Gamestore/Images/joystickicon.png';
include '../parts/header.php';
require '../scripts/getAllGames.php';
require '../scripts/getOwnedGames.php';

?>

<ul class='bg-slate-700 m-24 w-auto rounded-t-md rounded-b-md max-h-full overflow-scroll'>
  <li class='bg-slate-500 h-10 py-2.5 border-b border-gray-900 rounded-t-md'> <span
      class='font-bold p-1 m-2'>Game</span> </li>
  <?php foreach ($ownedGames as $ownedGame) : ?>

  <li class='text-gray-400 p-3 border-b border-gray-500 flex items-center'>
    <span><?php echo $ownedGame['name'];?></span>
    <div class='bg-slate-600 flex ml-auto mr-3 p-1 px-2 rounded-sm hover:bg-slate-500 hover:cursor-pointer'>
      <div class='w-5 mr-1 mt-0.5'>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
          <polygon class="play-btn__svg" points="9.33 6.69 9.33 19.39 19.3 13.04 9.33 6.69" />
          <path class="play-btn__svg"
            d="M26,13A13,13,0,1,1,13,0,13,13,0,0,1,26,13ZM13,2.18A10.89,10.89,0,1,0,23.84,13.06,10.89,10.89,0,0,0,13,2.18Z" />
        </svg>
      </div>
      <span>Launch</span>
    </div>
  </li>

  <?php endforeach; ?>
  <li class='border-gray-900 rounded-b-md'> <span class='p-1 m-2'></span> </li>

</ul>

<?php 
include '../parts/footer.php';
?>