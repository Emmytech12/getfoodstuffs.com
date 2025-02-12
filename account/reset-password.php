<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php include 'meta.php'?>
    <title><?php echo $thename?> | User Reset Password</title>
    <meta name="keywords" content="User Reset Password - <?php echo $thename?>" />
    <meta name="description" content="User Reset Password <?php echo $thename?>"/>
</head>

<body>
    <?php include 'alert.php'?>
    <section class="login-session">
        <div class="login-div">
            <header>
                <div class="header-div-in"> 
                    <a href="<?php echo $website_url?>"><div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> logo" /></div></a>  
                    <ul>                          
                        <li class="li">Already have an account?</li>
                        <a href="<?php echo $website_url?>/account/login" title="Login">
                            <li>Login</li>
                        </a> 
                    </ul>
                </div>
            </header>

            <div class="form-back-div" data-aos="fade-in" data-aos-duration="1200">
                <div class="form-div">
                    <div class="top-div">
                        <h1>Complete Reset Password!</h1>
                    </div>

                    <div class="inner-form">
                        <div class="alert alert-success email-form-alert">
                            Kindly, Provide new password to reset your password
                        </div>
                    
                        <div class="text_field_container" id="password_container">
                            <script>textField('password', 'Create New Password', 'password')</script>
                        </div>
                        
                        <div class="text_field_container" id="confirm_password_container">
                            <script>textField('confirm_password', 'Confirm New Password', 'password')</script>
                        </div>

                        <div class="pswd_info"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>
                        <button class="btn" id="" title="Reset Password" onclick="_passwordResetSuccesful('password_reset_successful');">Reset Password <i class="bi-check"></i></button>
                    </div>  
                </div>
            </div>
        </div>
        <?php $callclass-> _loginSidePanel();?>
    </section>

    <?php include 'bottom-scripts.php'?>
</body>
</html>


