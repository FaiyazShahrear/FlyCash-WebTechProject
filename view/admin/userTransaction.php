<?php

$title= "Remove User";
include('adminHeader.php');

?>

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1>Search User transaction</h1>
	</div>

<form method="get" action="history.php">
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
      <td><a href ='history.php?name=$user[username]'>Transaction History</a></td>


      </tr>
      ";
    
    }
    ?>
		</table>
	</div> 
    </form>

            </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>
