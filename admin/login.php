<?php include '../config/constants.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | Administrative Login</title>
    <meta name="keywords" content="Administrative Login  - <?php echo $thename?>"/>
    <meta name="description" content="Administrative Login - <?php echo $thename?>"/>
</head>

<body>
<?php  include 'alert.php'?>
    <section class="login-session">
        <div class="login-over-lay login-blur"></div>
        <div class="center-login-div">
            <div class="login-div-in">
                <div class="header-div animated fadeIn">
                    <div class="logo-div">
                        <a href="<?php echo $website_url ?>"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
                    </div>

                    <ul>
                        <li class="active-li" id="login_id" onclick="_nextLoginPage('view_login','login_id');">Log-In</li>
                        <li id="reset_pass_id" onclick="_nextLoginPage('view_forgot_password','reset_pass_id');">Forgot Password?</li>
                        <li id="expand_li"><i class="bi-list-nested"></i>
                            <div class="expand-div animated fadeIn">
                                <ul class="ul-expand">
                                    <li id="login_id" onclick="_nextLoginPage('view_login','login_id');">Log-In</li>
                                    <li id="reset_pass_id" onclick="_nextLoginPage('view_forgot_password','reset_pass_id');">Forgot Password?</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="form-back-div">
                    <div id="login-content">
                        <?php $page='login';?>
                        <?php include 'content/page-content.php';?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'bottom-scripts.php'?>
</body>
</html>


