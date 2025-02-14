<?php include 'config/constants.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php' ?>
    <title><?php echo $thename ?> | Contact Us | 24/7 Online and Offline Support</title>
    <meta name="keywords" content="<?php echo $thename ?>, raw food delivery in Nigeria, student food delivery Nigeria, affordable foodstuff for Nigerian students, fresh groceries for Nigerian students, online food shopping in Nigeria, campus food delivery, hostel food delivery Nigeria, Nigerian student grocery service, cheap food delivery for students, convenient grocery delivery Nigeria, raw food delivery Lagos, student-friendly raw food service Nigeria, foodstuff delivery for hostels, Nigerian student food convenience, affordable Nigerian raw food" />
    <meta name="description" content="Get Food Stuffs delivers fresh foodstuff to Nigerian students. Convenient, affordable, and tailored for busy students. Let us handle your groceries, you focus on school!" />

    <meta property="og:title" content="<?php echo $thename ?> | Affordable Food Delivery for Nigerian Students" />
    <meta property="og:image" content="<?php echo $website_url ?>/all-images/plugin-pix/getfoodstuffs.jpg" />
    <meta property="og:description" content="Get Food Stuffs delivers fresh foodstuff to Nigerian students. Convenient, affordable, and tailored for busy students. Let us handle your groceries, you focus on school!" />

    <meta name="twitter:title" content="<?php echo $thename ?> | Affordable Food Delivery for Nigerian Students" />
    <meta name="twitter:card" content="<?php echo $thename ?>" />
    <meta name="twitter:image" content="<?php echo $website_url ?>/all-images/plugin-pix/getfoodstuffs.jpg" />
    <meta name="twitter:description" content="Get Food Stuffs delivers fresh foodstuff to Nigerian students. Convenient, affordable, and tailored for busy students. Let us handle your groceries, you focus on school!" />
</head>

<body>
    <?php include 'header.php' ?>

    <section class="other-page-section" data-aos="fade-down" data-aos-duration="800">
        <div class="inner-section">
            <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                <ul>
                    <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                    <li class="li" title="Contact Us">Contact Us</li>				
                </ul>
            </div>

            <div class="other-page-pix-div">
                <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                    <h1 data-aos="fade-in" data-aos-duration="800"><span>Contact Us</span></h1>
                    <p>Have questions or need assistance? Our support team is here to help!, We’re just a click or call away. Reach out anytime!</p>
                </div>
            </div>
        </div>
    </section>


    <section class="others-content-div">
        <section class="contact-hash-bg">
            <div class="bottom-body-div">
                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/email.png" alt="<?php echo $thename ?> Email Address" /></div>

                        <div class="text">
                            <h2>MAIL US</h2>
                            <p>info@getfoodstuffs.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/phone.png" alt="<?php echo $thename ?> Phone Number" /></div>

                        <div class="text">
                            <h2>CALL US</h2>
                            <p>(+234) 812 700 0262</p>
                        </div>
                    </div>
                </div>

                <div class="contact-div animated zoomIn">
                    <div class="div-in inner-contact">
                        <div class="icon img-div"><img src="all-images/images/location.png" alt="<?php echo $thename ?> Office Address" /></div>

                        <div class="text">
                            <h2>LOCATION</h2>
                            <p>Ogun State, Nigeria</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-body-div">
            <div class="map-back-div">
                <iframe allowfullscreen="" class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027046.0348654755!2d2.330235590331325!3d7.117389987597631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b0deeeb1087cb%3A0xae67d82f51409ce8!2sOgun%20State!5e0!3m2!1sen!2sng!4v1737196090363!5m2!1sen!2sng"></iframe>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="contact-mail-div" data-aos="fade-in" data-aos-duration="800">
                    <div class="inner-div">
                        <div class="div-in">
                            <div class="text_field_container" id="full_name_container">
                                <script>textField('full_name', 'Full Name')</script>
                            </div>

                            <div class="text_field_container" id="email_container">
                                <script>textField('email', 'Email Address', 'email')</script>
                            </div>

                            <div class="text_field_container" id="subject_container">
                                <script>textField('subject', 'Subject')</script>
                            </div>       
                        </div>

                        <div class="div-in right-div-in">
                            <div class="text_area_container" id="message_container">
                                <script>textField('message', 'Message', 'textarea')</script>
                            </div>
                
                            <button class="btn" onclick="">Send Mail <i class="bi-send-check"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php' ?>
    </section>
</body>

</html>