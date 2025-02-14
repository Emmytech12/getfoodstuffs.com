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
            <button class="btn" id="" title="Log In" onclick="location.href='<?php echo $website_url?>/account/dashboard'">Log In <i class="bi-check"></i></button>
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




<?php if ($page == 'user_dashboard') { ?>
    <div class="dashboard-list-div">
        <div class="inner-div">
            <div class="top-div">
                <div class="title"><h3>USER PROFILE</h3></div>
                <div class="btn-div">
                    <button class="btn" title="Edit Profile" onclick="_getForm('update_user_form');"><i class="bi-pencil-square"></i> Edit</button>
                    <button class="btn delete-btn" title="Log Out" onclick="_getForm('logout_confirm_form');"><i class="bi-box-arrow-right"></i> Log Out</button>
                </div>
            </div>

            <div class="details-back-div">
                <div class="image-container">
                    <img src="<?php echo $website_url ?>/all-images/images/passport.jpg" alt="Profile" />
                </div>

                <div class="details-list">
                    <div>Welcome Back!</div>
                    <h3>Hon. Emmanuel Paul</h3>
                    <div>Last Login | <span>2025-02-12 17:03:46</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-list-div">
        <div class="inner-div">
            <div class="top-div">
                <div class="title"><h3>RECENT ORDER HISTORY</h3></div>
                <div class="btn-div">
                    <a href="<?php echo $website_url?>/account/order-history" title="View All Order History">
                    <button class="btn" title="View All Order History"><i class="bi-eye"></i> View All</button></a>
                </div>
            </div>

            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllHosting">
                    <thead>
                        <tr class="tb-col">
                            <th>Date</th>
                            <th>Order ID</th>
                            <th>Items</th>
                            <th>(₦)Amount</th>
                            <th>Logistics</th>
                            <th>Order Status</th>
                            <th>Payment Method</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">                                                      
                            <td>2025-02-14 17:03:46</td>
                            <td><span title="Click to view order details" onclick="_getFormWithId('get_order_items');">SHOP5964620250203090426</span></td>
                            <td>10</td>
                            <td><span>₦60,000.00</span></td>
                            <td>DELIVERY</td>                                                     
                            <td class="order-status DELIVERED">DELIVERED</td>
                            <td>DEBIT/CREDIT CARD</td>
                            <td>
                                <div class="status-div SUCCESS">SUCCESS</div>
                            </td>
                        </tr>

                        <tr class="tb-row">                                                      
                            <td>2025-02-12 17:03:46</td>
                            <td><span>SHOP5964620250203090431</span></td>
                            <td>20</td>
                            <td><span>₦120,000.00</span></td>
                            <td>PICK-UP</td>                                                     
                            <td class="order-status READY">READY</td>
                            <td>DEBIT/CREDIT CARD</td>
                            <td>
                                <div class="status-div SUCCESS">SUCCESS</div>
                            </td>
                        </tr>

                        <tr class="tb-row">                                                      
                            <td>2025-02-22 17:03:46</td>
                            <td><span>SHOP5964620250203090411</span></td>
                            <td>15</td>
                            <td><span>₦100,000.00</span></td>
                            <td>DELIVERY</td>                                                     
                            <td class="order-status PENDING">PENDING</td>
                            <td>BANK TRANSFER</td>
                            <td>
                                <div class="status-div SUCCESS">SUCCESS</div>
                            </td>
                        </tr>
                        <tr class="tb-row">                                                      
                            <td>2025-02-15 17:03:46</td>
                            <td><span>SHOP5964620250203090427</span></td>
                            <td>10</td>
                            <td><span>₦10,000.00</span></td>
                            <td>DELIVERY</td>                                                     
                            <td class="order-status READY">READY</td>
                            <td>DEBIT/CREDIT CARD</td>
                            <td>
                                <div class="status-div SUCCESS">SUCCESS</div>
                            </td>
                        </tr>

                        <tr class="tb-row">                                                      
                            <td>2025-02-11 17:03:46</td>
                            <td><span>SHOP5964620250203090478</span></td>
                            <td>12</td>
                            <td><span>₦5,000.00</span></td>
                            <td>PICK-UP</td>                                                     
                            <td class="order-status DELIVERED">DELIVERED</td>
                            <td>BANK TRANSFER</td>
                            <td>
                                <div class="status-div PENDING">PENDING</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="dashboard-list-div">
        <div class="inner-div">
            <div class="top-div">
                <div class="title"><h3>WALLET BALANCE</h3></div>
                <div class="btn-div">
                    <button class="btn" title="Load Wallet" onclick="_getForm('load_user_wallet');"><i class="bi-credit-card"></i> Load Wallet</button>
                </div>
            </div>
            
            <div class="wallet-details-wrapper">
                <div class="wallet-details">
                    <h3>NGN 640,000.00</h3>
                    <h4>TOTAL AMOUNT RECEIVED</h4>
                </div> 
                
                <div class="wallet-details">
                    <h3>NGN 466,484.92</h3>
                    <h4>TOTAL AMOUNT SPENT</h4>
                </div>  

                <div class="wallet-details border-none">
                    <h3>NGN 173,515.08</h3>
                    <h4>AVAILABLE BALANCE</h4>
                </div>  
            </div>

            <div class="top-div">
                <div class="title"><h3>WALLET ACTIVITIES</h3></div>                                         
            </div>

            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllHosting">
                    <thead>
                        <tr class="tb-col">
                            <th>Date</th>
                            <th>Trans ID</th>
                            <th>Balance Before</th>
                            <th>(₦)Amount Loaded</th>
                            <th>Balance After</th>
                            <th>Trans Type</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">                                                      
                            <td>2025-02-12 17:03:46</td>
                            <td>TRC23220250213</td>
                            <td><span>NGN 10,000.00</span></td>
                            <td>NGN 5,000.00</td>
                            <td><span>NGN 15,000.00</span></td>                                                    
                            <td>CREDIT</td>
                            <td>
                                <div class="status-div SUCCESS">SUCCESS</div>
                            </td>
                        </tr>

                        <tr class="tb-row">                                                      
                            <td>2025-02-12 17:03:46</td>
                            <td>TRC23220250233</td>
                            <td><span>NGN 0.00</span></td>
                            <td><span class="CANCELLED">NGN 5,000.00</span></td>
                            <td><span>NGN 0.00</span></td>                                                    
                            <td>CREDIT</td>
                            <td>
                                <div class="status-div CANCELLED">CANCELLED</div>
                            </td>
                        </tr>                                                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>