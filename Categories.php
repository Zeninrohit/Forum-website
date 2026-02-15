<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idiscuss - Categories</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->

    <link rel="stylesheet" href="assest/style.css">
   <link rel="stylesheet" href="assest/threadlist.css">
    
</head>
<body>

<?php include("assest/_header.php"); ?>
    <?php include("assest/_dbconnect.php"); ?>


    <!-- Hero Section -->
    <section class="hero-section">
        <h1 class="section-title">Idiscuss - Categories</h1>
        
        <div class="categories-container">
           
        <div class="row g-4">

<?php

$sql = "SELECT * FROM `categories`";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
    $cat = $row['category_id'];
    $cat_name = $row['category_name'];
    $cat_desc = $row['category_description'];

    echo '
    <div class="col-md-4">
        <div class="category-card">

<img src="https://ui-avatars.com/api/?name='.urlencode($cat_name).'&background=4F46E5&color=fff&size=128&bold=true"
class="category-icon">


            <h3 class="category-title">
                '.htmlspecialchars($cat_name).'
            </h3>

            <p class="category-description">
                '.htmlspecialchars($cat_desc).'
            </p>

            <a href="threadlist.php?cat_id='.urlencode($cat).'" class="btn-view-thread">
                View thread
            </a>

        </div>
    </div>
    ';
}

?>

</div>



        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>