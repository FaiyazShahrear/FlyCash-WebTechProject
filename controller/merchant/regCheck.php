<?php
    require_once('../../model/merchantModel.php');

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $accountnumber = $_POST['accountnumber'];
        $nidnumber = $_POST['nidnumber'];
        $pin = $_POST['pin'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $gender = $_POST['gender'];
        $date_of_birth =$_POST['date_of_birth'];
        $balance = 0;
        
        $merchant= [
            'name'           =>$name,
            'user_name'      =>$username,
            'email'          =>$email,
            'account_number' =>$accountnumber,
            'nid_number'     =>$nidnumber,
            'pin'            =>$pin,
            'password'       =>$password,
            'gender'         =>$gender,
            'date_of_birth'  =>$date_of_birth,
            'balance'        =>$balance
        ];
        //print_r($user);
            $status = insertMerchant($merchant);
            if ($status)
            {
                echo "Registration Successful";
            }
            else{
                echo "Registration Failed";
            }                                                           
}
//<span style="color: rgb(255, 255, 255);" id="Message" align="center"></span>
?>