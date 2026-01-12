<?php

    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = "";
    $db_name = "campusconnectusersdb";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server,
    $db_user,
    $db_pass,
    $db_name);
    }
    catch(mysqli_sql_exception){
        
    }     
        
    if($conn){

        if($_SERVER["REQUEST_METHOD"]=='POST'){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $p = $_POST['password'];
            $rp = $_POST['repassword'];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $repassword = password_hash($_POST["repassword"], PASSWORD_DEFAULT);

            if(strpos($email, "gectr.ac.in")){
                if($rp == $p){
                    $sql = "INSERT INTO userdata (name, email, password) VALUES ('$name', '$email', '$password')";
                    if(mysqli_query($conn, $sql)){
                        // echo "registered successfully";
                }
                }else{
                    echo "<script>alert('password confirmation failed');</script>";
                }
            }else{
                echo "<script>alert('you must use your student mail');</script>";
            }    
            
        }else{
            // echo "couldn't connect to the server";
        }
    }

?>