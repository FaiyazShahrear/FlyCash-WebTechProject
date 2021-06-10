<?php

$title= "User List";
include('adminHeader.php');

?>

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">
                  <form action="viewProfile.php" method="post">
                    <fieldset>
                       
                       <legend><b>View PROFILE</b></legend>
                       
                       Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name"value="<?php echo $name ?>" ><hr>
                       Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" value="<?php echo $email ?>"><hr>
                     
                        Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name"value="<?php echo $gender ?>" ><hr>
                        Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="date" name="dob"value="<?php echo $dob ?>" size="1" ><b> </b>
                            
                           
                         </fieldset>
                       </form>
                       
                  
                </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>
