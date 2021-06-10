<?php


require_once('../../model/userDB.php');

$user=$_GET ['n'];
$data=deleteUser($user);
if ($data)
{
  echo "Deleted";
  header('location: ../../view/admin/userList.php');
}
else{
  echo "Failed";
}

?>