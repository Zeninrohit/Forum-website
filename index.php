<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">



    <title>Iforum</title>


</head>

<body>

    <?php include("assest/_header.php"); ?>
    <?php include("assest/_dbconnect.php"); ?>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height:400px;">
            <div class="carousel-item active">
                <img src="https://woz-u.com/wp-content/uploads/2022/06/Evolution-of-Coding-1200x675.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" style="height:400px;">
                <img src="https://woz-u.com/wp-content/uploads/2019/09/Career-Switch-to-the-Tech-Industry-Image-1-500x383@2x.jpg"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" style="height:400px;">
                <img src="https://woz-u.com/wp-content/uploads/2022/02/Java-JavaScript-Featured-700x441.jpg"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-3">
        <h2 class="text-center mb-4">Idiscuss - Categories</h2>

        <div class="row g-4">

            <?php $sql = "SELECT * FROM `categories`";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $cat= $row['category_id'];
    $cat_name = $row['category_name'];
    $cat_desc = $row['category_description'];

echo '<div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card text-center shadow-sm">

                    <div class="d-flex justify-content-center pt-4">
                        <img src="https://s3.dualstack.us-east-2.amazonaws.com/pythondotorg-assets/media/community/logos/python-logo-only.png" 
                            class="img-fluid" style="max-width:150px; max-height:150px;" alt="Python">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">'.htmlspecialchars($cat_name).'</h5>
                        <p class="card-text"> '.htmlspecialchars($cat_desc).'
                        </p>
                        <a href="threadlist.php?cat_id='.urlencode($cat).'" class="btn btn-primary mt-2">View thread</a>
                    </div>

                </div>
            </div>';
}

?>






            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
