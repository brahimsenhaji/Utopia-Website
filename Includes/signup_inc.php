<?php

    if(isset($_POST['sign-up-btn'])){

        //Grabing the data 

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];

        //instantiate signupcontr class
        include '../Classes/db_PDO_class.php';
        include '../Classes/signup_class.php';
        include '../Classes/signup_contr_class.php';

        $signup = new SignupContr($name,  $email, $phone, $password);

        $signup->signupuser();

        //Going to ....

         header("Location: ../sign-in-up_page/sign_Index.php?signup=success");

    }