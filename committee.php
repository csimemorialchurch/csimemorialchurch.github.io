<?php
session_start();
require_once("./includes/db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Committee Members</title>
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

                <div class="main-container committee-page">
                    <h2>Committee Members</h2>
                    
                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy01.png" class="img-responsive">
                        </div>

                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>


                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy02.png" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy03.jpg" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy01.png" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy01.png" class="img-responsive">
                        </div>

                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>


                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy02.png" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy03.jpg" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy01.png" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy01.png" class="img-responsive">
                        </div>

                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>


                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy02.png" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy03.jpg" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>

                    <div class="member-container">
                        <div class="member-img fl">
                            <img src="./images/dummy01.png" class="img-responsive">
                        </div>
                        
                        <div class="member-details fl">
                            <div class="member-name">
                                <span class="name-label">Name: </span> Committee Member 01
                            </div>
                            <div class="member-name">
                                <span class="name-label">Role: </span> Committee Role 01
                            </div>
                        </div>
                        <div class="cb"></div>
                    </div>
                </div>

                <?php
                    require_once("./includes/footer.php");
                ?>
            </div>
        </div>
    </body>
</html>
