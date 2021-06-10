<?php
        require_once ('../../model/officerDB.php');
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        

        

        if($name == "" || $email == "" || $gender == "" ){
            echo "Please fill all information<br>";

        }else{
                if (ctype_alpha($name)==true)
                {
                    if (strpos($email,'@') == true && strpos($email,'.') == true)
                    {
                        
                                
                                    $user= [
                                        'name'         =>$name,
                                        'email'         =>$email,
                                        'gender'        =>$gender,
                                        'dob'            =>$dob
                                        ];
                                        $status = insertOfficer($user);
                                        
                                       
                                        if ($status)
                                        {

                                           
                                            echo "Registration Successful";
                                            header('location:../../view/admin/officer.php');

                                            
                                        }
                                        else{
                                            echo "Registration failed";
                                        }
                                    

            
exit;
                                    echo "User created";
                                
                    }
                    else
                    {
                        echo "Invalid email";
                        echo "<br>";
                    }
                    
                    }
                else{
                    echo "Name should contains only alphabets";}         
            
                    }
    }
        
            if(isset($_POST['reset']))
            {
                $name == "";
                $email == "";
                $gender == "";
                $dd == "";
                $mm == "";
                $yyyy == "";

            }
            
?>