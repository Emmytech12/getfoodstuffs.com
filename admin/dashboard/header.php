<?php  include '../alert.php'?>
<header class="fadeInDown animated">
    <div class="header-div-in"> 
        <div class="logo-div"><img src="<?php echo $website_url?>/all-images/images/logo.png" alt="<?php echo $thename?> logo" /></div>

        <div class="header-nav-div">
            <div class="left-nav">
                <ul>
                    <li class="active-li" title="Dashboard" onclick="_getPage('dashboard','dashboard', '')" id="top-dashboard"><i class="bi-speedometer2"></i> Dashboard</li>
                    <li title="My Profile"><i class="bi-person"></i> My Profile</li>
                    <li title="Prospective Staff"><i class="bi-people-fill"></i> Prospective Staff <div class="num" id="">3</div></li>
                    <li title="Pending Orders"><i class="bi-basket"></i> Pending Orders <div class="num" id="">10</div></li>
                </ul> 
            </div>

            <div class="right-nav">
                <div class="right-icon-div left-icon-div">
                    <div class="icon-div" onClick="_getPage('settings', 'settings', '');" title="System Settings">
                        <i class="bi-gear"></i>
                    </div>
                    <div class="icon-div bell_notification" onClick="_get_page('system_alert');" title="System Alert">
                        <i class="bi-bell"></i>
                        <div>20</div>
                    </div>
                </div>

                <div class="right-icon-div no-border" title="Click To View Profile" onclick="_toggle_profile_pix_div()">
                    <div class="profile-div">
                        <div class="info-div">
                            <div class="name"><strong>Hon Paul Emmanuel</strong></div>
                            <div class="role">SUPER ADMIN</div>
                        </div>
                        <div class="img-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="<?php echo $thename?>" /></div>
                    </div>
                </div>

                <div class="toggle-profile-div">
                    <div class="toggle-div-in">
                        <div class="toggle-profile-pix-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="<?php echo $thename?>"/></div>
                        <div class="header-content">
                            <div class="toggle-profile-name"><span>Hon Paul Emmanuel</span></div>
                            <div class="toggle-profile-others">User ID: <span>STF0012029210002</span></div>
                            <div class="toggle-profile-others">Phone: <span>090818392647</span></div>
                            <div class="btn-div">
                                <button class="btn" title="View Profile" type="button" onclick="_getFormWithId('my_profile','<?php echo $login_staff_id?>');"><i class="bi-person"></i> Profile</button>
                                <button class="btn" title="Log-Out" type="button" onclick="_getForm('logout_confirm_form');"><i class="bi-box-arrow-in-right"></i> Log-Out</button>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
