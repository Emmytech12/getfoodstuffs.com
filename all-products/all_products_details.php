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
                            <a href="<?php echo $website_url?>/all-products/"><li title="All Products">All Products <i class="bi-caret-right-fill"></i></li></a>
                            <li class="li" title="5L PALM OIL + KEG">5l Palm Oil + Keg</li>				
                        </ul>
                    </div>
                    
                    <div class="pages-back-container">
                        <div class="right-container details-left-div" data-aos="fade-in" data-aos-duration="1200">
                            <div class="product-detail-div">
                                <div class="product-detail-image-div">
                                    <div class="product-detail-image" id="product_preview">
                                        <img src="<?php echo $website_url ?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                    </div>

                                    <div class="other-product-image-div">
                                        <div class="inner-img-container"> 
                                            <div class="each-image-div" title="Click to Preview" id="img1" onclick="_viewPreviewImg('img1');">
                                                <img src="<?php echo $website_url ?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                            </div>

                                            <div class="each-image-div" title="Click to Preview" id="img2" onclick="_viewPreviewImg('img2');">
                                                <img src="<?php echo $website_url ?>/all-images/products-pix/terra.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                            </div>

                                            <div class="each-image-div" title="Click to Preview" id="img3" onclick="_viewPreviewImg('img3');">
                                                <img src="<?php echo $website_url ?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                            </div>

                                            <div class="each-image-div" title="Click to Preview" id="img4" onclick="_viewPreviewImg('img4');">
                                                <img src="<?php echo $website_url ?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                            </div>
                                           
                                            <div class="each-image-div" title="Click to Preview" id="img5" onclick="_viewPreviewImg('img5');">
                                                <img src="<?php echo $website_url ?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> PALM OIL" />
                                            </div>
                                        </div>
                                            
                                        <button class="left-product-btn"> <i class="bi-chevron-double-left"></i></button>
                                        <button class="right-product-btn"> <i class="bi-chevron-double-right"></i></button>
                                    </div>
                                    <script>_slideImages();</script>
                                </div>

                                <div class="product-detail-content">
                                    <div class="details-list">
                                        <span>Product Category</span>
                                        <h4>EDIBLE OIL</h4>
                                    </div>

                                    <div class="details-list">
                                        <span>Product Name</span>
                                        <h2>5L PALM OIL + KEG</h2>
                                    </div>

                                    <div class="details-list">
                                        <span>Price Per Unit</span>
                                        <h3>₦6,825.00</h3>
                                    </div>

                                    <div class="details-list">
                                        <div class="quantity-container">
                                            <label for="quantity">Quantity</label>
                                            <div class="quantity-controls">
                                                <button class="btn decrease" id="decrease">−</button>
                                                <input type="text" id="quantity" value="1">
                                                <button class="btn increase" id="increase">+</button>
                                            </div>

                                            <span>₦6,825.00</span>
                                        </div>
                                    </div>
                                    
                                    <script>_increaseAndDecreaseCart();</script>

                                    <div class="btn-div">
                                        <button class="btn cart-btn" title="Add to Cart"><i class="bi-cart"></i> Add to Cart</button>
                                        <a href="<?php echo $website_url?>/all-products/" title="View All Products">
                                        <button class="btn" title="Continue Shopping"><i class="bi-basket"></i> Continue Shopping</button></a>
                                    </div>
                                </div>
                            </div>

                            <div class="product-spec-back-div">
                                <h3>About Products</h3>
                                <div class="menu-div">
                                    <ul>
                                        <li class="active" id="next-details" title="Product Details" onclick="_nextAboutProductPage('details-hide-div','details');">Product Details</li>
                                        <li id="next-reviews" title="Reviews" onclick="_nextAboutProductPage('reviews-hide-div','reviews');">Reviews</li>
                                    </ul>
                                </div>

                                <div id="details-hide-div">
                                    <div class="products-content">
                                        <p>Cooking oil is used for frying, cooking, baking and even dressing meals. We can't do without it in the kitchen. When preparing food, it's unlikely you can make any meal without using some kind of oil or ther other. You should check the kind of oil you use for cooking to be sure of the cholesterol content, especially if you are health conscious. Some cooking oil is more fatty than others. Irrespective of the cooking oil you opt for, you should use it in moderation and try to avoid deep frying or using excessive oil. Cooking oils have various smoke points - some work well at high temperature and this makes them good for frying. While others with a low smoke point are preferred for food dressing</p>
                                    </div>
                                </div>

                                <div id="reviews-hide-div">
                                    <div class="review-back-div">
                                        <div class="review-top-div">
                                            <div class="left-review-div">
                                                <h3>RATINGS</h3>
                                                <h4>Review this product</h4>
                                                <p>Help others make an informed decision!</p>
                                                <div class="title">Your Rating <span>*</span></div>

                                                <div class="stars">
                                                    <span class="star" title="1 Star" data-value="1">&#9733;</span>
                                                    <span class="star" title="2 Stars" data-value="2">&#9733;</span>
                                                    <span class="star" title="3 Stars" data-value="3">&#9733;</span>
                                                    <span class="star" title="4 Stars" data-value="4">&#9733;</span>
                                                    <span class="star" title="5 Stars" data-value="5">&#9733;</span>
                                                    <input type="hidden" id="rating-value" name="rating" value="">
                                                </div>
                                                <script>_starReview();</script>
                                            </div>
                                            <div class="right-review-div">
                                                <div class="text_area_container" id="message_container">
                                                    <script>textField('message', 'Review Text', 'textarea')</script>
                                                </div>

                                                <div class="btn-div">
                                                    <button class="btn" title="Submit Review"><i class="bi-send"></i> Submit Review</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="all-review-back-div">
                                            <div class="title-div">Customer Reviews <span>(3)</span></div>
                                            <div class="cust-review-back-div">
                                                <div class="cust-review-div">
                                                    <div class="top-profile-div">                                                      
                                                        <div class="image-name-div">
                                                            <div class="image-div">
                                                                <img src="<?php echo $website_url ?>/all-images/images/avatar.png" alt="Profile" />
                                                            </div>
                                                            <div class="name-div">
                                                                <h3>Hon Emmanuel</h3>
                                                                <div class="date-div">Jun 2, 2024</div>
                                                            </div>                                  
                                                        </div>                                                         

                                                        <div class="stars">
                                                            <span class="star" title="1 Star" data-value="1">&#9733;</span>
                                                            <span class="star" title="2 Stars" data-value="2">&#9733;</span>
                                                            <span class="star" title="3 Stars" data-value="3">&#9733;</span>
                                                            <span class="star" title="4 Stars" data-value="4">&#9733;</span>
                                                            <span class="star" title="5 Stars" data-value="5">&#9733;</span>
                                                            <input type="hidden" id="rating-value" name="rating" value="3">
                                                        </div>
                                                    </div>

                                                    <div class="bottom-text-div">
                                                        <p>The palm oil is decent, but I’ve had better. It was a bit too thick, and I had to dilute it for my cooking. However, it has a nice aroma, and the packaging is strong. Might buy again if there’s a discount.</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="cust-review-div">
                                                    <div class="top-profile-div">
                                                        <div class="image-name-div">
                                                            <div class="image-div">
                                                                <img src="<?php echo $website_url ?>/all-images/images/avatar.png" alt="Profile" />
                                                            </div>
                                                            <div class="name-div">
                                                                <h3>Yakubu Ezekiel</h3>
                                                                <div class="date-div">Feb 2, 2025</div>
                                                            </div>                                  
                                                        </div>

                                                        <div class="stars">
                                                            <span class="star" title="1 Star" data-value="1">&#9733;</span>
                                                            <span class="star" title="2 Stars" data-value="2">&#9733;</span>
                                                            <span class="star" title="3 Stars" data-value="3">&#9733;</span>
                                                            <span class="star" title="4 Stars" data-value="4">&#9733;</span>
                                                            <span class="star" title="5 Stars" data-value="5">&#9733;</span>
                                                            <input type="hidden" id="rating-value" name="rating" value="3">
                                                        </div>
                                                    </div>

                                                    <div class="bottom-text-div">
                                                        <p>Good palm oil, but slightly thicker than I expected. The taste is still authentic, and I love that it doesn’t have an artificial smell. The delivery was also fast. I just wish the price was a little lower.</p>
                                                    </div>
                                                </div>

                                                <div class="cust-review-div">
                                                    <div class="top-profile-div">
                                                        <div class="image-name-div">
                                                            <div class="image-div">
                                                                <img src="<?php echo $website_url ?>/all-images/images/avatar.png" alt="Profile" />
                                                            </div>
                                                            <div class="name-div">
                                                                <h3>Emeka Godwin</h3>
                                                                <div class="date-div">Jan 2, 2025</div>
                                                            </div>                                  
                                                        </div>
                                                        
                                                        <div class="stars">
                                                            <span class="star" title="1 Star" data-value="1">&#9733;</span>
                                                            <span class="star" title="2 Stars" data-value="2">&#9733;</span>
                                                            <span class="star" title="3 Stars" data-value="3">&#9733;</span>
                                                            <span class="star" title="4 Stars" data-value="4">&#9733;</span>
                                                            <span class="star" title="5 Stars" data-value="5">&#9733;</span>
                                                            <input type="hidden" id="rating-value" name="rating" value="3">
                                                        </div>
                                                    </div>

                                                    <div class="bottom-text-div">
                                                        <p>Excellent quality palm oil! The color is rich, the taste is fresh, and it has that natural aroma you only get from premium palm oil.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                        <div class="left-container sticky-div details-right-container animated fadeIn">
                            <div class="cat-list-wrapper product-delivery-info">
                                <div class="other-title"><i class="bi-truck"></i> <h3>Delivery Informations</h3></div>
                                <div class="div-in-container">
                                    <span>Estimated delivery:</span>
                                    <h4>1 to 2 Hours depending on your location.</h4>
                                </div>
                            </div>

                            <div class="cat-list-wrapper product-delivery-info">
                                <div class="other-title"><i class="bi-gift"></i><h3>Pick Up in Store</h3></div>
                                <div class="div-in-container">
                                    <h4>Your item(s) will be available for pickup at your chosen Get Food Stuffs store after <strong>2 hours.</strong></h4>
                                    <a href="<?php echo $website_url?>">
                                    <p>Click here for company contact</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div btn-title related-products-title" data-aos="fade-in" data-aos-duration="1200">
                        <h2>Related Products</h2>

                        <div class="title-btn-wrapper related-products-btn-wrapper">
                            <div class="btn-div">
                                <button class="carousel-btn related-carousel-btn" title="Previous" id="js-carousel__prev_1"><i class="bi-chevron-double-left"></i></button>
                                <button class="carousel-btn related-carousel-btn" title="Next" id="js-carousel__next_1"><i class="bi-chevron-double-right"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="product-wrapper" data-aos="fade-in" data-aos-duration="1200">
                        <div class="cg-carousel">
                            <div class="cg-carousel__container" id="js-carousel_1">
                                <div class="cg-carousel__track js-carousel__track">

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                                        <button class="cart-btn" title="Add to Cart"><i class="bi-cart"></i></button>

                                                        <a href="<?php echo $website_url?>/all-products/5l-palm-oil-keg" title="5L PALM OIL + KEG">
                                                        <button class="btn" title="View Details">View Details</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                    </div>
                                    
                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                    </div>

                                    <div class="cg-carousel__slide js-carousel__slide" data-aos="fade-left" data-aos-duration="1200">
                                        <div class="product-container combo-product-conatiner">
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
                                    </div>
                                </div>
                            </div>
                        </div>            

                        <script>
                            window['carousel_options_1'] = ({
                                items: 4,
                                margin: 30,
                                loop: true,
                                dots: true,
                                autoplayHoverPause: true,
                                smartSpeed: 650,
                                autoplay: true,
                                breakpoints: {
                                    500: {
                                        slidesPerView: 2,
                                    },
                                    768: {
                                        slidesPerView: 2,
                                    },
                                    920: {
                                        slidesPerView: 3,
                                    },
                                    1024: {
                                        slidesPerView: 4,
                                    }
                                }
                            });
                            _call_carousel(1)
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div " data-aos="fade-in" data-aos-duration="1200">
                        <h2>Products FAQs</h2>
                    </div>

                    <div class="products-faq-back-div" data-aos="fade-up" data-aos-duration="1200">
                        <div class="faq-toggle-back">
                            <div class="faq-toggle" id="faq201">
                                <div class="title-text" onclick="_collapse('faq201')">
                                    <h3>What types of products can I find on Get Food Stuffs?</h3>
                                    <div class="expand-div" id="faq201num">
                                        <i class="bi-plus"></i>
                                    </div>
                                </div>
                                <div class="answer-div" id="faq201answer">
                                    <p>Get Food Stuffs offers a variety of products, including fresh raw foods, grains, vegetables, fruits, and packaged provisions. Our platform provides everything you need to stock up your kitchen or pantry, all available for convenient online shopping.</p>
                                </div>
                            </div>

                            <div class="faq-toggle" id="faq202">
                                <div class="title-text" onclick="_collapse('faq202')">
                                    <h3>How much do the products on Get Food Stuffs cost?</h3>
                                    <div class="expand-div" id="faq202num">
                                        <i class="bi-plus"></i>
                                    </div>
                                </div>
                                <div class="answer-div" id="faq202answer">
                                    <p>The cost of products on Get Food Stuffs varies depending on the item and quantity. We offer competitive prices on all raw foods, groceries, and provisions. You can explore our product catalog to find affordable options that suit your budget.</p>
                                </div>
                            </div>

                            <div class="faq-toggle" id="faq204">
                                <div class="title-text" onclick="_collapse('faq204')">
                                    <h3>Do you offer customer support for orders?</h3>
                                    <div class="expand-div" id="faq204num">
                                        <i class="bi-plus"></i>
                                    </div>
                                </div>
                                <div class="answer-div" id="faq204answer">
                                    <p>Yes, we provide full customer support to ensure your shopping experience is seamless. If you have questions about your order, delivery, or any product, our support team is available to assist you through phone, email, or live chat.</p>
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


