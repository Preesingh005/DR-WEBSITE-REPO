<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Dr. Kunal Kumar</title>
   
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
                                <h1 class="mb-0">Make Your Appointment</h1>
                                <ol class="breadcrumb mb-0 justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php" title="">Home</a></li>
                                    <li class="breadcrumb-item active">Contact Us</li>
                                </ol>
                            </div>
                        </div><!-- Page Title Wrap -->
                    </div>
                </div>
        </section>
        <style>
            .page-book-appointment {
            padding: 50px 0;
            background: #f9f9f9;
        }

        /* Appointment Form Styling */
        .appointment-form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            background-color: var(--theme-color);
            color: white;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: var(--secondary-color);
            color:white;
        }

        /* FAQ Styling */
        
        .faq-title {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .accordion-item {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .accordion-button {
            font-weight: bold;
            background: white;
            color: #333;
            transition: 0.3s;
        }

        .accordion-button:hover {
            background: var(--theme-color);
        }

        .accordion-button:not(.collapsed) {
            background: var(--theme-color);
            color: white;
        }

        .accordion-body {
            font-size: 16px;
            color: #444;
            transition: 0.5s ease-in-out;
        }

        /* Hover Effect */
        .accordion-item:hover {
            transform: scale(1.02);
            transition: 0.3s ease-in-out;
        }
        .appointment-form #appointmentForm .form-control{
            padding:15px 13px;
        }
        .image-content img {
    max-width: 701px !important;
    height: 576px !important;
    position: relative;
    top: -32px;
}

        /* Responsive Design */
        
        </style>
        <!-- Book an appointment sec start -->
        <section class="page-book-appointment">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- Appointment Form with Image -->
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="appointment-form d-flex justify-content-between align-items-center">
                    <!-- Form Section -->
                    <div class="form-content w-100 ps-3">
                        <h3 class=" mb-4">Book an Appointment</h3>
                        <form id="appointmentForm" name="appointmentForm" method="POST" autocomplete="off" novalidate>
                            <div class="row">
                                <div class="col-12 col-lg-6 mb-3">
                                    <input type="text" name="patient_name" class="form-control" placeholder="Enter Name" required>
                                </div>
                                <div class="col-12 col-lg-6 mb-3">
                                    <input type="text" name="patient_phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" name="patient_address" class="form-control" placeholder="Your Address" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" name="appointmentFor" class="form-control" placeholder="Appointment for" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <input type="date" name="appointmatedate" value="<?php echo date('Y-m-d'); ?>" class="form-control" required>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn px-5 py-2">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Image Section -->
                    <div class="image-content">
                        <img src="new-assets/top2.jpg" alt="Doctor Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom CSS -->
<style>
    .appointment-form {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 0px 30px 60px;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .form-content {
        flex: 1;
       
    }

   

    @media (max-width: 768px) {
        .appointment-form {
            flex-direction: row;
            text-align: center;
        }
        .posalign {
        position: relative !important;
        bottom: -60px !important;
    }

        .image-content {
            margin-top: 20px;
        }
    }
</style>
<section class="cs-contact-section">
    <div class="container">
        <div class="cs-contact-wrapper">
            <!-- Location -->
            <div class="cs-icon__box cs-style7 posalign">
                <div class="cs-icon__box__icon cs-center cs-accent__bg">
                    <i class="fas fa-home"></i>
                </div>
                <div class="cs-icon__box__right">
                    <h2 class="cs-icon__box__title">Location :</h2>
                    <p class="cs-icon__box__subtitle">
                        Ground floor, ICICI Bank & Domino's 
                        Pizza Kurji Road, Shree Raj Complex, 
                        Dujra Main Rd, beside Tata consultancy 
                        office, Buddha Colony, Patna, Bihar 800001
                    </p>
                </div>
            </div>

            <!-- Email -->
            <div class="cs-icon__box cs-style7">
                <div class="cs-icon__box__icon cs-center cs-accent__bg">
                    <i class="fas fa-envelope-open"></i>
                </div>
                <div class="cs-icon__box__right">
                    <h2 class="cs-icon__box__title">Email address :</h2>
                    <p class="cs-icon__box__subtitle">info@youremailid.com</p>
                </div>
            </div>

            <!-- Phone -->
            <div class="cs-icon__box cs-style7">
                <div class="cs-icon__box__icon cs-center cs-accent__bg">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="cs-icon__box__right">
                    <h2 class="cs-icon__box__title">Call Us :</h2>
                    <p class="cs-icon__box__subtitle">+91 8146 532930</p>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Contact Section Styles */
.cs-contact-section {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 50px 0;
    background: #f9f9f9;
}
.posalign {
        position: relative;
        bottom: -35px;
    }

/* Wrapper to align all boxes */
.cs-contact-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

/* Icon Box */
.cs-icon__box {
    display: flex;
    flex-direction: column; /* Icons always on top */
    align-items: center;
    text-align: center;
    width: 100%; /* Set a width for better layout */
  
    border-radius: 10px;
     /* Light background */
    
}

/* Icon Styling */
.cs-icon__box__icon {
    height: 60px;
    width: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 24px;
    background-color: var(--theme-color, #007bff);
    color: #fff;
    margin-bottom: 15px; /* Space between icon & text */
}

/* Titles & Text */
.cs-icon__box__title {
    font-family: Nunito;
    color: var(--color1);
    font-weight: 700;
}

.cs-icon__box__subtitle {
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: var(--color2);
    font-family: Arimo;
    padding:10px    ;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .posalign {
        position: relative;
        bottom: -47px;
    }
}
/* For screens smaller than 480px (Column Layout) */
@media (max-width: 479px) {
    .cs-contact-wrapper {
        flex-direction: column;
        gap: 20px;
    }
    .image-content {
        display:none;
    }
    .posalign {
        position: relative;
        bottom: 0px !important;
    }
    .form-content {
        
        padding-left:0 !important;
    }
}

</style>




<!-- Book and appointment sec end here -->


<!-- fourth section end here -->

       
       <?php include "footer.php"; ?>
     