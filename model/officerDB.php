<?php
	
	require_once('db.php');


	function getAllOfficer(){
		$conn = getConnection();
		$sql = "select * from officer";
		$result = mysqli_query($conn, $sql);
		
		$officer =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($officer, $row); 
			global $officer;
		}

		return $officer;

	}

	function insertOfficer($officer){

		$conn = getConnection();
		$sql = "insert into officer values('{$officer['name']}', '{$officer['email']}','{$officer['gender']}', '{$officer['dob']}')";
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteOfficer($officer){
		print_r($officer);
		
		$conn = getConnection();
		$sql = "delete from officer where name='$officer'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}


?>