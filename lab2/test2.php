<?php
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/heroes/hero-5/assets/css/hero-5.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="javascript:void(0)"><img src="../img/t1.jpg" alt="../img/t1.jpg" height="50px" width="50px"></a>
            <h4 style="color: white;
    margin-right:5px;"><b>ANC</b></h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <?php foreach ($menus as $menu) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"><?= $menu ?></a>
                        </li>
                    <?php } ?>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero 5 - Bootstrap Brain Component -->
    <section class="bsb-hero-5 px-3 bsb-overlay" style="background-image: url('./assets/img/hero-img-1.webp');">
        <div class="container">
            <div class="row justify-content-md-center align-items-center">
                <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7">
                    <h2 class="display-1 text-white text-center fw-bold mb-4">Dream of Success</h2>
                    <p class="lead text-white text-center mb-5 d-flex justify-content-sm-center">
                        <span class="col-12 col-sm-10 col-md-8 col-xxl-7">There are three ways to ultimate success: The first way is to be kind. The second way is to be kind. The third way is to be kind.</span>
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn bsb-btn-2xl btn-outline-light">Free Consultation</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>