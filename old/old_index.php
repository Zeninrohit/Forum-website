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