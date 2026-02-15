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


    <!-- this is for catrogy display from DB -->

    <?php
    $id = $_GET['cat_id'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    
    ?>


    <div class="container">

        <div class="container py-5">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">Welcome to <?php echo $catname; ?> Forum</h1>
                    <p class="col-md-8 fs-4">
                        <?php echo $catdesc; ?>
                    </p>
                    <button class="btn btn-primary btn-lg">Learn more</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">


        <!-- this is for insert thread in DB in a specific catrogy -->
        <?php
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    $th_title = $_POST['title'];
    $th_desc = $_POST['desc'];
    $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', CURRENT_TIMESTAMP())"; 
    $result = mysqli_query($conn, $sql);
    $showAlert = true;
    if($showAlert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your thread has been added! Please wait for community to respond.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    
}

// this is form for comments and insert comment in db
?>
        <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo '<form action="' . $_SERVER['REQUEST_URI'] . '" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Tread title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">write title as short as possiable</div>
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Aswer as per your knowledge</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>';
    }
?>

        <?php

// this is for display threads in a specific catrogy and if not loggined it will not show threads

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
?>
        <div class="container">
            <h2 class="py-2">Browse Questions</h2><br>
            <div class="row">
                <div class="flex-shrink-0">
                </div>



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

                echo '
    <div class="container my-2">
        <div class="card p-3">
            <div class="d-flex align-items-start gap-3">

                <!-- User Icon -->
                <img src="img/userimage.png"
                     width="40"
                     height="40"
                     class="rounded-circle"
                     alt="User">

                <!-- Question Content -->
                <div class="w-100">
                    <h6 class="mb-1"><a href="threads.php?thread_id='.urlencode($row['thread_id']).'" style="text-decoration:none; color: blue;">'.htmlspecialchars($title).'</a></h6>
                    <p class="mb-0 text-muted">'.htmlspecialchars($desc).'</p>
                </div>

            </div>
        </div>
    </div>';
            }

            if ($noResult) {
                echo '<div class="alert alert-warning"><h4>Be first to ask question in this category</h4></div>';
            }

            ?>
            </div>
        </div>
        <?php
}

else{
    echo '<div class="container">
        <h2 class="py-2">Browse Questions</h2><br>
        <div class="row">
            <div class="flex-shrink-0">
            </div>

            <div class="alert alert-warning"><h4>You are not logged in. Please login to ask question.</h4></div>
        </div>
    </div>';
}

?>



        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>