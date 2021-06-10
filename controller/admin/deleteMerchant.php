<?php


require_once('../../model/merchantDB.php');

$merchant=$_GET ['n'];
$data=deleteMerchant($merchant);
if ($data)
{
  echo "Deleted";
  header('location: ../../view/admin/merchantList.php');
}
else{
  echo "Merchant cannot deleted";
}

?>