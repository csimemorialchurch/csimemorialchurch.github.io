<?php
session_start();
require_once("./includes/db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="./css/style.css" rel="stylesheet" />
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <link type="text/css" href="./css/header.css" rel="stylesheet" />
        <link type="text/css" href="./css/footer.css" rel="stylesheet" />
        <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="body-container">
            <div class="view-container">
                <?php
                        require_once("./includes/header.php");
                ?>

                <div class="main-container contactus-page">
                    <h2>Contact Us</h2>
                    
                    <div class="address-content fl">
                        <div class="address-container">
                            <address>
                                <b>CSI KCD Memorial Church</b><br>
                                Inner Circle, Whitefield Main Rd,<br>Whitefield, Bengaluru, <br>Karnataka 560066
                            </address>
                        </div>

                        <div class="contact-form-container">
                            <form name="contactForm" id="contactForm">
                                <div class="input-field-container">
                                    <input type="text" value="" placeholder="Your name" required maxlength="50" name="contactName" id="contactName" class="contact-form-field">
                                </div>

                                <div class="input-field-container">
                                    <input type="email" value="" placeholder="Your email ID" required maxlength="50" name="contactEmail" id="contactEmail" class="contact-form-field">
                                </div>

                                <div class="input-field-container">
                                    <input type="number" value="" placeholder="your mobile number" required maxlength="50" name="contactMobile" id="contactMobile" class="contact-form-field">
                                </div>

                                <div class="input-field-container">
                                    <textarea id="contactMessage" class="contact-form-field" name="contactMessage" rows="6" placeholder="Your message" required></textarea>
                                </div>

                                <div class="input-field-container">
                                    <input type="submit" value="Submit" class="primary-btn" name="contactSubmit" id="contactSubmit">
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="address-content fl">
                        <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDFTviJ9D5uPLkbK_LuYWZXAEsECwFUkcQ&q=CSI+Memorial+Church,whitefiled,Bangalore" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="cb"></div>
                </div>

                <?php
                    require_once("./includes/footer.php");
                ?>
            </div>
        </div>
    </body>
</html>