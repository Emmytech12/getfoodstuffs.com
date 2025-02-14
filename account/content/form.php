<?php if ($page=='otp_form'){?>
    <div class="caption-div animated zoomIn">
        <div class="title-div">
           <div class="title"><i class="bi-person-fill-lock"></i> OTP AUTHENTICATION</div>
           <button class="close-btn" onclick="_alertClose()" title="Close"><i class="bi-x-lg"></i></button>
        </div>

        <div class="div-in animated fadeIn">
            <div class="alert alert-success email-form-alert"> <i class="bi-person"></i> Hi, an <span>OTP</span> has been sent to your email address (<span id="useremail">seunemmanuel107@gmail.com</span>) to login. Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to confirm.</div>
            <div class="text_field_back_container"> 
                <div class="text_field_container">
                    <input class="text_field" type="number" id="otp" placeholder="" onkeypress="isNumber_Check(event)"/>
                    <div class="placeholder">Enter OTP:</div>
                </div> 
            </div> 
            <button class="btn" type="button" id="submit_btn"  title="Proceed" onclick="location.href='<?php echo $website_url?>/account/dashboard'"><i class="bi-check"></i> PROCEED </button>
            <div id="resendCountdown">Resend in <strong id="timer">30</strong> Sec</div>
            <div id="resendOtpBtn" onclick="_confirmLoginEmail();"><strong>Resend OTP</strong></div>
        </div>
    </div>
    <script>_counDownOtp(30)</script>
<?php } ?>

<?php if ($page == 'alert_read') { ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-bell"></i> NOTIFICATIONS DETAILS</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div class="alert alert-success form-alert">
                    <div class="alert-list-div">
                        <div class="alert-list">
                            <div>User ID:</div>
                            <div><span id="read_user_id">BM20230903070018014</span></div>
                        </div>
                        <div class="alert-list">
                            <div>Action Performed By:</div>
                            <div><span id="user_name">Emmanuel Paul</span></div>
                        </div>
                        <div class="alert-list">
                            <div>IP Address Used:</div>
                            <div><span id="ip_address">::1</span></div>
                        </div>
                        <div class="alert-list">
                            <div>Computer Used:</div>
                            <div><span id="system_name">DESKTOP-GFL284C</span></div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-success form-alert">
                    <div class="alert-list-div">
                        <div class="alert-list">
                            <div>Alert ID:</div>
                            <div><span id="alert_id">ALT4954</span></div>
                        </div>
                        <div class="alert-list">
                            <div>Date:</div>
                            <div><span id="created_time">2025-02-13 09:15:38</span></div>
                        </div>
                    </div>
                </div>

                <div class="title">Alert Details:</div>
                <div class="alert alert-success form-alert">
                    <div class="alert-details" id="alert_detail">Success Alert: A customer with whose name is EMMANUEL PAUL have cancelled a transaction to fund his/her wallet with the sum of NGN5000. TRANS ID: TRC23220250213 --- REF:</div>
                </div>
                <div class="btn-div">
                    <button class="btn" onclick="_alertClose();"> <i class="bi-check"></i> OK </button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'change_password') { ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-shield-lock"></i> CHANGE PASSWORD</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div class="alert alert-success form-alert">Enter the <span>OLD PASSWORD</span> and create <span>NEW PASSWORD</span></div>

                <div class="text_field_container" id="old_password_container">
                    <script>textField('old_password', 'Enter Your Old Password', 'password')</script>
                </div>

                <div class="text_field_container" id="new_password_container">
                    <script>textField('new_password', 'Create New Password', 'password')</script>
                </div>

                <div class="text_field_container" id="confirm_password_container">
                    <script>textField('confirm_password', 'Confirm New Password', 'password')</script>
                </div>

                <div class="pswd_info" style="color:#8c8d8d"><em>At least 8 charaters required including upper & lower cases and special characters and numbers.</em></div>
               
                <div class="btn-div">
                    <button class="btn" id="submit_btn" title="SAVE CHANGES" onclick=""> <i class="bi-floppy"></i> SAVE CHANGES </button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'logout_confirm_form') { ?>
    <div class="caption-success-div animated zoomIn">
        <div class="div-in">
            <div class="img"><img src="<?php echo $website_url?>/all-images/images/warning.gif"/></div>
            <h2>Are you sure to log-out?</h2>
            Please, confirm your log-out action.
            <div class="btn-div">
                <button class="btn" onclick="location.href='<?php echo $website_url?>/account/login'">YES</button>
                <button class="btn no-btn" onclick="_alertClose();">NO</button>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page == 'update_user_form') { ?>
    <div class="slide-form-div animated fadeInRight">
        <div class="title-panel-div">
            <div class="inner-top">
                <span id="panel-title"><i class="bi-person"></i> EDIT PERSONAL INFORMATION</span>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="container-back-div">
            <div class="inner-container">
                <div class="alert alert-success form-alert">
                    <div class="alert-list-div">
                        <div class="alert-list">
                            <div>User ID:</div>
                            <div><span id="read_user_id">BM20230903070018014</span></div>
                        </div>
                        <div class="alert-list">
                            <div>Last Login Date:</div>
                            <div><span id="user_name">2025-02-13 08:41:53</span></div>
                        </div>
                    </div>
                </div>

                <div class="title">UPLOAD PROFILE PICTURE: <i>(JPG, PNG, WEBP, JPEG FORMAT ONLY)</i> <span>*</span></div>
                <label>
                    <div class="pix-div">
                        <img id="profile_preview_pix" src="<?php echo $website_url ?>/all-images/images/passport.jpg" alt="Default Image">
                        <input type="file" id="reg_thumbnail" style="display:none" accept=".jpg, .jpeg, .png, .gif, .bmp, .tiff, .webp, .svg, .avif" onchange="profilePixPreview.UpdatePreview(this);" />
                    </div>
                </label>

                <div class="text_field_container" id="full_name_container">
                    <script>textField('full_name', 'Full Name')</script>
                </div>

                <div class="text_field_container" id="phone_number_container">
                    <script>textField('phone_number', 'Phone Number', 'tel')</script>
                </div>

                <div class="text_field_container" id="email_container">
                    <script>textField('email', 'Email Address', 'email')</script>
                </div>

                <div class="text_field_container" id="home_address_container">
                    <script>textField('home_address', 'Home Address')</script>
                </div>

                <div class="btn-div">
                    <button class="btn" id="submit_btn" title="SAVE CHANGES" onclick=""> <i class="bi-floppy"></i> SAVE CHANGES </button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($page=='load_user_wallet'){?>
    <div class="caption-div animated zoomIn">
        <div class="title-div">
           <div class="title"><i class="bi-credit-card"></i> LOAD WALLET</div>
           <button class="close-btn" onclick="_alertClose()" title="Close"><i class="bi-x-lg"></i></button>
        </div>

        <div class="div-in animated fadeIn">
            <div class="alert alert-success email-form-alert"> <i class="bi-person"></i> Hi, <span>HON. EMMANUEL PAUL</span>, Kindly enter the amount to load your wallet.</div>
            <div class="text_field_back_container"> 
                <div class="text_field_container">
                    <input class="text_field" type="number" id="otp" placeholder="" onkeypress="isNumber_Check(event)"/>
                    <div class="placeholder">Enter Amount (NGN):</div>
                </div> 
            </div> 
            <button class="btn" type="button" id="submit_btn"  title="Proceed" onclick="_proceedToLogin('<?php echo $email ?>');"><i class="bi-credit-card"></i> LOAD WALLET </button>
        </div>
    </div>
<?php } ?>



<?php if ($page=='get_order_items'){?>
    <div class="caption-panel-div animated fadeInUp">
        <div class="top-panel-div">
            <div class="inner-top">
                <h3><i class="bi-cart"></i> ORDER DETAILS</h3>
                <div class="close" title="Close" onclick="_alertClose();">X</div>
            </div>
        </div>

        <div class="caption-content-div">
            <div class="inner-content">
                <div class="left-container">
                    <div class="cart-list-wrapper">
                        <div class="cart-list-div">
                            <div class="inner-cart">
                                <div class="top-div">
                                    <div class="title"><h3>Item 1</h3></div>                               
                                </div>

                                <div class="cart-detail-back-div">
                                    <div class="cart-image">
                                        <img src="<?php echo $website_url ?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                    </div>

                                    <div class="cart-detail-div">
                                        <div class="details-list">
                                            <div>Product Name</div>
                                            <h4>Edible Oil (5l Palm Oil + Keg)</h4>
                                        </div>

                                        <div class="details-list">
                                            <div>Price Per Unit</div>
                                            <h4>₦6,825.00</h4>
                                        </div>

                                        <div class="details-list quantity-div">
                                            Qty:<span>1</span>@<h3><span>₦6,825.00</span></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="cart-list-div">
                            <div class="inner-cart">
                                <div class="top-div">
                                    <div class="title"><h3>Item 2</h3></div>                              
                                </div>

                                <div class="cart-detail-back-div">
                                    <div class="cart-image">
                                        <img src="<?php echo $website_url ?>/all-images/products-pix/combo_pix.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                    </div>

                                    <div class="cart-detail-div">
                                        <div class="details-list">
                                            <div>Combo Name</div>
                                            <h4>Stock Me Up-Family Kitchen</h4>
                                        </div>

                                        <div class="details-list">
                                            <div>Price Per Unit</div>
                                            <h4>₦120,000.00</h4>
                                        </div>

                                        <div class="details-list quantity-div">
                                            Qty:<span>1</span>@<h3><span>₦120,000.00</span></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="cart-list-div">
                            <div class="inner-cart">
                                <div class="top-div">
                                    <div class="title"><h3>Item 3</h3></div>                              
                                </div>

                                <div class="cart-detail-back-div">
                                    <div class="cart-image">
                                        <img src="<?php echo $website_url ?>/all-images/products-pix/golden-pasta.png" alt="<?php echo $thename ?> PALM OIL" />
                                    </div>

                                    <div class="cart-detail-div">
                                        <div class="details-list">
                                            <div>Product Name</div>
                                            <h4>Pasta & Packaged Foods (golden Penny Spaghetti (fat) 500g X 20)</h4>
                                        </div>

                                        <div class="details-list">
                                            <div>Price Per Unit</div>
                                            <h4>₦23,825.00</h4>
                                        </div>

                                        <div class="details-list quantity-div">
                                            Qty:<span>1</span>@<h3><span>₦23,825.00</span></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="right-container">
                    <div class="inner-div">
                        <div class="alert alert-success cart-alert">
                            <span>CUSTOMER DETAILS:</span>
                            
                            <div class="alert-list-div">
                                <div class="alert-list">
                                    <div>Customer Name:</div>
                                    <div><span id="">HON. EMMANUEL PAUL</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Email:</div>
                                    <div><span id="">seunemmanuel107@gmail.com</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Phone Number:</div>
                                    <div><span id="">07050903886</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-success cart-alert">
                            <span>ORDER DETAILS:</span>
                            
                            <div class="alert-list-div">
                                <div class="alert-list">
                                    <div>Order ID:</div>
                                    <div><span id="">SHOP11976120241116023310</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Selected Items:</div>
                                    <div><span id="">3</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Sub Total:</div>
                                    <div><span id="">NGN 5,880.00</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Order Status:</div>
                                    <div><span id="">READY</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-success cart-alert">
                            <span>LOGISTIC DETAILS:</span>
                            
                            <div class="alert-list-div">
                                <div class="alert-list">
                                    <div>Logistic Type:</div>
                                    <div><span id="">PICK-UP</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Delivery Fee:</div>
                                    <div><span id="">NGN 0.00</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Delivery Area:</div>
                                    <div><span id=""></span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Address:</div>
                                    <div><span id=""></span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Delivery OTP:</div>
                                    <div><span id="">815515</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="alert alert-success cart-alert">
                            <span>PAYMENT DETAILS:</span>
                            
                            <div class="alert-list-div">
                                <div class="alert-list">
                                    <div>Transaction ID:</div>
                                    <div><span id="">TRC22520241116</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Total Amount:</div>
                                    <div><span id="">NGN 5,880.00</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Payment Method:</div>
                                    <div><span id="">DEBIT/CREDIT CARD</span></div>
                                </div>
                                <div class="alert-list">
                                    <div>Payment Status:</div>
                                    <div><span id="">SUCCESS</span></div>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
        </div>    
    </div> 
<?php } ?>