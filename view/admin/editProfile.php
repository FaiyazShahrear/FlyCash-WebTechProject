<?php

$title= "Edit Profile";
include('adminHeader.php');

?>
     
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="250px">
                    <fieldset>
                       
                       <legend><b>EDIT PROFILE</b></legend>
                       
                       Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" id='name' value="<?php echo $name ?>" ><hr>
                       Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="email" name="email" id='email' value="<?php echo $email ?>"><button title="hint:Sample@example.com"><b>i</b></button><hr>
                       Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                       <input type="radio" name="gender" id='gender' value="Male"> Male
                            <input type="radio" name="gender" id='gender' value="Female"> Female
                            <input type="radio" name="gender" id='gender' value="Other"> Other
                            <hr>
                        Date of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="date" name="dob" id="dob" value="<?php echo $dob ?>" size="1" ><b> </b>
                        <input type="submit" name="submit" value="Submit" id="submit" onclick="editProfile()">
                         </fieldset>
                       
                  <h1 id="Message"></h1>
                </td>
                
                
            </tr>
            
            <?php
 include('adminFooter.php');
 ?>