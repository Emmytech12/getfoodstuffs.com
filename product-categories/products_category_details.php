
<?php include '../../config/constants.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include '../../meta.php'?>
    <title><?php echo $thename?> - <?php echo $page_title?></title>
    <meta name="description" content="<?php echo $seo_description?>"/>
    <meta name="keywords" content="<?php echo $seo_keywords?>"/>

    <meta property="og:title" content="<?php echo $thename?> - <?php echo $page_title?>" />
    <meta property="og:image" content="<?php echo $website_url?>/<?php echo $page_seo_pix?>"/>
    <meta property="og:description" content="<?php echo $seo_description?>"/>

    <meta name="twitter:title" content=" <?php echo $thename?> - <?php echo $page_title?>"/>
    <meta name="twitter:card" content="<?php echo $thename?>"/>
    <meta name="twitter:image"  content="<?php echo $website_url?>/<?php echo $page_seo_pix?>"/>
    <meta name="twitter:description" content="<?php echo $seo_description?>"/>
</head>

<body>
    <?php include '../../header.php'?>

    <section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="other-pages-back-div">
                    <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                        <ul>
                            <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                            <a href="<?php echo $website_url?>/product-categories/"><li title="Product Category">Product Categories <i class="bi-caret-right-fill"></i></li></a>
                            <li class="li" title="Edible Oil">Edible Oil</li>				
                        </ul>
                    </div>
                    
                    <div class="pages-back-container">           
                        <div class="right-container">
                            <div class="top-container">
                                <div class="left-title">
                                    <h2>All Products</h2>
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

                            <div class="product-wrapper main-product-wrapper" data-aos="fade-in" data-aos-duration="1200">
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
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/devon_kings.png" alt="<?php echo $thename ?> DEVON KINGS VEG. OIL 750ML" />
                                        </div>

                                        <div class="text-container" title="DEVON KINGS VEG. OIL 750ML">
                                            <span>Edible Oil</span>
                                            <h2>DEVON KINGS VEG. OIL 750ML</h2>

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
                                                <span>₦3,600.00</span>
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
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/palm_oil_5l.webp" alt="<?php echo $thename ?> 5L PALM OIL + KEG" />
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
                                                <span>(8)</span>
                                            </div>

                                            <div class="price-div">
                                                Price
                                                <span>₦12,000.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="5L PALM OIL + KEG">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="product-container main-product-conatiner">
                                    <div class="div-in">
                                        <div class="image-container">
                                            <img src="<?php echo $website_url ?>/all-images/products-pix/mamador.jpg" alt="<?php echo $thename ?> MAMADOR VEG. OIL CARTON 1.5LX 6" />
                                        </div>

                                        <div class="text-container" title="MAMADOR VEG. OIL CARTON 1.5LX 6">
                                            <span>Tubers</span>
                                            <h2>MAMADOR VEG. OIL CARTON 1.5LX 6</h2>

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
                                                <span>₦40,500.00</span>
                                            </div>

                                            <div class="btn-div">
                                                <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                <a href="<?php echo $website_url?>" title="MAMADOR VEG. OIL CARTON 1.5LX 6">
                                                <button class="btn" title="View Details">View Details</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
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

        <?php include '../../footer.php' ?>
    </section>

</body>
</html>


