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
                <?php if($_SERVER['PHP_SELF'] !== '/login.html') {?>
                    <a href="login.html">Login</a>
                <?php } ?>
            </div>

            <div class="menu-section">
                <div class="top-menu">
                    <a href="index.html" class="<?php if($_SERVER['PHP_SELF'] === '/index.html') {echo 'active';} else {echo '';} ?>">Home</a>
                </div>
                <?php if($_SERVER['PHP_SELF'] !== '/login.html') {?>
                <div class="top-menu">
                    <a href="history.html" class="<?php if($_SERVER['PHP_SELF'] === '/history.html') {echo 'active';} else {echo '';} ?>">History</a>
                </div>
                <div class="top-menu">
                    <a href="committee.html" class="<?php if($_SERVER['PHP_SELF'] === '/committee.html') {echo 'active';} else {echo '';} ?>">committee Members</a>
                </div>
                <div class="top-menu">
                    <a href="gallery.html" class="<?php if($_SERVER['PHP_SELF'] === '/gallery.html') {echo 'active';} else {echo '';} ?>">Gallery</a>
                </div>
                <div class="top-menu">
                    <a href="contact.html" class="<?php if($_SERVER['PHP_SELF'] === '/contact.html') {echo 'active';} else {echo '';} ?>">Contact Us</a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="cb"></div>
    </div>
</div>