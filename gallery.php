<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Dr. Kunal Neurosurgeon</title>
   
<?php include "header.php"; ?>

<style>
            #preloader {
                display: none;
            }

            @media only screen and (max-width: 770px) {
                #AkuAddedBanner .feat-item2 {

                    max-height: 300px
                }

                #AkuAddedBanner .feat-item2 .feat-img {
                    /* max-height: 44.375rem; */
                    /* min-height: 44.375rem; */
                    max-height: 300px;
                    min-height: 300px;
                }

                #AkuAddedBanner .feat-caro2.slick-slider ul.slick-dots {
                    bottom: 1rem;
                }
            }
        </style>
         <section>
                <div class="w-100 pt-100 black-layer opc5 pb-80 position-relative">
                    <div class="fixed-bg" style="background-image: url(assets/images/pag-top-bg.webp);"></div>
                    <div class="container">
                        <div class="page-title-wrap text-center w-100">
                            <div class="page-title-inner d-inline-block">
                                <h1 class="mb-0">Our Gallery</h1>
                                <ol class="breadcrumb mb-0 justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php" title="">Home</a></li>
                                    <li class="breadcrumb-item active" >Gallery</li>
                                </ol>
                            </div>
                        </div><!-- Page Title Wrap -->
                    </div>
                </div>
        </section>
        <style>
        .gallery-container {
            padding: 50px 0;
        }
        .gallery-card {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .gallery-card:hover {
            transform: scale(1.05);
        }
        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
        <section>
        <div class="container gallery-container">
    <div class="row g-4">
        <?php
        $imageDirectory = "new-assets/services/"; // Set your image folder path
        $images = glob($imageDirectory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        if (!empty($images)) {
            foreach ($images as $image) {
                echo '<div class="col-lg-4 col-md-6 col-sm-12">';
                echo '    <div class="card gallery-card">';
                echo '        <img src="' . $image . '" class="card-img-top" alt="Gallery Image">';
                echo '    </div>';
                echo '</div>';
            }
        } else {
            echo '<p class="text-center">No images found in the gallery.</p>';
        }
        ?>
    </div>
</div>
  

        </section>



        <?php include "footer.php" ?>
        <style>
      