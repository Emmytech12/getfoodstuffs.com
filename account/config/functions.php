<?php
class allClass{
		
function _loginSidePanel(){?>
	<div class="graphics-div"></div>
<?php }

function _userSideLink($website_url,$website_auto_url){?>
	<div class="cat-list-wrapper">
		<div class="div-in-container">
			<div class="title"><h3>USER LINK</h3></div>
			<ul>
				<a href="<?php echo $website_url?>/account/dashboard" title="Dashboard">
				<li class="<?php if (strstr($website_auto_url, "$website_url/account/dashboard")) {?> active-li <?php }?>" title="Dashboard"><i class="bi-speedometer2"></i> Dashboard</li></a>
				<a href="<?php echo $website_url?>/account/order-history" title="Order History">
				<li class="<?php if (strstr($website_auto_url, "$website_url/account/order-history")) {?> active-li <?php }?>" title="Order History"><i class="bi-clock"></i> Order History</li></a>
				<a href="<?php echo $website_url?>/account/wallet" title="Wallet History">
				<li class="<?php if (strstr($website_auto_url, "$website_url/account/wallet")) {?> active-li <?php }?>" title="Wallet History"><i class="bi-credit-card"></i> Wallet History</li></a>
				<a href="<?php echo $website_url?>/account/notifications" title="Notifications">
				<li class="<?php if (strstr($website_auto_url, "$website_url/account/notifications")) {?> active-li <?php }?>" title="Notifications"><i class="bi-bell"></i> Notifications</li></a>
				<a href="<?php echo $website_url?>/all-products" title="Shop Now">
				<li title="Shop Now"><i class="bi-cart"></i> Shop Now</li></a>
				<li title="Change Password" onclick="_getFormWithId('change_password');"><i class="bi-lock"></i> Change Password</li>
				<li title="Log Out" onclick="_getForm('logout_confirm_form');"><i class="bi-box-arrow-right"></i> Log Out</li>
			</ul>
		</div>
	</div>
<?php }

}//end of class
$callclass=new allClass();
?>
