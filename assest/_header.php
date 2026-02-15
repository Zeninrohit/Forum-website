


 <link rel="stylesheet" href="assest/style.css">
<!-- Navigation -->


<nav class="navbar navbar-expand-lg sticky-top">
 
<div class="container">
        <a class="navbar-brand" href="index.php">Idiscuss</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- LEFT MENU -->
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="categories.php"> Categories</a>
                 
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>

            </ul>


            <!-- RIGHT SIDE -->
            <div class="d-flex align-items-center">

                <!-- SEARCH FORM -->
                


                <?php
                // LOGIN SESSION LOGIC FROM test2.php

                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                    echo '
                    <p class="text-black mx-2 mb-0 d-inline">
                        Welcome <strong>' . htmlspecialchars($_SESSION['username']) . '</strong>
                    </p>

                    <a href="assest/_logout.php" class="btn btn-login">
                        Logout
                    </a>
                    ';
                }
                else
                {
                    echo '
                    <button class="btn btn-login" data-bs-toggle="modal" data-bs-target="#loginmodel">
                        Login
                    </button>

                    <button class="btn btn-signup ms-2" data-bs-toggle="modal" data-bs-target="#signupmodel">
                        Sign Up
                    </button>
                    ';
                }
                ?>

            </div>

        </div>
    </div>
</nav>


<?php
// INCLUDE MODELS
include('assest/loginmodel.php');
include('assest/signupmodel.php');


// SUCCESS ALERTS

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true")
{
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You can now login.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
}


if(isset($_GET['logout
logoutsuccess']) && $_GET['logoutsuccess'] == "true")
{
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have been logged out.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
}


if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true")
{
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have been logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
}
?>
