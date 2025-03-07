<?php include '../config/constants.php';?>
<?php include '../config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../meta.php' ?>
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
    <?php include '../header.php'?>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="other-pages-back-div">
                    <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                        <ul>
                            <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                            <li class="li" title="All Products">All Products</li>				
                        </ul>
                    </div>
                    
                    <div class="pages-back-container">           
                        <div class="right-container">
                            <div class="top-container">
                                <div class="left-title">
                                    <h2>All Products</h2>
                                </div>

                                <div class="search-wrapper">
                                    <div class="text_field_container dash_field_container">
                                        <input class="text_field dash_text_field" type="text" id="searchProducts" onkeyup="filters('Products')" placeholder="" title="Search Products category..." />
                                        <div class="placeholder dash_placeholder"><i class="bi-search"></i> Search Products e.g, semo, rice.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-wrapper main-product-wrapper" id="fetchAllProducts" data-aos="fade-in" data-aos-duration="1200">
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> 5L PALM OIL + KEG" />
                                        </div>

                                        <div class="text-container" title="5L PALM OIL + KEG">
                                            <span>Edible Oil</span>
                                            <h2>5L PALM OIL + KEG</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(12)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦6,825.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart" onclick="_getFormWithId('cart_form');"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>/all-products/5l-palm-oil-keg" title="5L PALM OIL + KEG">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/terra.jpg" alt="<?php echo $thename ?> GOLDEN TERRA" />
                                        </div>

                                        <div class="text-container" title="GOLDEN TERRA SOYA OIL 4.5L">
                                            <span>EBIBLE OIL</span>
                                            <h2>GOLDEN TERRA SOYA OIL 4.5L</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(8)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦23,500.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="PALM OIL 2.5L">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/devon.jpg" alt="<?php echo $thename ?> DEVON KINGS" />
                                        </div>

                                        <div class="text-container" title="DEVON KINGS VEG. OIL 25L">
                                            <span>Edible Oil</span>
                                            <h2>DEVON KINGS VEG. OIL 25L</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(5)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦108,100.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="PALM OIL 2.5L">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/yam-medium.png" alt="<?php echo $thename ?> YAM - MEDIUM SIZE" />
                                        </div>

                                        <div class="text-container" title="YAM - MEDIUM SIZE ( 3 PIECES)">
                                            <span>Tubers</span>
                                            <h2>YAM - MEDIUM SIZE ( 3 PIECES)</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(12)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦10,000.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="PALM OIL 2.5L">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/yam-big1.png" alt="<?php echo $thename ?> >YAM - BIG SIZE" />
                                        </div>

                                        <div class="text-container" title="YAM - BIG SIZE (3 PIECES)">
                                            <span>Tubers</span>
                                            <h2>YAM - BIG SIZE (3 PIECES)</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(8)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦13,000.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="PALM OIL 2.5L">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/yam-medium2.png" alt="<?php echo $thename ?> YAM - MEDIUM SIZE" />
                                        </div>

                                        <div class="text-container" title="YAM - MEDIUM SIZE (1 PIECE)">
                                            <span>Tubers</span>
                                            <h2>YAM - MEDIUM SIZE (1 PIECE)</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(5)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦3,500.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="PALM OIL 2.5L">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/gino.jpg" alt="<?php echo $thename ?> DEVON KINGS" />
                                        </div>

                                        <div class="text-container" title="GINO PEPPER & ONION SACHET X 50">
                                            <span>Seasonings & Spices</span>
                                            <h2>GINO PEPPER & ONION SACHET X 50</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(5)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦11,100.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="GINO PEPPER & ONION SACHET X 50">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/milo.webp" alt="<?php echo $thename ?> DEVON KINGS" />
                                        </div>

                                        <div class="text-container" title="NESTLE MILO SACHET (3 IN 1) 30G X 10">
                                            <span>Drinks & Beverages</span>
                                            <h2>NESTLE MILO SACHET (3 IN 1) 30G X 10</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(5)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦3,100.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="NESTLE MILO SACHET (3 IN 1) 30G X 10">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/titus.jpg" alt="<?php echo $thename ?> DEVON KINGS" />
                                        </div>

                                        <div class="text-container" title="FROZEN TITUS - 1KG">
                                            <span>Frozen Foods</span>
                                            <h2>FROZEN TITUS - 1KG</h2>

                                            <div class="rate-div">
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <i class="bi-star-fill"></i>
                                                <span>(5)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦6,500.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="FROZEN TITUS - 1KG">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>

                            <div class="bottom-pagination-wrapper">
                                <div class="pagination-controls">
                                    <button id="prev-btn" title="Previous" class="btn" disabled>Previous</button>
                                    <div class="text_field_container select_text_field_container" id="selectContainer">
                                        <select class="text_field selectSearch" id="">
                                            <option value="5" selected>5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>   
                                    </div>
                                    <button id="next-btn" title="Next" class="btn">Next</button>
                                </div>          
                            </div>
                        </div>

                        <div class="left-container sticky-div animated fadeIn">
                            <?php $callclass-> _productCatSideLink($website_url);?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../footer.php' ?>
    </section>
</body>
</html>