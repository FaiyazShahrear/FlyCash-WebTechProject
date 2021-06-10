<?php

$title= "Add Money";
include('adminHeader.php');

?>
   
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
                <form action="../../controller/admin/addmoney.php" method="post">
                    <br><br><br><br><br>
                    <fieldset style="width:80%;  margin:  0px auto;" >
                        
                        <legend><b>Add Money</b></legend>
                        
                          Agent Number&nbsp;:
                            <input id="ccn" type="tel" inputmode="numeric" name="merchantNumber"  autocomplete="cc-number" maxlength="19" >
                            
                            <br><br>

                           Agent Name&nbsp;:
                            <input type="text" name="name" placeholder=" " >
                            <br><br>
                            Amount&nbsp;:&nbsp;
                            <input type="float" name="amount" placeholder=" 0.00" >
                            <hr>
                        
                        <input type="submit" name="submit" value="Add Money">
                        
                    </fieldset>
                    <br><br><br><br><br>
                </form>    
            </td>
                
                
            </tr>

        
            <?php
 include('adminFooter.php');
 ?>

