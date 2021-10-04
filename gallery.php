<!DOCTYPE html>
<html>
    <head>
        <title>Gallery</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="./css/style.css" rel="stylesheet" />
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <link type="text/css" href="./css/header.css" rel="stylesheet" />
        <link type="text/css" href="./css/footer.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <script src="./js/jquery-2.2.0.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="body-container">
            <div class="view-container">
                <?php
                        require_once("./includes/header.php");
                ?>

                <div class="main-container contactus-page">
                    <h2>Gallery</h2>
                    
                    <div class="album-selector">
                        <label>Year:</label>
                        <select name="event_year" class="event-dropdown">
                            <option value="2021">2021</option>
                            <option value="2021">2020</option>
                            <option value="2021">2019</option>
                            <option value="2021">2018</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <label>Event:</label>
                        <select name="event_name" class="event-dropdown">
                            <option value="2021">New year</option>
                            <option value="2021">Good Friday</option>
                            <option value="2021">Ester</option>
                            <option value="2021">Christmas</option>
                            <option value="2021">Harvest Festival</option>
                            <option value="2021">Carol night service</option>
                            <option value="2021">Family picnic</option>
                            <option value="2021">Sports Event</option>
                            <option value="2021">Others</option>
                        </select>
                    </div>

                    <div class="img-gallery-slider">
                        <section class="gallery-slider">
                            <div>
                                <img src="./images/gallery/image01.jpg" alt="" class="img-responsive">
                            </div>
                            <div>
                                <img src="./images/gallery/image02.jpg" alt="" class="img-responsive">
                            </div>
                            <div>
                                <img src="./images/gallery/image03.jpg" alt="" class="img-responsive">
                            </div>
                            <div>
                                <img src="./images/gallery/image04.jpg" alt="" class="img-responsive">
                            </div>
                        </section>
                    </div>
                </div>

                <?php
                    require_once("./includes/footer.php");
                ?>
            </div>
        </div>
    </body>
    
    <script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script>
    $(document).on('ready', function() {
        $('.gallery-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    });
    </script>
</html>