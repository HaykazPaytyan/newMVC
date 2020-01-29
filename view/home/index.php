<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/main.css">
    <link rel="stylesheet" type="text/css" href="/public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/public/css/media.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/lightslider.css">
    <link rel="stylesheet" type="text/css" href="/public/css/lightgallery.css">
    <link rel="stylesheet" type="text/css" href="/public/css/aos.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Gelasio&display=swap">
</head>

<body>
    <main class="page" data-aos="fade">
        <header class="banner">
            <div class="container">
                <div class="row align-items-center justify-content-center" data-aos="fade-up">
                    <div class="col-md-6">
                        <div class="left banner-item">
                            <img src="/public/img/Jade-Weber3.jpg" alt="girl">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right banner-item">
                            <h1>Jade Weber</h1>
                            <br/>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt excepturi, rem voluptate nesciunt sunt impedit harum. Saepe est, maiores voluptatibus officia mollitia nesciunt animi, quasi amet doloribus iusto nobis reprehenderit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="gallery">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-12">
                        <div id="light-slider" class="lightgallery">
                            <?php foreach ($table as $key => $value) { ?>
                            <a href="/public/img/<?php print($value['img_name']);?>" class="item">
                                <img src="/public/img/<?php print($value['img_name']);?>" class="gallery-img">
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/lightslider.js"></script>
    <script type="text/javascript" src="/public/js/lightgallery.js"></script>
    <script type="text/javascript" src="/public/js/lg-thumbnail.js"></script>
    <script type="text/javascript" src="/public/js/lg-fullscreen.js"></script>
    <script type="text/javascript" src="/public/js/gallery.conf.js"></script>
    <script type="text/javascript" src="/public/js/aos.js"></script>
    <script type="text/javascript" src="/public/js/aos.conf.js"></script>

</body>

</html>