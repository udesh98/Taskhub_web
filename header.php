<?php 
?>
<div class="container">
    <div class="logo">
        <a href="<?php echo fullURLfront; ?>/main/index"><img src="<?php echo fullURLfront; ?>/assets/images/build.png"> &nbsp Task Hub</a>
    </div>
    <div class="navbar">
        <ul id="nav-lists">
            <li><a href="<?php echo fullURLfront; ?>/main/index">Home</a></li>
            <li><a href="<?php echo fullURLfront; ?>/Customer/customer_profile" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>">Dashboard</a></li>
            <li><a href="<?php echo fullURLfront; ?>/auth/login" class="<?php echo (!empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>">Login</a></li>
            <li><a href="<?php echo fullURLfront; ?>/main/index#about-us">About Us</a></li>
            <li><a href="<?php echo fullURLfront; ?>/main/index#contact-us">Contact Us</a></li>
        </ul>
    </div>
    <div class="user" >
        <!-- <span><i class="fa fa-user-circle-o" aria-hidden="true" ></i> <?php //echo $_SESSION['loggedin']['username']; ?></span>
        <a href="<?php //echo fullURLfront; ?>/auth/customer_register" class="logout-button <?php //echo (!empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-sign-out" aria-hidden="true"></i></a> -->

        <?php if(!empty($_SESSION['loggedin'])) {?>
        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-user-circle-o" aria-hidden="true" ></i> <?php echo $_SESSION['loggedin']['username']; ?></button>
            <div class="dropdown-content">
                <a href="<?php echo fullURLfront; ?>/auth/logout">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </div>
        </div>
        <?php } ?>  
    </div>
</div>