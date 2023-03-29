<?php 
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Nav_bar_style.css">
</head>
<body>
<header >
            <a href="#" class="Logo"><img src="./Images/Logo3.png" alt="Logo"></a>
            <nav class="Slide">
                <ul>
                    <div class="logo">
                        <img src="./Images/Logo.png" alt="">
                    </div>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">Rent</a></li>
                    <li><a href="#">Help</a></li>
                </ul>
                <form action="./Includes/logout_inc.php" method="Get">
                    <?php 
                        if(isset($_SESSION['UserId']))
                        {
                          echo  '<button name="settings" class="settings" value="setting"><i class="fa-regular fa-user"></i></button>';
                          echo  '<button name="Log_out" class="Log_out" value="out"><i class="fa-solid fa-right-from-bracket"></i></i></button>';
                        }
                        ?>
                </form>        
                <form action="." method="Get">
                      <?php  
                        if(!isset($_SESSION['UserId'])){
                            echo '<button name="Log_in" class="Log_in" value="Log">Log in</button>' ;
                            echo '<button name="Sign_in" class="Sign_in" value="Sign">Sign up</button>' ;

                            if(isset($_GET['Log_in'])){
                                header("Location: ./signin-up_page/sign_Index.php?Log_in");
                            }
                            if(isset($_GET['Sign_in'])){
                                header("Location: ./signin-up_page/sign_Index.php?Sign_in");
                            }
                        }
                    ?>
                </form>
            </nav>
            <i class="fa-solid fa-bars"></i>
</header>
<script src="./Nav_bar_script.js"></script>
</body>
</html>