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

        /* Responsive Design */
        @media (max-width: 991px) {
            .faq-accordion {
                margin-top: 30px;
            }
        }
        </style>
        <!-- Book an appointment sec start -->
        <section class="page-book-appointment">
        <div class="container">
            <div class="row d-flex align-items-center">
                <!-- Left Section: Appointment Form -->
                <div class="col-lg-5 col-md-12 order-lg-1 order-2">
                    <div class="appointment-form">
                        <h3 class="text-center mb-4">Book an Appointment</h3>
                        <form id="appointmentForm" name="appointmentForm" method="POST" autocomplete="off" novalidate>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text" name="patient_name" class="form-control" placeholder="Enter Name" required>
                                </div>
                                <div class="col-12 mb-3">
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
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn px-5 py-2 ">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Section: FAQ -->
                <div class="col-lg-7 col-md-12 order-lg-2 order-1">
    <div class="faq-accordion">
        <h3 class="faq-title">Frequently Asked Questions</h3>
        <div class="accordion" id="accordionExample">
            
            <!-- Accordion Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                        What are Dr. Kunal's areas of specialization?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Dr. Kunal specializes in neurosurgery, focusing on the diagnosis and surgical treatment of disorders affecting the nervous system.
                    </div>
                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                        Where does Dr. Kunal currently practice?
                    </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Dr. Kunal is a Consultant Neurosurgeon at Cheema Hospital, Rudrapur.
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                        What conditions does Dr. Kunal treat?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        He treats brain tumors, spinal disorders, traumatic brain injuries, and other complex neurosurgical cases.
                    </div>
                </div>
            </div>

            <!-- Accordion Item 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                        How can I schedule a consultation?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Call <strong>+91 8146 532930</strong> or visit ...... Hospital's website for appointments.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

                <!-- End Right Section -->
            </div>
        </div>
    </section>




<!-- Book and appointment sec end here -->


<!-- fourth section end here -->

       
       <?php include "footer.php"; ?>