<?php

$title= "Merchant List";
include('adminHeader.php');

?>
   
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1>Merchant List</h1>
	</div>


	<div id="main_content">
		<table border="1">

		          
    <tr>
                          
      <th >Name</th>
      <th >Username</th>
      <th >Email</th>
      <th >Account Number</th>
      <th>NID</th>
      <th>Gender</th>
      <th>DOB</th>
                                 
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'flycash');
    $sql = "select * from merchant";
    $result = mysqli_query($conn, $sql);
    while($user=mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>"; echo $user["name"]; echo "</td>";
    echo "<td>"; echo $user["user_name"]; echo "</td>";

    echo "<td>"; echo $user["email"]; echo "</td>";
    echo "<td>"; echo $user["account_number"]; echo "</td>";
    echo "<td>"; echo $user["nid_number"]; echo "</td>";

    echo "<td>"; echo $user["gender"]; echo "</td>";
    echo "<td>"; echo $user["date_of_birth"]; echo "</td>";
    echo "</tr>";
    }
    ?>
		</table>
	</div>  
            </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>