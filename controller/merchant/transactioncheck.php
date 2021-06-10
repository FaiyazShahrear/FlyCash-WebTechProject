<?php
	session_start();
  require_once('../../model/merchantModel.php');
  require_once('../../model/transactionsModel.php');

  $balance =$_SESSION['balance'];
  
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $account_Number = $_SESSION['account_number'];
  $username = $_SESSION['user_name'];
  $nid_number = $_SESSION['nid_number'];
  $password = $_SESSION['password'];
  $gender = $_SESSION['gender'];
  $date_of_birth =$_SESSION['date_of_birth'];
  $pin =$_SESSION['pin'];

  $time=time();
  $date=date("d-m-Y",$time);

	if(isset($_POST['cashout']))
	{
    $amount=$_POST['amount'];
    if($pin==$_POST['pin'])
    {
          if ($balance>=$amount)
            {
              $amount=$_POST['amount'];
              $accountnumber=$_POST['number'];
              $balance=$_SESSION['balance']-$amount;
              $_SESSION['balance']=$balance;
              
              $user= [
                'name'           =>$name,
                'user_name'      =>$username,
                'email'          =>$email,
                'account_number' =>$account_Number,
                'nid_number'     =>$nid_number,
                'pin'            =>$pin,
                'password'       =>$password,
                'gender'         =>$gender,
                'date_of_birth'  =>$date_of_birth,
                'balance'        => $balance
                ]; 
                
                $trans= [
                  'user_name'                =>$username,
                  'account_number'           =>$accountnumber,
                  'amount'                   =>$amount,
                  'transaction_type'         =>'Cash Out',
                  'current_balance'          =>$balance,
                  'date'                     =>$date 
                  ];

                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../view/merchant/transactionDone.php');
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
      }

  else if ($balance<$amount)
  {
    header('location:../../view/merchant/transactionFailed.php');
  }

  else
  {
    print_r('Server Error');
  }

    }
    else
    {
      header('location:../../view/merchant/pinUnmatch.php');
    }
		 
	
}

if(isset($_POST['paybill']))
	{
    $amount=$_POST['amount'];
    if($pin==$_POST['pin'])
    {
          if ($balance>=$amount)
            {
              $amount=$_POST['amount'];
              $accountnumber=$_POST['number'];
              $balance=$_SESSION['balance']-$amount;
              $_SESSION['balance']=$balance;
              
              $user= [
                'name'           =>$name,
                'user_name'      =>$username,
                'email'          =>$email,
                'account_number' =>$account_Number,
                'nid_number'     =>$nidnumber,
                'pin'            =>$pin,
                'password'       =>$password,
                'gender'         =>$gender,
                'date_of_birth'  =>$date_of_birth,
                'balance'        => $balance
                ]; 
                $trans= [
                  'user_name'                =>$username,
                  'account_number'           =>$accountnumber,
                  'amount'                   =>$amount,
                  'transaction_type'         =>'Payment',
                  'current_balance'          =>$balance,
                  'date'                     =>$date 
                  ];

                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../view/merchant/transactionDone.php');
   
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
      }

  else if ($balance<$amount)
  {
    header('location:../../view/merchant/transactionFailed.php');
  }

  else
  {
    print_r('Server Error');
  }

    }
    else
    {
      header('location:../../view/merchant/pinUnmatch.php');
    }
		 
	
}

if(isset($_POST['cashin']))
	{
    $amount=$_POST['amount'];
    if($pin==$_POST['pin'])
    {
          if ($balance>=$amount)
            {
              $amount=$_POST['amount'];
              $accountnumber=$_POST['number'];
              $balance=$_SESSION['balance']-$amount;
              $_SESSION['balance']=$balance;
              
              $user= [
                'name'           =>$name,
                'user_name'      =>$username,
                'email'          =>$email,
                'account_number' =>$account_Number,
                'nid_number'     =>$nidnumber,
                'pin'            =>$pin,
                'password'       =>$password,
                'gender'         =>$gender,
                'date_of_birth'  =>$date_of_birth,
                'balance'        => $balance
                ]; 
                $trans= [
                  'user_name'                =>$username,
                  'account_number'           =>$accountnumber,
                  'amount'                   =>$amount,
                  'transaction_type'         =>'Cash In',
                  'current_balance'          =>$balance,
                  'date'                     =>$date  
                  ];

                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../view/merchant/transactionDone.php');
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
      }

  else if ($balance<$amount)
  {
    header('location:../../view/merchant/transactionFailed.php');
  }

  else
  {
    print_r('Server Error');
  }

    }
    else
    {
      header('location:../../view/merchant/pinUnmatch.php');
    }
		 
	
}


if(isset($_POST['bkashaddmoney']))
	{
    $amount=$_POST['amount'];
    if($pin==$_POST['pin'])
    {
      $amount=$_POST['amount'];
      $accountnumber=$_POST['number'];
      $balance=$_SESSION['balance']+$amount;
          $_SESSION['balance']=$balance;
              
              $user= [
                'name'           =>$name,
                'user_name'      =>$username,
                'email'          =>$email,
                'account_number' =>$account_Number,
                'nid_number'     =>$nidnumber,
                'pin'            =>$pin,
                'password'       =>$password,
                'gender'         =>$gender,
                'date_of_birth'  =>$date_of_birth,
                'balance'        => $balance
                ]; 
                $trans= [
                  'user_name'                =>$username,
                  'account_number'           =>$accountnumber,
                  'amount'                   =>$amount,
                  'transaction_type'         =>'Add Money (Bkash)',
                  'current_balance'          =>$balance,
                  'date'                     =>$date
                  ];

                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../view/merchant/transactionDone.php');
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
    }else
    {
      header('location:../../view/merchant/pinUnmatch.php');
    }
  }

    if(isset($_POST['nagadaddmoney']))
	{
    $amount=$_POST['amount'];
    if($pin==$_POST['pin'])
    {
      $amount=$_POST['amount'];
      $accountnumber=$_POST['number'];
      $balance=$_SESSION['balance']+$amount;
          $_SESSION['balance']=$balance;
              
              $user= [
                'name'           =>$name,
                'user_name'      =>$username,
                'email'          =>$email,
                'account_number' =>$account_Number,
                'nid_number'     =>$nidnumber,
                'pin'            =>$pin,
                'password'       =>$password,
                'gender'         =>$gender,
                'date_of_birth'  =>$date_of_birth,
                'balance'        => $balance
                ]; 
                $trans= [
                  'user_name'                =>$username,
                  'account_number'           =>$accountnumber,
                  'amount'                   =>$amount,
                  'transaction_type'         =>'Add Money (Nagad)',
                  'current_balance'          =>$balance,
                  'date'                     =>$date
                  ];

                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../view/merchant/transactionDone.php');
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
    }else
    {
      header('location:../../view/merchant/pinUnmatch.php');
    }
  }

    if(isset($_POST['roketaddmoney']))
	{
    $amount=$_POST['amount'];
    if($pin==$_POST['pin'])
    {
      $amount=$_POST['amount'];
      $accountnumber=$_POST['number'];
      $balance=$_SESSION['balance']+$amount;
          $_SESSION['balance']=$balance;
              
              $user= [
                'name'           =>$name,
                'user_name'      =>$username,
                'email'          =>$email,
                'account_number' =>$account_Number,
                'nid_number'     =>$nidnumber,
                'pin'            =>$pin,
                'password'       =>$password,
                'gender'         =>$gender,
                'date_of_birth'  =>$date_of_birth,
                'balance'        => $balance
                ]; 
                $trans= [
                  'user_name'                =>$username,
                  'account_number'           =>$accountnumber,
                  'amount'                   =>$amount,
                  'transaction_type'         =>'Add Money (Roket)',
                  'current_balance'          =>$balance,
                  'date'                     =>$date
                  ];

                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../view/merchant/transactionDone.php');
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
    }else
    {
      header('location:../../view/merchant/pinUnmatch.php');
    }
  }


    if(isset($_POST['bankaddmoney']))
	{
    $amount=$_POST['amount'];
    if($pin==$_POST['pin'])
    {
      $amount=$_POST['amount'];
      $accountnumber=$_POST['number'];
      $balance=$_SESSION['balance']+$amount;
          $_SESSION['balance']=$balance;
              
              $user= [
                'name'           =>$name,
                'user_name'      =>$username,
                'email'          =>$email,
                'account_number' =>$account_Number,
                'nid_number'     =>$nidnumber,
                'pin'            =>$pin,
                'password'       =>$password,
                'gender'         =>$gender,
                'date_of_birth'  =>$date_of_birth,
                'balance'        => $balance
                ]; 
                $trans= [
                  'user_name'                =>$username,
                  'account_number'           =>$accountnumber,
                  'amount'                   =>$amount,
                  'transaction_type'         =>'Add Money (Bank)',
                  'current_balance'          =>$balance,
                  'date'                     =>$date
                  ];

                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../merchant/view/transactionDone.php');
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
    }else
    {
      header('location:../../view/merchant/pinUnmatch.php');
    }
  }

    if(isset($_POST['requestmoney']))
    {
      $amount=$_POST['amount'];
      if($pin==$_POST['pin'])
      {
        $amount=$_POST['amount'];
        $accountnumber=$_POST['number'];
        $balance=$_SESSION['balance']+$amount;
        $_SESSION['balance']=$balance;
                
                $user= [
                  'name'           =>$name,
                  'user_name'      =>$username,
                  'email'          =>$email,
                  'account_number' =>$account_Number,
                  'nid_number'     =>$nidnumber,
                  'pin'            =>$pin,
                  'password'       =>$password,
                  'gender'         =>$gender,
                  'date_of_birth'  =>$date_of_birth,
                  'balance'        => $balance
                  ]; 
                  $trans= [
                    'user_name'                =>$username,
                    'account_number'           =>$accountnumber,
                    'amount'                   =>$amount,
                    'transaction_type'         =>'From Admin',
                    'current_balance'          =>$balance,
                    'date'                     =>$date
                    ];
  
                  $status=insertTransaction($trans,$username);
                  if ($status==true)
                  {
                    $updateMerchant=updateMerchant($user);
                    if ($updateMerchant){
                          header('location:../../view/merchant/transactionDone.php');
                    }else{
                      header('location:../../view/merchant/transactionFailed.php');
                    }
                    
                    
                    exit();
                  }else{
                    header('location:../../view/merchant/transactionFailed.php');
                  }
      }else
      {
        header('location:../../view/merchant/pinUnmatch.php');
      }
}

?>