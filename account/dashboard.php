<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title>Dashboard - <?php echo $thename?></title>
</head>

<body>
    <?php include '../header.php'?>

	<section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="other-pages-back-div">
                    <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                        <ul>
                            <li class="li dashbaord-li" title="MY ACCOUNT">MY DASHBOARD</li>				
                        </ul>
                    </div>
                    
                    <div class="pages-back-container">           
                        <div class="right-container user-link-right-container">
                            <div class="dashboard-list-wrapper" id="get-content" data-aos="fade-in" data-aos-duration="1200">
                                <script>_getContent('user_dashboard');</script>
                            </div>
                        </div>

                        <div class="left-container sticky-div user-link-left-container animated fadeIn">
                            <?php $callclass-> _userSideLink($website_url,$website_auto_url);?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../footer.php' ?>
    </section>
</body>
</html>
