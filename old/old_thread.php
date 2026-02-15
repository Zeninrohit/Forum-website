<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <title>Threads</title>
</head>

<body>


    <?php include("assest/_header.php"); ?>
    <?php include("assest/_dbconnect.php"); ?>

    <!-- // this is will send comments to DB and username also fetch -->


    
 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $comment = trim($_POST['comment']);
    $thread_id = (int)$_POST['thread_id'];

    // Get logged-in user info
    $comment_by = 0;
    $comment_user = "Anonymous User";

    if (isset($_SESSION['useremail'])) {
        $useremail = $_SESSION['useremail'];
        
        // Get user ID and username from database
        $user_sql = "SELECT sno, user_name FROM `users` WHERE user_email = '$useremail'";
        $user_result = mysqli_query($conn, $user_sql);
        
        if (mysqli_num_rows($user_result) > 0) {
            $user_row = mysqli_fetch_assoc($user_result);
            $comment_by = $user_row['sno'];
            $comment_user = $user_row['user_name'];
        }
    }

    if (!empty($comment)) {

        $comment = mysqli_real_escape_string($conn, $comment);
        $comment_user = mysqli_real_escape_string($conn, $comment_user);

        $sql = "INSERT INTO comments 
                (comments_content, thread_id, comments_time, comment_by, comment_user)
                VALUES 
                ('$comment', $thread_id, NOW(), $comment_by, '$comment_user')";

        mysqli_query($conn, $sql);
    }
}
?>

    <?php
    $id = $_GET['thread_id'];
    $sql = "SELECT thread_title, thread_desc FROM `threads` WHERE thread_id = $id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
    }
    ?>

    <?php
    error_reporting(E_ALL ^ E_WARNING);
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
            <strong>Success!</strong> Your thread has been added! Please wait for community to respond.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }

    ?>


    <!-- // this is button and big banner were comment data show -->

    <div class="container">

        <div class="container py-5">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold"><?php echo htmlspecialchars($title); ?></h1>
                    <p class="col-md-8 fs-4"><br>
                        <?php echo htmlspecialchars($desc); ?>
                    </p><br>

                    <?php $thread_id = (int)$_GET['thread_id']; ?>

                    <div class="container my-4">
                        <form action="" method="POST">
                            <input type="hidden" name="thread_id" value="<?php echo $thread_id; ?>">

                            <div class="form-group">
                                <textarea name="comment" class="form-control" rows="3"
                                    placeholder="Write your reply here..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">
                                Reply
                            </button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- /// this is for reply section and display comments from DB -->

 <div class="container my-4">
    <h4>Replies</h4>

    <?php
    $thread_id = (int)$_GET['thread_id'];

    $sql = "SELECT c.*, u.user_name 
            FROM comments c
            LEFT JOIN users u ON c.comment_by = u.sno
            WHERE c.thread_id = $thread_id
            ORDER BY c.comments_time DESC";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0) {
        echo '<div class="alert alert-info">
                No replies yet. Be the first to reply!
              </div>';
    }

    while ($row = mysqli_fetch_assoc($result)) {

        $content = htmlspecialchars($row['comments_content']);
        $time = $row['comments_time'];
        
        // Use user_name from users table if available, otherwise fall back to comment_user
        $user = !empty($row['user_name']) ? htmlspecialchars($row['user_name']) : htmlspecialchars($row['comment_user']);

        echo '
        <div class="card my-2">
            <div class="card-body">
                <h6 class="mb-1 text-primary">'.$user.'</h6>
                <p class="mb-1">'.$content.'</p>
                <small class="text-muted">Posted on '.$time.'</small>
            </div>
        </div>';
    }
    ?>
</div>




    </div>

    <?php
error_reporting(E_ALL & ~E_NOTICE);

?>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>