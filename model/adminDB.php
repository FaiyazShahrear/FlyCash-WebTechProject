<?php
	
	require_once('db.php');

	function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from admin where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}
	}
	function getAdminByName($username){

		$conn = getConnection();

		$sql = "select * from admin where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}
	

	function getAllAdmin(){
		$conn = getConnection();
		$sql = "select * from admin";
		$result = mysqli_query($conn, $sql);
		
		$admin =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($admin, $row); 
			global $admin;
		}

		return $admin;

	}

	function insertAdmin($admin){

		$conn = getConnection();
		$sql = "insert into admin values('{$admin['name']}','{$admin['email']}', '{$admin['username']}', '{$admin['password']}','{$admin['gender']}','{$admin['dob']}')";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function updateAdmin($admin){
		print_r($admin);
		$conn = getConnection();
		$sql = "update admin set name='{$admin['name']}',username='{$admin['username']}',email='{$admin['email']}', 
		gender='{$admin['gender']}',dob='{$admin['dob']}',password='{$admin['password']}' where username='{$admin['username']}' ";

	
		
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteimage($name){
		$conn = getConnection();
		$sql = "delete from admin_image where username ='$name'";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	function getImageByname($name){
	
		
		$conn = getConnection();
		$sql = "select * from admin_image where username='{$name}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	
			return $row;
	}
	



?>