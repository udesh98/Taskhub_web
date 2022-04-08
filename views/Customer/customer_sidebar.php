<?php ?>
<div class="sidebar">
    <ul>
        <li class="top"><a href="<?php echo fullURLfront; ?>/Customer/customer_serviceList" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-search"></i> Services</a></li>
        <li><a href="<?php echo fullURLfront; ?>/Customer/customer_profile" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-user"></i> Profile</a></li>
        <li><a href="<?php echo fullURLfront; ?>/Customer/customer_calender" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-calendar"></i> Booking</a></li>
        <li><a href="<?php echo fullURLfront; ?>/Customer/customer_complaint" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-frown-o"></i> Complaints</a></li>
        <li><a href="<?php echo fullURLfront; ?>/Customer/customer_history" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-history"></i> History</a></li>
        <li><a href="<?php echo fullURLfront; ?>/Customer/customer_help" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-info-circle"></i> Help</a></li>
        <li><a href="<?php echo fullURLfront; ?>/Customer/customer_viewad" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-audio-description"></i> View Advertsiment</a></li>
        <li><a href="<?php echo fullURLfront; ?>/Customer/customer_postad" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-audio-description"></i> Post Advertsiment</a></li>
        <!-- <li><a href="<?php echo fullURLfront; ?>/Customer/customer_test" class="<?php echo (empty($_SESSION['loggedin'])) ? 'disabled-link' : ''; ?>"><i class="fa fa-audio-description"></i> TEST</a></li> -->
    </ul>
</div>