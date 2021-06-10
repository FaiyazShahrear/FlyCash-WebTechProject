<?php

$title= "Remove User";
include('adminHeader.php');

?>

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1>Remove User</h1>
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
    $sql = "select * from user";
    $result = mysqli_query($conn, $sql);
    while($user=mysqli_fetch_array($result))
    {

      echo "
      <tr>
      <td>".$user['name']."</td>
      <td>".$user['email']."</td>
      <td>".$user['gender']."</td>
      <td>".$user['dob']."</td>
      <td><a href ='../../controller/admin/dUser.php?n=$user[name]'>Remove</a></td>


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
