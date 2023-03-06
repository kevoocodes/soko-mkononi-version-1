<?php

//Declaring variables to prevent errors
$phonenumber = ""; //email 
$username = ""; //username 
$password = ""; //password 
$password2 = ""; //password 2 
$error_array = array(); //holds error messages


if(isset($_POST['register'])) {

    //Registration form valuees
    //email
    $phonenumber = strip_tags($_POST['phonenumber']);
    $phonenumber = str_replace(' ', '', $phonenumber); //remove spaces 
    $_SESSION['phonenumber'] = $phonenumber;  //store session into session variables

      //username
      $username = strip_tags($_POST['username']);
      $username = str_replace(' ', '', $username); //remove spaces 
      $_SESSION['username'] = $username;  //store session into session variables

    //Password
    $password = strip_tags($_POST['password']);
    $password2 = strip_tags($_POST['comfirmPassword']); //remove html tags

    $date = date("Y-m-d H:i:s"); //current date 


    //phonenumber
    if(!preg_match('/^[0-9]{10}+$/', $phonenumber)) {
        array_push($error_array, "your phonenumber is Invalid");
    }


    //username validation 
    if(strlen($username) > 16 || strlen($username) < 4) {
        array_push($error_array, "Your username must be between 4 and 16 characters");

    }else{
        $sqlusername = mysqli_query($con, "SELECT username FROM users WHERE username = '$username'");
        $num_row_username = mysqli_num_rows($sqlusername);

        //username count return 

        if($num_row_username > 0) {
            array_push($error_array, "Username is already in use");
        }
    }


            //password validation 
            //Password validation
            if(strlen($password) > 30 || strlen($password) < 5) {
                array_push($error_array, "Your Password must be 5 to 30 characters");
            }

            if($password != $password2) {
                array_push($error_array, "Your Password do not match");
            }else {
                if(preg_match('/[^A-Za-z0-9]/', $password)) {
                    array_push($error_array, "Your Password can only contain english characters or numbers");
                }
            }



            //if error is empty 
            if(empty($error_array)) {
                $profile_pic = "assets/images/profileimage/head.png";
                $status = 0;

                $sqlquery = "INSERT INTO users(phonenumber,username,password,profileImage,status,dateCreated) VALUES('$phonenumber', '$username', md5('$password'),'$profile_pic','$status','$date')";
                $querry = mysqli_query($con, $sqlquery);

                if($querry) {

                    //create session variables for session
                    
                    $_SESSION['username'] = $username;
                    header("location: login.php");


                    //clear sesssion variables
                    $_SESSION['email'] = "";
                    $_SESSION['username'] = "";
                }

            }


        }
    
    
?>