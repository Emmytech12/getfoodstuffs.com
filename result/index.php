<?php include '../../config/constants.php'; ?>
<?php include '../../config/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../meta.php' ?>
    <title><?php echo $thename ?> | Affordable Food Delivery for Nigerian Students</title>
    <meta name="keywords" content="<?php echo $thename ?>, raw food delivery in Nigeria, student food delivery Nigeria, affordable foodstuff for Nigerian students, fresh groceries for Nigerian students, online food shopping in Nigeria, campus food delivery, hostel food delivery Nigeria, Nigerian student grocery service, cheap food delivery for students, convenient grocery delivery Nigeria, raw food delivery Lagos, student-friendly raw food service Nigeria, foodstuff delivery for hostels, Nigerian student food convenience, affordable Nigerian raw food" />
    <meta name="description" content="Get Food Stuffs delivers fresh foodstuff to Nigerian students. Convenient, affordable, and tailored for busy students. Let us handle your groceries, you focus on school!" />

    <meta property="og:title" content="<?php echo $thename ?> | Affordable Food Delivery for Nigerian Students" />
    <meta property="og:image" content="<?php echo $website_url ?>/all-images/plugin-pix/getfoodstuffs.jpg" />
    <meta property="og:description" content="Get Food Stuffs delivers fresh foodstuff to Nigerian students. Convenient, affordable, and tailored for busy students. Let us handle your groceries, you focus on school!" />

    <meta name="twitter:title" content="<?php echo $thename ?> | Affordable Food Delivery for Nigerian Students" />
    <meta name="twitter:card" content="<?php echo $thename ?>" />
    <meta name="twitter:image" content="<?php echo $website_url ?>/all-images/plugin-pix/getfoodstuffs.jpg" />
    <meta name="twitter:description" content="Get Food Stuffs delivers fresh foodstuff to Nigerian students. Convenient, affordable, and tailored for busy students. Let us handle your groceries, you focus on school!" />
</head>

<body>
    <?php include '../../header.php' ?>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="other-pages-back-div">
                    <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                        <ul>
                            <a href="<?php echo $website_url ?>">
                                <li title="Home">Home <i class="bi-caret-right-fill"></i></li>
                            </a>
                            <li class="li" title="All Products">Search Results</li>
                        </ul>
                    </div>

                    <div class="pages-back-container">
                        <div class="right-container">
                            <div class="top-container">
                                <div class="left-title">
                                    <h2>Search Results</h2>
                                </div>

                                <div class="filter-wrapper">
                                    <div class="text_field_container extension_text_field_container" id="selectContainer">
                                        <select class="text_field selectSearch" placeholder="" id="searchStatus"
                                            onclick="_selectOption('searchStatus')" style="opacity: 1;">
                                            <option selected="selected" value="">Lowest to highest price</option>
                                        </select>

                                        <div class="placeholder">Sort By:</div>
                                        <div class="searchPanel addSearchPanel animated fadeIn" id="searchPanel_searchStatus"
                                            style="display: none;">
                                            <input class="searchTxt" placeholder="Type here to search"
                                                id="txtSearchValue_searchStatus" autocomplete="off"
                                                onkeyup="filter('searchStatus')">
                                            <ul id="searchList_searchStatus" data-aos="fade-up" data-aos-duration="200"
                                                class="aos-init aos-animate">
                                                <li onclick="_clickOption('searchList_searchStatus', 'Lowest to highest price', 'Lowest to highest price')">Lowest to highest price</li>
                                                <li onclick="_clickOption('searchList_searchStatus', 'Highest to lowest price', 'Highest to lowest price')">Highest to lowest price</li>
                                                <li onclick="_clickOption('searchList_searchStatus', 'Most Popular', 'Most Popular')">Most Popular</li>
                                                <li onclick="_clickOption('searchList_searchStatus', 'A-Z', 'A-Z')">A-Z</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <div class="left-container sticky-div animated fadeIn">
                            <?php $callclass->_productCatSideLink($website_url); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../../footer.php' ?>
    </section>
</body>

</html>