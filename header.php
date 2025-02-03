<?php include 'alert.php' ?>
<header class="" data-aos="fade-down" data-aos-duration="900">
    <div class="header-div-in">
        <div class="logo-div">
            <a href="<?php echo $website_url ?>"><img src="<?php echo $website_url ?>/all-images/images/logo.png" alt="<?php echo $thename ?> Logo" class="animated zoomIn" /></a>
        </div>

        <div class="search-back-div">
            <ul>
                <li id="hidden-products-container" title="All Products">All Products <i class="bi-chevron-down"></i></li>
            </ul>

            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchStaff" onkeyup="filter('Staff')" placeholder="" title="Search Products, brands and categories" />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Search Products and categories...</div>
            </div>
        </div>

        <div class="right-container">
            <div class="account-container" id="hidden-container">
                <div class="icon-div" title="System Notification">
                    <i class="bi-person"></i>
                </div>

                <ul>
                    <li class="hidden">Account <i class="bi-chevron-down"></i></li>
                </ul> 
                
                <div class="hidden-container animated fadeIn">
                    <ul>
                        <a href="<?php echo $website_url?>" title="Login/Sign Up">
                        <li title="Login/Sign Up">Login/Sign Up </li></a>
                    </ul> 
                </div>
            </div>

            <a href="<?php echo $website_url?>/checkout/cart" title="Cart Out">
            <div class="icon-div cart_count" title="Cart Out">
                <i class="bi-cart"></i>
                <div>0</div>
            </div></a>

            <div class="icon-div mobile-icon" onclick="_open_menu()">
                <i class="bi-text-right"></i>
            </div>
        </div>
    </div>

    <div class="header-div-in mobile-header-div-in">
        <div class="text_field_container dash_field_container">
            <input class="text_field dash_text_field" type="text" id="searchStaff" onkeyup="filter('Staff')" placeholder="" title="Search Products, brands and categories" />
            <div class="placeholder dash_placeholder"><i class="bi-search"></i> Search Products and categories...</div>
        </div>
    </div>

</header>