<?php

$title= "Remove Merchant ";
include('adminHeader.php');

?>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1>Remove Merchant</h1>
	</div>


	<div id="main_content">
		<table border="1">

		          
    <tr>
                          
      <th >Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>DOB</th>
      <th>Action</th>
                                 
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'flycash');
    $sql = "select * from merchant";
    $result = mysqli_query($conn, $sql);
    while($merchant=mysqli_fetch_array($result))
    {

      echo "
      <tr>
      <td>".$merchant['name']."</td>
      <td>".$merchant['email']."</td>
      <td>".$merchant['gender']."</td>
      <td>".$merchant['date_of_birth']."</td>
      <td><a href ='../../controller/admin/deleteMerchant.php?n=$merchant[name]'>Remove</a></td>


      </tr>
      ";
  
    }
    ?>
		</table>
	</div> 
  <?php
       if(isset($_POST['submit']))
       {
        
       } 
  ?> 
            </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>
