<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | User Login</title>
    <meta name="keywords" content="User Login - <?php echo $thename?>"/>
    <meta name="description" content="User Login <?php echo $thename?>"/>
</head>

<body>
    <?php include 'alert.php'?>
    <section class="login-session">
        <div class="login-div">
            <header>
                <div class="header-div-in"> 
                    <a href="<?php echo $website_url?>"><div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> logo" /></div></a>

                    <ul>                          
                        <li class="li">Don't have an account?</li>
                        <a href="<?php echo $website_url?>/account/signup" title="Sign Up">
                            <li>Sign Up</li>
                        </a> 
                    </ul>
                </div>
            </header>

            <div class="form-back-div" data-aos="fade-in" data-aos-duration="1200">
                <?php $page='login';?>
                <?php include 'content/page-content.php';?>
            </div>
        </div>
        <?php $callclass-> _loginSidePanel();?>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>
</html>


