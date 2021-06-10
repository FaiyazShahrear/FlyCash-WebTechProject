<?php

$title= "Merchant";
include('adminHeader.php');

?>
   
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
                 <button type="button" style="height: 50px; width: 180px"><a href="addMerchant.php">Add Merchant</a></button>
        <br><br>
         <button type="button" style="height: 50px; width: 180px"><a href="removeMerchant.php">Remove Merchant</a></button>
        <br><br>
                     <button type="button" style="height: 50px; width: 180px"><a href="merchantList.php">Merchant List</a></button>
        <br><br>
          <button type="button" style="height: 50px; width: 180px"><a href="merchantHistory.php">Merchant History</a></button>
        <br><br>
                    <button type="button" style="height: 50px; width: 180px"><a href="addMoney.php">Add Money</a></button>    
            </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>
