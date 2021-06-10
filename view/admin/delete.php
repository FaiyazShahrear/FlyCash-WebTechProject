

<?php

$conn = mysqli_connect('localhost', 'root', '', 'flycash');

$username=$_GET["del"];
mysqli_query($conn, "delete from user where name= '$username' ");
?>


<script type="text/javascript">
window.location="removeUser.php";
</script>