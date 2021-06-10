<?php

$title= " Merchant History";
include('adminHeader.php');

?>

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px" align="center">
          

	<div id="page_title">
		<h1> Merchant transaction</h1>
	</div>

<form method="get" action="history.php">
	<div id="main_content">
		<table border="1">

		          
    <tr>
                          
      <th >Name</th>
      <th>Account Number</th>
      <th>Balance</th>
                                 
    </tr>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'flycash');
    $sql = "select * from merchant";
    $result = mysqli_query($conn, $sql);
    while($user=mysqli_fetch_array($result))
    {

      echo "
      <tr>
      <td>".$user['name']."</td>
      <td>".$user['account_number']."</td>
      <td>".$user['balance']."</td>


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
