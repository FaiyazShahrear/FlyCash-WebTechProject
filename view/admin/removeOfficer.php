<?php

$title= "Remove Officer";
include('adminHeader.php');

?>

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1>Remove Officer</h1>
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
  // $path="../controller/deleteUser.php";
    $conn = mysqli_connect('localhost', 'root', '', 'flycash');
    $sql = "select * from officer";
    $result = mysqli_query($conn, $sql);
    while($officer=mysqli_fetch_array($result))
    {

      echo "
      <tr>
      <td>".$officer['name']."</td>
      <td>".$officer['email']."</td>
      <td>".$officer['gender']."</td>
      <td>".$officer['dob']."</td>
      <td><a href ='../../controller/admin/deleteOfficer.php?n=$officer[name]'>Remove</a></td>


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
