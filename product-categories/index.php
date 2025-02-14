<?php include '../config/constants.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $thename ?> | Product Categories</title>
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
    <?php include '../header.php'?>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="other-pages-back-div">
                    <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                        <ul>
                            <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                            <li class="li" title="All Product Categories">All Product Categories</li>				
                        </ul>
                    </div>
                    
                    <div class="pages-back-container">           
                        <div class="right-container">
                            <div class="top-container product-cat-top-container">
                                <div class="left-title">
                                    <h2>Product Categories</h2>
                                </div>

                                <div class="filter-wrapper product-cat-wrapper">
                                    <div class="text_field_container dash_field_container">
                                        <input class="text_field dash_text_field" type="text" id="searchProductCat" onkeyup="filters('ProductCat')" placeholder="" title="Search Products category..." />
                                        <div class="placeholder dash_placeholder"><i class="bi-search"></i> Search Products category...</div>
                                    </div>
                                </div>
                            </div>

                            <div class="list-back-div" id="fetchAllProductCat" data-aos="fade-up" data-aos-duration="1200">
                                <a href="<?php echo $website_url?>/product-categories/edible-oil" title="Edible Oil">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/edible_oil.jpeg" alt="<?php echo $thename ?> Slide Image" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Edible Oil</h3>
                                    </div>
                                </div></a>

                                <a href="<?php echo $website_url?>/product-categories/tubers" title="Tubers">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/tubbers.jpeg" alt="<?php echo $thename ?> Slide Image" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Tubers</h3>
                                    </div>
                                </div></a>

                                <a href="<?php echo $website_url?>" title="Veggies">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/veggies.jpeg" alt="<?php echo $thename ?> Slide Image" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Veggies</h3>
                                    </div>
                                </div></a>

                                <a href="<?php echo $website_url?>" title="Grains & Seeds">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/grain&seed.jpeg" alt="<?php echo $thename ?> Slide Image" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Grains & Seeds</h3>
                                    </div>
                                </div></a>

                                <a href="<?php echo $website_url?>" title="Drinks & Beverages">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/drink_and_beverages.jpeg" alt="<?php echo $thename ?> Slide Image" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Drinks & Beverages</h3>
                                    </div>
                                </div></a>

                                <a href="<?php echo $website_url?>" title="Seasonings & Spices">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/seasonongs.jpeg" alt="<?php echo $thename ?> Slide Image" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Seasonings & Spices</h3>
                                    </div>
                                </div></a>

                                <a href="<?php echo $website_url?>" title="Frozen Foods">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/frozen_food.jpeg" alt="<?php echo $thename ?> Frozen Foods" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Frozen Foods</h3>
                                    </div>
                                </div></a>

                                <a href="<?php echo $website_url?>" title="Pasta And Packaged Foods">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/pasta_package_foods.jpeg" alt="<?php echo $thename ?> Pasta And Packaged Foods" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Pasta And Packaged Foods</h3>
                                    </div>
                                </div></a>

                                
                                <a href="<?php echo $website_url?>" title="Fresh Meat & Livestock">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/fresh_meat.jpeg" alt="<?php echo $thename ?> Fresh Meat & Livestock" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Fresh Meat & Livestock</h3>
                                    </div>
                                </div></a>
                        
                                <a href="<?php echo $website_url?>" title="Bulk/Wholesales Market">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/bulk_wholesales.jpeg" alt="<?php echo $thename ?> Bulk/Wholesales Market" />
                                    </div>

                                    <div class="text-div">
                                        <h3>Bulk/Wholesales Market</h3>
                                    </div>
                                </div></a>
                                
                                <a href="<?php echo $website_url?>" title="Hampers">
                                <div class="list-div">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url ?>/all-images/product-categories/hampers.png" alt="<?php echo $thename ?> Hampers"/>
                                    </div>

                                    <div class="text-div">
                                        <h3>Hampers</h3>
                                    </div>
                                </div></a>
                            </div>
                        </div>

                        <div class="left-container sticky-div animated fadeIn">
                            <div class="cat-list-wrapper">
                                <div class="div-in-container">
                                    <div class="title"><h3>CATEGORIES</h3></div>
                                    <ul>
                                        <a href="<?php echo $website_url?>/product-categories/edible-oil" title="Edible Oil">
                                        <li title="Edible Oil">Edible Oil</li></a>
                                        <a href="<?php echo $website_url?>/product-categories/tubers" title="Tubers">
                                        <li title="Tubers">Tubers</li></a>
                                        <li title="Veggies">Veggies</li>
                                        <li title="Grains & Seeds">Grains & Seeds</li>
                                        <li title="Drinks & Beverages">Drinks & Beverages</li>
                                        <li title="Seasonings & Spices">Seasonings & Spices</li>
                                        <li title="Frozen Foods">Frozen Foods</li>
                                        <li title="Pasta And Packaged Foods">Pasta And Packaged Foods</li>
                                        <li title="Fresh Meat & Livestock">Fresh Meat & Livestock</li>
                                        <li title="Bulk/Wholesales Market">Bulk/Wholesales Market</li>
                                        <li title="Hampers">Hampers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../footer.php' ?>
    </section>

</body>

</html>