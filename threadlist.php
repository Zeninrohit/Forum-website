<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   

<!-- Threadlist page CSS -->
<link rel="stylesheet" href="assest/threadlist.css">


    <title>Threads - Forum Discussion</title>
</head>

<body>

    <?php include("assest/_header.php"); ?>
    <?php include("assest/_dbconnect.php"); ?>

    <!-- Fetch category details from DB -->
    <?php
    $id = $_GET['cat_id'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>

    <!-- Welcome Banner Section -->
    <div class="container">
        <div class="container py-5">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Welcome to <?php echo $catname; ?> Forum</h1>
                    <p class="col-md-8 fs-4">
                        <?php echo $catdesc; ?>
                    </p>
                    <button class="btn btn-primary btn-lg">
                        <i class="bi bi-book"></i> Learn more
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- Backend logic to insert thread in DB -->
        <?php
        $showAlert = false;
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            $th_title = $_POST['title'];
            $th_desc = $_POST['desc'];
            
            // Get logged-in user's ID
            $thread_user_id = 0;
            if (isset($_SESSION['useremail'])) {
                $useremail = $_SESSION['useremail'];
                $user_sql = "SELECT sno FROM `users` WHERE user_email = '$useremail'";
                $user_result = mysqli_query($conn, $user_sql);
                
                if (mysqli_num_rows($user_result) > 0) {
                    $user_row = mysqli_fetch_assoc($user_result);
                    $thread_user_id = $user_row['sno'];
                }
            }
            
            $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$thread_user_id', CURRENT_TIMESTAMP())"; 
            $result = mysqli_query($conn, $sql);
            $showAlert = true;
            if($showAlert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                        <strong>Success!</strong> Your thread has been added! Please wait for community to respond.
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            }
        }
        ?>

        <!-- Ask Question Form (Logged In Users Only) -->
        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<form action="' . $_SERVER['REQUEST_URI'] . '" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">
                        <i class="bi bi-pencil-square"></i> Thread title
                    </label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Enter a descriptive title">
                    <div id="emailHelp" class="form-text">Write title as short as possible</div>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label">
                        <i class="bi bi-chat-left-text"></i> Answer as per your knowledge
                    </label>
                    <textarea class="form-control" id="desc" name="desc" rows="4" placeholder="Share your knowledge with the community..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-send-fill"></i> Submit
                </button>
            </form>';
        }
        ?>

        <!-- Display Threads Section -->
        <?php
        // Display threads if user is logged in
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        ?>
            <div class="container">
                <h2 class="py-2">
                    <i class="bi bi-question-circle"></i> Browse Questions
                </h2>
                
                <div class="row">
                    <div class="flex-shrink-0"></div>

                    <?php
                    $id = $_GET['cat_id'];
                    $noResult = true;
                    $sql = "SELECT * FROM threads WHERE thread_cat_id=$id";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $noResult = false;
                        $title = htmlspecialchars($row['thread_title']);
                        $desc  = htmlspecialchars($row['thread_desc']);
                        $thread_id = urlencode($row['thread_id']);
                        $thread_user_id = $row['thread_user_id'];
                        
                        $sql2 = "SELECT user_name FROM users WHERE sno = '$thread_user_id'";
                        $result2 = mysqli_query($conn, $sql2);

                        if($result2 && mysqli_num_rows($result2) > 0){
                            $row2 = mysqli_fetch_assoc($result2);
                            $user_name = htmlspecialchars($row2['user_name']);
                        }else{
                            $user_name = "Unknown user";
                        }





                        echo '
                        <div class="container my-2">
                            <div class="card p-3">
                                <div class="d-flex align-items-start gap-3">

                                    <!-- User Icon -->
                                    <img src="img/userimage.png"
                                         width="50"
                                         height="50"
                                         class="rounded-circle"
                                         alt="User">

                                    <!-- Question Content -->
                                    <div class="w-100">
                                        <h6 class="mb-1">
                                            <a href="threads.php?thread_id='.urlencode($row['thread_id']).'">'.$title.'</a>
                                        </h6>
                                        <p class="mb-1"><small class="text-muted">By <strong>'.$user_name.'</strong></small></p>
                                        <p class="mb-0 text-muted">'.$desc.'</p>
                                    </div>

                                </div>
                            </div>
                        </div>';
                    }

                    if ($noResult) {
                        echo '<div class="alert alert-warning">
                            <i class="bi bi-info-circle-fill"></i>
                            <strong>Be first to ask question in this category</strong>
                        </div>';
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        else {
            // Show login message if user is not logged in
            echo '<div class="container">
                <h2 class="py-2">
                    <i class="bi bi-question-circle"></i> Browse Questions
                </h2>
                
                <div class="row">
                    <div class="flex-shrink-0"></div>
                    
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <strong>You are not logged in. Please login to ask question.</strong>
                    </div>
                </div>
            </div>';
        }
        ?>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>