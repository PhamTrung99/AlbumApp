<?php require '../controllers/indexController.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Album App</title>
</head>

<body>
    <div class="container" style="margin: 10px">
        <div class="row" style="">
            <img src="../assets/image/banner.jpg" height="400px" width="1125px" />
        </div>
        <div class="row" style="padding-top: 10px">
            <?php include './partials/headerBar.php' ?>
        </div>
        <div class="row" style="padding-top: 10px">
            <div class="col-md-2">
                <div class="row">
                    <?php include './partials/genresSideBar.php' ?>
                </div>
                <div class="row">
                    <?php include './partials/artistSideBar.php' ?>
                </div>
            </div>
            <div class="col-md-7" style="margin-left: 40px;margin-right: 40px;">
                <?php include './partials/searchArea.php' ?>
            </div>
            <div class="col-md-2">
                <?php include './partials/loginArea.php' ?>
                <div class="row" style="flex-direction: row-reverse;">
                    <?php include './partials/albumSideBar.php' ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php include './partials/footer.php' ?>
        </div>
    </div>


    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>