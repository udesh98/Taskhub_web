<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="<?php echo fullURLfront; ?>/assets/cs/common/header.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo fullURLfront; ?>/assets/cs/common/footer.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo fullURLfront; ?>/assets/cs/common/sidebar.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo fullURLfront; ?>/assets/cs/employee/employee_dashboard.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo fullURLfront; ?>/assets/cs/employee/employee_viewad.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo fullURLfront; ?>/assets/cs/employee/additional_viewad.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="page-wrapper">
<?php include_once('header.php'); ?>

<div class="row">
  <div class="column1">
    <?php include_once('views/Employee/employee_sidebar.php'); ?>
  </div>
  <div class="column2">
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search advertisement by title" name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
       
        <div class="sortinglist">
            <form action="/action_page.php" style="float: right;">
                <label for="area" style="font-family: Poppins; font-style: normal; font-size: 18px; color:#108882;">Choose the area:</label>
                <select name="area" id="area" style="background: #108882; color: white; width: 187px; height: 38px; border-radius: 5px;">
                    <option value="colombo">Colombo</option>
                    <option value="gampaha">Gampaha</option>
                    <option value="kaluthara">Kaluthara</option>
                    <option value="galle">Galle</option>
                </select>

                <label for="type" style="font-family: Poppins; font-style: normal; font-size: 18px; color: #108882; margin-left:15px;">Choose the type:</label>
                <select name="type" id="type" style="background: #108882; color: white; width: 187px; height: 38px; border-radius: 5px;">
                    <option value="manpower">Manpower Agency</option>
                    <option value="customer">Customer</option>
                    <option value="contractor">Contractor</option>
                </select>


            </form>

        </div>
        <br><br>
        
        <div class="subrow">
                <div class="subcolumn1" style="background-color: #B4E1E7;">
                    <div class ="adimage">
                        <img src="<?php echo fullURLfront; ?>/assets/images/pipe.jpg" alt="image1" width="180px" height="180px">
                    </div> 
                </div>
                <div class="subcolumn2" style="background-color: #B4E1E7;">
                    <div class="postedby">
                        <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 18px; line-height: 27px; color:#108882;">Posted By:</p>
                        <p style="font-family: Roboto; font-style: normal; font-weight: 500; font-size: 18px; line-height: 21px; color:#61687F;">Name : James</p>
                        <p style="font-family: Roboto; font-style: normal; font-weight: 500; font-size: 18px; line-height: 21px; color:#61687F;">Email : abc@gmail.com</p>
                        <p style="font-family: Roboto; font-style: normal; font-weight: 500; font-size: 18px; line-height: 21px; color:#61687F;">BID : Rs 5000</p>
                        <p style="font-family: Roboto; font-style: normal; font-weight: 500; font-size: 18px; line-height: 21px; color:#61687F;">Location : 36, Reid avenue, Colombo 3</p>
                    </div>
                </div>
                <div class="subcolumn3" style="background-color: #B4E1E7;">
                    <div class="details">
                        <p style="font-family: Poppins; font-style: normal; font-weight: 500; font-size: 18px; line-height: 27px; color:#108882;">Task Description</p>
                        <p style="color:#61687F; font-family: Roboto; font-style: normal; font-size: 18px; line-height: 21px; ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla bibendum justo condimentum, ullamcorper sapien sed, condimentum augue. Nullam non turpis vitae urna vestibulum dapibus. Duis scelerisque quis purus nec cursus.</p>
                    </div>
                </div>
            </div>

   </div>
</div>
<br>
<?php include_once('footer.php'); ?>

</div>

</body>
</html>
