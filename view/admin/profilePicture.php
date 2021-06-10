<?php

$title= "Profile Picture";
include('adminHeader.php');

?>
            

            
                 <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px">
                    <fieldset >
                  
                  <legend><b>PROFILE PICTURE</b></legend>
                  <form method="post" action="../../controller/admin/imageCheck.php" enctype="multipart/form-data">
                  <?php
                        
												$conn = mysqli_connect('localhost', 'root', '', 'flycash');
                        $sql = "select * from admin_image where username='{$name}'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);

                        
                        if(mysqli_num_rows($result) > 0){
                      ?>
                        <img src="<?php echo "{$row['image']}"; ?>" width="200px" height="200px"><br>
                      <?php 
                        }else{
                      ?>
                        <img src="../assets/user.png" width="100px" height="100px"><br>
                      <?php 
                        }
                      ?>
                  <input type="file" name="image" id="image"><hr>
                  
                  <button type="submit" name="upload" id="upload" > UPLOAD  </button>
                  </form>
                  
                  
              </fieldset>
                  
                </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>