<?php

$title= "User";
include('adminHeader.php');

?>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
                 <button type="button" style="height: 50px; width: 180px"><a href="addUser.php">Add User</a></button>
        <br><br>
         <button type="button" style="height: 50px; width: 180px"><a href="removeUser.php">Remove User</a></button>
        <br><br>
                     <button type="button" style="height: 50px; width: 180px"><a href="userList.php">User List</a></button>
        <br><br>
          <button type="button" style="height: 50px; width: 180px"><a href="userHistory.php">User History</a></button>
        <br><br>
                    <button type="button" style="height: 50px; width: 180px"><a href="userTransaction.php">User Transaction</a></button>    
            </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>
