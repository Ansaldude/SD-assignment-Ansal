<?php
session_start();
require_once '../../classes/feedback.php';

if (isset($_GET['del'])) {

    $id = $_GET['del'];
    $deletedata = new feedback1();
    $sql = $deletedata->deletefeedback($id);
    if ($sql) {

        echo "<script>alert('Record deleted successfully');</script>";
        echo "<script>window.location.href='feedback.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | View car</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>


  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">



                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../admin.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/user.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><a class="logout" href="javascript:;"><?=$_SESSION['fname']?></a></h5>
                    <li class="sub-menu">
                      <a href="car.php" >
                          <i class="fa fa-plane"></i>
                          <span>Add car</span>
                      </a>

                  </li>
                  <li class="sub-menu">
                      <a href="viewcar.php">
                          <i class="fa fa-table"></i>
                          <span>car details</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="book.php" >
                          <i class="fa fa-file"></i>
                          <span>Booking details</span>
                      </a>

                  </li>
                  <li class="sub-menu">
                      <a href="feedback.php" >
                          <i class="fa fa-comments"></i>
                          <span>Feedback</span>
                      </a>

                  </li>


              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3>   </h3>
				<div class="row">



                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
						   <style>
						tbody{color:black}
						</style>
	                  	  	  <h4><i class="fa fa-angle-right"></i> All Feedback Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>

                              <th>SN</th>
							<th>Name</th>
							<th>Email</th>
                            <th>Date</th>
							<th>Message</th>
							<th>ACTION</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php
$fetchdata = new feedback1();
$sql = $fetchdata->fetchdata();
$cnt = 1;
while ($row = mysqli_fetch_array($sql)) {
    ?>        		<tr>
  <td><?php echo htmlentities($cnt); ?></td>
  <td><?php echo htmlentities($row['name']); ?></td>
  <td><?php echo htmlentities($row['email']); ?></td>
  <td><?php echo htmlentities($row['date']); ?></td>
  <td><?php echo htmlentities($row['comment']); ?></td>
  <td>
          <a href="feedback.php?del=<?php echo htmlentities($row['fid']); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');" >Delete</a>
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
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
