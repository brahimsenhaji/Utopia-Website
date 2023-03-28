<?php

    if(isset($_POST['sign-in-btn'])){
        //Grabing the data 
        $email = $_POST['email'];
        $password = $_POST['password'];

        //instantiate signupcontr class
        include '../Classes/db_PDS_class.php';
        include '../Classes/login_class.php';
        include '../Classes/login_contr_class.php';

        $login = new LoginContr($email, $password);

        $login->loginuser();

        //Going to ....
        
         header("Location: ../index.php?error=none");

    }