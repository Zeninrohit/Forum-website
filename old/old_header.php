<?php

session_start();



echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <a class="navbar-brand" href="index.php">Idiscuss</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- LEFT MENU -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contact.php">Contact</a>
        </li>
      </ul>

      <!-- RIGHT SIDE (Search + Auth Buttons) -->
      <div class="d-flex align-items-center">';

// this is for login and signup button and search form


      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo '<form class="d-flex mx-2" role="search">
          <input class="form-control mx-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>


          <p class="text-white mx-2 mb-0 d-inline">Welcome ' . $_SESSION['useremail'] . '</p>
        <a href="assest/_logout.php" class="btn btn-primary ml-1">Logout</a>

        </form>';

}

else{



       echo '<form class="d-flex mx-2" role="search">
          <input class="form-control mx-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <button class="btn btn-primary ml-1" data-bs-toggle="modal" data-bs-target="#loginmodel">Login</button>
        <button class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#signupmodel">Sign up</button>';
}

    echo '</div>
  </div>
</nav>';
include('assest/loginmodel.php');
include('assest/signupmodel.php');
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You can now login.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

// this is for logout succesful message

if(isset($_GET['logoutsuccess']) && $_GET['logoutsuccess'] == "true"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have been logged out.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }


if(isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You have been logged in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

?>