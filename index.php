<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html">
                    Milk<span>-Station</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <?php
                include './Head.php';
                ?>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- hero slider Start -->
    <div class="banner-wrap">
        <div class="banner-slider">
            <!-- hero slide start -->
            <div class="banner-slide bg1">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInDown" class="mb-2">Home Made </p>
                        <h1 data-animation="flipInX" data-delay="0.8s" data-color="#fff">
                              Dairy <span>Products</span> For You
                      
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
            <!-- hero slide start -->
            <div class="banner-slide bg2">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInDown" class="mb-2">Home Made</p>
                        <h1 data-animation="fadeInDown" data-delay="0.8s" data-color="#fff">
                            Dairy <span>Products</span> For You
                        </h1>
                        
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
            <!-- hero slide start -->
            <div class="banner-slide bg3">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInUp" class="mb-2">Home Made</p>
                        <h1 data-animation="fadeInUp" data-color="#fff" data-delay="0.8s">
                             Dairy <span>Products</span> For You
                        </h1>
                       
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
            <!-- hero slide start -->
            <div class="banner-slide bg4">
                <div class="container">
                    <div class="hero-content">
                        <p data-animation="fadeInDown" class="mb-2">Home Made</p>
                        <h1 data-animation="flipInX" data-color="#fff" data-delay="0.8s">
                              Dairy <span>Products</span> For You
                        </h1>
                        
                    </div>
                </div>
                <div class="hero-overlay"></div>
            </div>
            <!-- hero slide end -->
        </div>
    </div>


   <?php
   include './Footer.php';
   ?>