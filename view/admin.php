<?php
session_start();

include '../classes/adminlogin.php';

$usercredentials = new adminlogin();
if (isset($_POST['signin'])) {

    $uname = $_POST['username'];
    $pasword = md5($_POST['password']);

    $ret = $usercredentials->login($uname, $pasword);
    if ($num = reset($ret)) {
        $_SESSION['uid'] = $num['id'];
        $_SESSION['fname'] = $num['FullName'];
        echo "<script>alert('Logged in Successfully.');</script>";
        echo "<script>window.location.href='admin1/car.php'</script>";
    } else {
        echo "<script>alert('Invalid details. Please try again');</script>";
        echo "<script>window.location.href='admin.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login || Admin</title>
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
                           <a class="d-block" href="../index.php" rel="home"><h4><span style="color:rgb(24, 135, 252);font-weight:bold;font-size:25px;" >Road</span>Runner</h4></a>
                        </div>

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center" style="overflow:visible;">
                            <li ><a href="../index.php">Home</a></li>
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
                                    <a class="dropdown-item px-3" href="logout.php">Logout</a>
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

            <div class="col-12">
                <div class="form-wrap shadow-lg" >
				   <div class="text-center">
                    <h2>Admin Login</h2>
				   </div>
                    <form action="" method="post" role="form"class="form ">

						<div class="form-group col-6 col-lg-6">
						 <label>Username:</label>
						 <input type="text" class="form-control " name="username" required placeholder="Username"
                          data-msg="Please enter a valid Username" />
						 <div class="validation"></div>
						</div>
						<div class="form-group col-6 col-lg-6">
						 <label>Password:</label>
						 <input type="Password" class="form-control" name="password" required placeholder="Password" data-rule="minlen:4"
							data-msg="Please enter at least 8 character of Password" />
							<div class="validation"></div>
						</div>
						<div class="text-center"><input type="submit" name="signin" value="Login" class="btn gradient-bg mt-5"></div>

                    </form>
                </div>
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
