<?php
    $email = "rayanul@mail.com";
    $password = 2163;

    if($password == 2162 && $email == "rayan@mail.com"){
        echo "Wellcome to social media app";
    }else if($password != 2162 && $email == "rayan@mail.com"){
        echo "Wrong Password";
    }else if($password == 2162 && $email != "rayan@mail.com"){
        echo "Wrong email";
    }else{
        echo "Everything is wrong";
    }
?>