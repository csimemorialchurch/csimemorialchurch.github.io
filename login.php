<?php
session_start();
/*require_once("./includes/db.php");
if(isset($_POST["loginSubmit"])){
    $uname = $_POST['loginUsername'];
	$upass = $_POST['loginPassword'];

    if($uname !== "" && $upass !== ""){
        $validate_sql = "select * from useraccount where loginID='".$uname."' and loginPassword='".$upass."'";
        echo $conn;
        $result = $conn->query($validate_sql);
        echo $result;
        if($result->num_rows == 1){
            while($row=$result->fetch_assoc()){
                $row=$result->fetch_assoc();
                $_SESSION['userName'] = $row['userName'];
                header('Location: index.php');
            }
        }
    }
}*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
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

                <div class="main-container login-page">
                    <div class="login-container">
                        <h3>Login</h3>
                        <form method="post">
                            <div class="login-field-container">
                                <input type="text" name="loginUsername" id="loginUSername" class="login-field" value="" placeholder="Username">
                            </div>

                            <div class="login-field-container">
                                <input type="password" name="loginPassword" id="loginPassword" class="login-field" value="" placeholder="Password">
                            </div>

                            <div class="login-error-container">
                                
                            </div>

                            <div class="login-button-container">
                                <a href="forgotPassword.php" class="forgot-password">Forgot Password?</a>
                                <input type="submit" name="loginSubmit" id="loginSubmit" class="primary-btn" value="Login">
                            </div>
                        </form>
                    </div>
                </div>

                <?php
                    require_once("./includes/footer.php");
                ?>
            </div>
        </div>
    </body>
</html>