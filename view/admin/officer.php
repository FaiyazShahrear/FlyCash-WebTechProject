<?php

$title= "Officer";
include('adminHeader.php');

?>
   
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
                 <button type="button" style="height: 50px; width: 180px"><a href="addOfficer.php">Add Officer</a></button>
        <br><br>
         <button type="button" style="height: 50px; width: 180px"><a href="removeOfficer.php">Remove Officer</a></button>
        <br><br>
                     <button type="button" style="height: 50px; width: 180px"><a href="officerList.php">Officer List</a></button>
        <br><br>
          <button type="button" style="height: 50px; width: 180px"><a href="officerHistory.php">Officer History</a></button>  
            </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>