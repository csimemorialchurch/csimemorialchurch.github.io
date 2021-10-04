<div class="top-container">
    <div class="header-container">
        <div class="logo-container fl">
            <img src="./images/logo_new_300.png" class="img-responsive" >
        </div>
        <div class="logo-header fl">
            CSI KCD Memorial Church
        </div>
        <div class="menu-container fr">
            <div class="login-section">
                <?php if($_SERVER['PHP_SELF'] !== '/login.php') {?>
                    <a href="login.php">Login</a>
                <?php } ?>
            </div>

            <div class="menu-section">
                <div class="top-menu">
                    <a href="index.php" class="<?php if($_SERVER['PHP_SELF'] === '/index.php') {echo 'active';} else {echo '';} ?>">Home</a>
                </div>
                <?php if($_SERVER['PHP_SELF'] !== '/login.php') {?>
                <div class="top-menu">
                    <a href="history.php" class="<?php if($_SERVER['PHP_SELF'] === '/history.php') {echo 'active';} else {echo '';} ?>">History</a>
                </div>
                <div class="top-menu">
                    <a href="committee.php" class="<?php if($_SERVER['PHP_SELF'] === '/committee.php') {echo 'active';} else {echo '';} ?>">committee Members</a>
                </div>
                <div class="top-menu">
                    <a href="gallery.php" class="<?php if($_SERVER['PHP_SELF'] === '/gallery.php') {echo 'active';} else {echo '';} ?>">Gallery</a>
                </div>
                <div class="top-menu">
                    <a href="contact.php" class="<?php if($_SERVER['PHP_SELF'] === '/contact.php') {echo 'active';} else {echo '';} ?>">Contact Us</a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="cb"></div>
    </div>
</div>