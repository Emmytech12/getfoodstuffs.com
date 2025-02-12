<?php if ($page == 'login') { ?>
    <div class="form-div animated fadeIn" id="view_login" data-aos="fade-in" data-aos-duration="1600">
        <div class="top-div">
            <h1>👋 Hi Welcome Back!</h1>
            <p>Please provide your details to continue</p>
        </div>

        <div class="inner-form">
            <div class="text_field_container" id="email_container">
                <script>textField('email', 'Enter Your Email Address')</script>
            </div>

            <div class="text_field_container" id="password_container">
                <script>textField('password', 'Enter Your Password', 'password')</script>
            </div>

            <div class="forgot-pass" onclick="_next_page('reset_password_info');">Reset Your Password?</div>
            <button class="btn" id="" title="Log In" onclick="location.href='<?php echo $website_url ?>'">Log In <i class="bi-check"></i></button>
        </div>
    </div>

    <div class="form-div reset_password_info animated fadeIn" id="reset_password_info" data-aos="fade-right" data-aos-duration="1600">
        <div class="top-div">
            <h1> Reset Password</h1>
        </div>

        <div class="inner-form">
            <div class="alert alert-success login-alert">
                Kindly, provide your <span>Email Address</span> to reset your password
            </div>

            <div class="text_field_container" id="reset_email_container">
                <script>textField('reset_email', 'Enter Your Email Address')</script>
            </div>

            <button class="btn" id="" title="Proceed" onclick="_next_page('send_link_info');">Proceed <i class="bi-arrow-right"></i></button>
            <div class="forgot-pass sign-forgot-pass">Already have an account? <span onclick="_next_page('view_login');"> Log-In</span></div>
        </div>
    </div>

    <div class="form-div animated fadeIn" id="send_link_info" data-aos="fade-right" data-aos-duration="1600">
        <div class="inner-form email-inner-form">
            <div class="icon-div"><i class="bi-check2-circle"></i></div>
            <h3>Mail sent successfully</h3>
            <div class="alert alert-success email-form-alert"><i class="bi-person"></i> Dear <strong>Paul Emmanuel</strong>,
                a link has been sent to your email address (<strong>seunemmanuel107@gmail.com</strong>)
                to reset your password. Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to confirm.
            </div>

            <div class="btn-div">
                <button class="btn" type="button" id="submit_btn" title="Okay" onclick="location.href='<?php echo $website_url ?>/account/reset-password'">
                    OKAY <i class="bi-check2-all"></i>
                </button>
                <div class="notification">
                    <div id="resendCountdown">Resend in <strong id="timer">30</strong> Sec</div>
                    <div id="resendOtpBtn"><strong>MAIL</strong> not received? <span><i class="bi-send"></i> <strong> RESEND MAIL </strong></span></div>
                </div>
            </div>
        </div>
    </div>
    <script>_counDownOtp(30)</script>
<?php } ?>

<?php if ($page == 'password_reset_successful') { ?>
    <div class="successful-div animated bounceInDown">
        <div class="success-in">
            <div class="gif">
                <img src="<?php echo $website_url ?>/all-images/images/success.gif" alt="successful gif">
            </div>
            <h3>PASSWORD RESET SUCCESSFULLY</h3>
            <button class="btn" onclick="location.href='<?php echo $website_url ?>/account/login'">OKAY <i class="bi-check2-all"></i></button>
        </div>
    </div>
<?php } ?>