<?php

$title= "Officer List";
include('adminHeader.php');

?>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1>Officer List</h1>
	</div>


	<div id="main_content">
		<table border="1">

		          
    <tr>
                          
      <th >Name</th>
      <th>Email</th>
      <th>Gender</th>
      <th>DOB</th>
                                 
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'flycash');
    $sql = "select * from officer";
    $result = mysqli_query($conn, $sql);
    while($user=mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>"; echo $user["name"]; echo "</td>";
    echo "<td>"; echo $user["email"]; echo "</td>";
    echo "<td>"; echo $user["gender"]; echo "</td>";
    echo "<td>"; echo $user["dob"]; echo "</td>";
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

