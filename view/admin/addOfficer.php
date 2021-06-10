<?php

$title= "Add Officer";
include('adminHeader.php');

?>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px">
                  <form action="../../controller/admin/officerReg.php" method="post">
                    <fieldset>
                       
                       <legend><b>User Info</b></legend>
                       
                       <br>

                        <b>Name</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="name" >
                        <hr>
                        <b>Email</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="email"  >
                        <button title="hint:Sample@example.com"><b>i</b></button>
                        <hr>

                        <fieldset>

                            <legend><b>Gender</b></legend>

                            <input type="radio" name="gender" value="Male"> <b>Male</b>
                            <input type="radio" name="gender" value="Female"> <b>Female</b>
                            <input type="radio" name="gender" value="Other"> <b>Other</b>

                        </fieldset >
                       
                        <hr>

                        <fieldset >

                            <legend><b>Date of Birth</b></legend>

                            <input type="date" name="dob" size="1"><b> (dd/ mmm/yyyy)

                        </fieldset>
                        <hr>

                        <input type="submit" name="submit" value="Submit">
                        <input type="Reset" name="Reset" value="Reset">

                    </fieldset>
                       </form>
                       
                  
                </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>
