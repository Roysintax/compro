<?php
session_start();
ob_start();
include 'koneksi.php';
if (empty($_SESSION['ID_USER'])) {
    header("location:index.php?access=failed");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'inc/css.php' ?>


    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include 'inc/header.php' ?>

    <!-- ======= Sidebar ======= -->
    <?php include 'inc/sidebar.php' ?>

    <main id="main" class="main">
        <?php
        if (isset($_GET['page'])) {
            if (file_exists('content/' . $_GET['page'] . '.php')) {
                include 'content/' . $_GET['page'] . '.php';
            } else {
                include 'content/notfound.php';
            }
        } else {
            include 'content/dashboard.php';
        }

        ?>


    </main><!-- End #main -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <?php foreach ($rowSliders as $key => $rowSlider): ?>
                <div class="carousel-item active<?php echo $key === 0 ? 'active' : '' ?>">
                    <img src="admin/assets/uploads/<?php echo $rowSlider['image'] ?>" alt="">
                    <div class="container">
                        <h2><?php echo $rowSlider['tittle'] ?></h2>
                        <p><?php echo $rowSlider['description'] ?></p>
                        <a href="about.html" class="btn-get-started">Read More</a>
                    </div>
                </div><!-- End Carousel Item -->
            <?php endforeach ?>



            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- /Hero Section -->
    <!-- ======= Footer ======= -->
    <?php include 'inc/footer.php' ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <?php include 'inc/js.php' ?>

    <script>
        $('#summernote').summernote();
    </script>

    <section id="about" class="about section">

        <div class="container">

            <div class="row position-relative">

                <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="admin/assets/uploads<?php echo $rowAbout['image'] ?>"></div>
                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title"><?php echo $rowAbout['title'] ?></h2>
                    <div class="our-story">
                        <?php echo $rowAbout['content'] ?>
                        <div class="watch-video d-flex align-items-center position-relative">
                            <i class="bi bi-play-circle"></i>
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
</body>

</html>