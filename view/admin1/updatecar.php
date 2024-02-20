<?php
session_start();
error_reporting(0);

require_once '../../classes/car.php';
$updatedata = new car();
if (isset($_POST['update'])) {
    // Get the userid
    $id = intval($_GET['id']);
    // Posted Values
    $fno = $_POST['car_no'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $fare = $_POST['fare'];
    $dtime = $_POST['dtime'];
    $atime = $_POST['atime'];
   

    //Function Calling
    $sql = $updatedata->updatecar($fno, $from, $to, $fare, $dtime, $atime,  $id);

    echo "<script>alert('Record Updated successfully');</script>";
    // Code for redirection
    echo "<script>window.location.href='viewcar.php'</script>";
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

    <title>Admin | Update car</title>
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
          	<h3>  </h3>
				<div class="row">
                <div class="col-lg-6 col-lg-offset-2">
          <fieldset>
          <div class="content-panel">
				   <div class="text-center">
                    <h2>Update car Details</h2>
				   </div>
           <?php
// Get the userid
$userid = intval($_GET['id']);
$onerecord = new car();
$data = $onerecord->fetchonerecord($userid);

$cnt = 1;
if ($row = reset($data)) {
    ?>

           <form action="" method="post" role="form"class="form">

                       <div class="form-group">
                <input type="text" class="form-control" name="car_no" value="<?php echo htmlentities($row['car_no']); ?>" required placeholder="car NO."
                             data-msg="Please enter a valid car number" />
                <div class="validation"></div>
               </div>
               <div class="form-group">
                <input type="text" class="form-control" name="from" value="<?php echo htmlentities($row['from1']); ?>" required placeholder="From"
                             data-msg="Please enter a valid name" />
                <div class="validation"></div>
               </div>
               <div class="form-group">
                <input type="text" class="form-control" name="to" value="<?php echo htmlentities($row['to1']); ?>" required placeholder="To"
                             data-msg="Please enter a valid Destination name" />
                <div class="validation"></div>
               </div>
			  
                           <div class="form-group">
                <input type="text" class="form-control" name="fare" value="<?php echo htmlentities($row['fare']); ?>" required placeholder="Fare"
                             data-msg="Please enter a valid Fare" />
                <div class="validation"></div>
               </div>
                           <div class="form-group">
                <input type="date" class="form-control" name="dtime" value="<?php echo htmlentities($row['departure_time']); ?>" required placeholder="Depature Time"
                             data-msg="Please enter a valid date" />
                <div class="validation"></div>
               </div>
                           <div class="form-group">
                <input type="date" class="form-control" name="atime" value="<?php echo htmlentities($row['arrival_time']); ?>" required placeholder="Arrival Time"
                             data-msg="Please enter a valid Arrival date" />
                <div class="validation"></div>
               </div>
                         
                           <?php }?>

               <div class="text-center"><input type="submit" name="update" value="Update" class="btn btn-primary"></div>

                       </form>
                      </div>
                  </div>
              </div>
		</section>
      </section></section>
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

