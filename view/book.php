<?php
session_start();
require_once '../classes/book.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/elegant-fonts.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <header class="site-header">
    <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">roadrunner@gmail.com</a>
                        </div>

                        <div class="header-bar-text">
                            <p>PHONE: <span>+61643654756 / +6198464655</span></p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <div class="donate-btn">
                    <a href="register.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.php" rel="home"><h4><span style="color:rgb(24, 135, 252);font-weight:bold;font-size:25px;" >Road</span>Runner</h4></a>
                        </div>

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center" style="overflow:visible;">
                                  <li><a href="../index.php">Home</a></li>
                                <li><a href="../about.php">About us</a></li>
                                <li><a href="viewcar.php">Car Schedule</a></li>
                                <li><a href="../contact.php">Contact Us</a></li>
                                <li>
                                <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?=isset($_SESSION['funame']) ? $_SESSION['funame'] : 'Login'?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if (!isset($_SESSION['funame'])): ?>
                                    <a class="dropdown-item px-3" href="admin.php">Login Admin</a>
                                    <a class="dropdown-item px-3" href="loginuser.php">Login User</a>
                                    <?php else: ?>
                                    <a class="dropdown-item px-3" href="book.php">Order History</a>
                                    <a class="dropdown-item px-3" href="../logout.php">Logout</a>
                                    <?php endif;?>
                                </div>
                                </div>
                                </li>

                             
                            </ul>
                        </nav>

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <div class="row">
          <div class="col-md-12">
          <h2>Order History</h2>
          <table class="table table-bordered table-striped table-hover">
					<thead class="thead-dark">
						<tr>

							<th>SN</th>
							<th>Car Type</th>
							<th>Fare</th>                          
						
							<th>Time</th>
							<th>Date</th>
							<th>Cancel</th>

					</thead>

					<style>
						tbody{color:black}
						</style>
					<tbody>
					<?php
$fetchdata = new book();
$sql = $fetchdata->fetchdata();
$cnt = 1;
while ($row = mysqli_fetch_array($sql)) {
    ?>        		<tr>
  <td><?php echo htmlentities($cnt); ?></td>
  

  <td><?php echo htmlentities($row['car_type']); ?></td>
  <td><?php echo htmlentities($row['fare']); ?></td>
  <td><?php echo htmlentities($row['time']); ?></td>
  <td><?php echo htmlentities($row['date']); ?></td>
  <td>
  <a href="book.php?del=<?php echo htmlentities($row['carid']); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');" >Delete</a>
     
   </td>
  </tr>
  <?php

    $cnt++;
}?>




					</tbody>

				</table>

         </div>

         </div>
            </div>
            <script type='text/javascript' src='../js/jquery.js'></script>
    <script type='text/javascript' src='../js/bootstrap.min.js'></script>
    <script type='text/javascript' src='../js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='../js/swiper.min.js'></script>
    <script type='text/javascript' src='../js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='../js/circle-progress.min.js'></script>
    <script type='text/javascript' src='../js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='../js/jquery.barfiller.js'></script>
    <!-- <script type='text/javascript' src='js/custom.js'></script> -->

    <script>
        $(function() {
            // $('.dropdown-toggle').on('click', function($) {
            //     alert('eyea')
            // });
        });
    </script>

    </body>
</html>