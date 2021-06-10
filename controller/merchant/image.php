<?php
    session_start();
    require_once('../../model/merchantModel.php');

    $conn = mysqli_connect('localhost', 'root', '', 'flycash');
    $username=$_SESSION['user_name'];
    //print_r($username);


    if(isset($_POST['upload']) ){

        $searchsql = "select * from mechant_image where username='{$username}'";

        $result = mysqli_query($conn, $searchsql);
		$row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){

            $status=deleteimage($username);
            if ($status){

                $file_info =  $_FILES['image'];


            $path = '../../assets/upload/'.$file_info['name'];
            if(move_uploaded_file($file_info['tmp_name'], $path)){

                $sql = "insert into mechant_image (username,image ) values ('$username','$path')";
    
                if(mysqli_query($conn, $sql))
                {
                    echo " new Picture Uploaded";
                }else{
                    echo "Error to Upload";
                }
                
            }else{
                echo "Error to Store photo";
            }
    
           

            }else{
                echo "Error to Upload image";
            }

            
			
		}
		else{
            $file_info =  $_FILES['image'];

            $path = '../assets/upload/'.$file_info['name'];
    
            $sql = "insert into mechant_image (username,image ) values ('$username','$path')";
    
            if(mysqli_query($conn, $sql))
            {
                echo "Picture Uploaded";
            }else{
                echo "Error to Upload";
            }
			
		}

       

}

?>