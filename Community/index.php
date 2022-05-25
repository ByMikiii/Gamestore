<?php 
$title = 'Community';
$iconPath = '/Gamestore/Images/joystickicon.png';
include '../parts/header.php';
require '../scripts/getAllUsers.php';
?>

<table class='table-fixed bg-gray-300 m-auto mt-12 w-4/5 border border-gray-800 rounded-t-lg '>
  <tr class='bg-purple-900 text-slate-200 font-bold h-10 border border-gray-800 rounded-t-lg '>
    <th class='w-14'></th>
    <th class='w-48 text-left'>Username</th>
    <th class='text-left'>Email</th>
    <th></th>
  </tr>
  <?php foreach($users as $user) : ?>
  <tr class='h-10'>
    <td class='max-w-12 border-b border-gray-800'><img class='relative h-5 w-8 mx-auto overflow-hidden'
        src="../Images/Countries/<?php echo $user['country'] ?>.png" alt="Country Image"></td>
    <td class='border-b border-gray-800'><?php echo $user['username'] ?></td>
    <td class='border-b border-gray-800'><?php echo $user['email'] ?></td>
    <td class='border-b border-gray-800'>
      <div class="mx-auto">
        <?php if(isset($_SESSION['username']) && $_SESSION['username'] != $user['username'] ) : ?>
        <button class='bg-green-700 hover:brightness-110 px-1.5 py-0.5 rounded-sm'>Add
          Friend</button> <?php endif ?>
      </div>
    </td>
  </tr>
  <?php endforeach; ?>
</table>
<?php 
include '../parts/footer.php';
?>