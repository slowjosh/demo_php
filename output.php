<?php
    
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $username2 = $_POST["username2"];
        
    if(trim($password1) == trim($username2)){
        header( "location: demo.php?tama= MAY TAMA KA!!");
        }

            else{
                 header("location: demo.php?tae= MAY MALI!!");
                } 
                if(trim($username) == "" || empty($username)){
                echo "input username";
                }
                else{
                    echo "Username: " .$username ."<br>";
                    echo "Email: " .$email ."<br>";
                    echo "Password: " .$password1 ."<br>";
                    echo "Confirm Password: " .$username2 ."<br>";
                    }
                
        }
    else{
        echo "invalid method type";
    }

?>