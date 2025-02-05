<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php include '../config/constants.php';?>

<head>
    <?php include '../meta.php' ?>
    <title><?php echo $thename ?> | Blogs & Articles</title>
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
    <?php  include '../header.php'?>

    <section class="other-page-section" data-aos="fade-down" data-aos-duration="800">
        <div class="inner-section">
            <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                <ul>
                    <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                    <li class="li" title="Latest Blogs & Articles">Latest Blogs & Articles</li>				
                </ul>
            </div>

            <div class="other-page-pix-div">
                <div class="text-content-div" data-aos="fade-in" data-aos-duration="900">
                    <h1 data-aos="fade-in" data-aos-duration="800"><span>Latest Blogs & Articles</span></h1>
                    <p>Stay updated with the latest from Get Food Stuffs! Get tips on healthy eating, meal planning, and food delivery in Nigeria.</p>                
                </div>
            </div>
        </div>
    </section>

    <section class="others-content-div">
        <section class="body-div harsh-bg">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="right-div sticky-div">
                        <div class="div-in">
                            <h3>SEARCH</h3>
                            <div class="text_field_container">
                                <input class="text_field blog_text_field" id="search_keywords" onkeyup="_fetchListBlog();" type="text" placeholder=""/>
                                <div class="placeholder">Type Here To Search</div>
                            </div>                                                               
                        </div>
                
                        <div class="div-in">
                            <h3>TAG LIST</h3>

                            <ul id="cat_id">
                                <li title="Get Food Stuffs">Get Food Stuffs</li>
                                <li title="News And Update">News And Update</li>
                                <li title="General">General</li>
                                <li title="Announcement">Announcement</li>
                            </ul>                                                              
                        </div>                            
                    </div> 

                    <div class="left-div">
                        <div class="page-list-back-div">
                            <a href="<?php echo $website_url?>/blog/5-quick-recipes-using-fresh-ingredients-from-get-food-stuffs" title="5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs">
                                <div class="main-blog-div">
                                    <div class="top-text">Get Food Stuffs</div>
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/blog/blog_1.webp" alt="Blog"/>
                                    </div>
                                    
                                    <div class="text-content-div">
                                        <h2>5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs</h2>
                                        <div class="count"><i class="bi-calendar3"></i> 15 Jan, 2025 <span> | </span> <i class="bi-eye"></i> 200 VIEWS</div>
                                        <p>Need quick meal ideas? Here are five easy recipes using fresh ingredients from Get Food Stuffs to help you prepare delicious, nutritious meals in no time...</p>
                                        
                                        <div>
                                            <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo $website_url?>/blog/" title="How Get Food Stuffs Ensures Freshness in Every Delivery">
                                <div class="main-blog-div">
                                    <div class="top-text">Get Food Stuffs</div>
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/blog/blog_2.jpg" alt="Blog"/>
                                    </div>
                                    
                                    <div class="text-content-div">
                                        <h2>How Get Food Stuffs Ensures Freshness in Every Delivery</h2>
                                        <div class="count"><i class="bi-calendar3"></i> 15 Jan, 2025 <span> | </span> <i class="bi-eye"></i> 200 VIEWS</div>
                                        <p>We prioritize quality! Learn how Get Food Stuffs guarantees freshness in every delivery, from sourcing to packaging and doorstep delivery...</p>
                                        
                                        <div>
                                            <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="<?php echo $website_url?>/blog/" title="Top 5 Reasons to Choose Get Food Stuffs for Your Grocery Needs">
                                <div class="main-blog-div">
                                    <div class="top-text">Get Food Stuffs</div>
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/blog/blog_3.jpg" alt="Blog"/>
                                    </div>
                                    
                                    <div class="text-content-div">
                                        <h2>Top 5 Reasons to Choose Get Food Stuffs for Your Grocery Needs</h2>
                                        <div class="count"><i class="bi-calendar3"></i> 15 Jan, 2025 <span> | </span> <i class="bi-eye"></i> 200 VIEWS</div>
                                        <p>Wondering why Get Food Stuffs is the best choice for grocery shopping? Here are five reasons why our customers trust us for fresh, quality food items delivered fast...</p>
                                        
                                        <div>
                                            <button class="btn" title="Read More">Read More <i class="bi-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="body-div">
            <div class="body-div-in">
                <div class="main-pages-back-div">
                    <div class="title-div" data-aos="fade-in" data-aos-duration="1200">
                        <div class="left-div">
                            <h2>Related <span>Blogs & Articles</span></h2>
                        </div>
                    </div>

                    <div class="blog-back-div">
                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url ?>/all-images/blog/blog_1.webp" alt="5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs" />
                                </div>

                                <div class="text-div">
                                    <div class="count"><i class="bi-calendar3"></i> 15 Jan, 2025 <span>|</span> <i class="bi-eye-fill"></i> 250 VIEWS</div>
                                    <h3>5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs</h3>

                                    <a href="<?php echo $website_url ?>/blog/5-quick-recipes-using-fresh-ingredients-from-get-food-stuffs" title="Read More">
                                        <button class="btn" title="Read More">Read More <i class="bi-chevron-right"></i></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url ?>/all-images/blog/blog_2.jpg" alt="How Get Food Stuffs Ensures Freshness in Every Delivery" />
                                </div>

                                <div class="text-div">
                                    <div class="count"><i class="bi-calendar3"></i> 15 Jan, 2025 <span>|</span> <i class="bi-eye-fill"></i> 50 VIEWS</div>
                                    <h3>How Get Food Stuffs Ensures Freshness in Every Delivery</h3>

                                    <a href="<?php echo $website_url ?>/blog/how-get-food-stuffs-ensures-freshness-in-every-delivery" title="Read More">
                                        <button class="btn" title="Read More">Read More <i class="bi-chevron-right"></i></button></a>
                                </div>
                            </div>
                        </div>

                        <div class="blog-div" data-aos="fade-in" data-aos-duration="1000">
                            <div class="blog-inner-div">
                                <div class="image-div">
                                    <img src="<?php echo $website_url ?>/all-images/blog/blog_3.jpg" alt="Top 5 Reasons to Choose Get Food Stuffs for Your Grocery Needs" />
                                </div>

                                <div class="text-div">
                                    <div class="count"><i class="bi-calendar3"></i> 15 Jan, 2025 <span>|</span> <i class="bi-eye-fill"></i> 200 VIEWS</div>
                                    <h3>Top 5 Reasons to Choose Get Food Stuffs for Your Grocery Needs</h3>

                                    <a href="<?php echo $website_url ?>/blog/top-5-reasons-to-choose-get-food-stuffs" title="Read More">
                                        <button class="btn" title="Read More">Read More <i class="bi-chevron-right"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </section>
        <?php include '../footer.php'?>
    </section>
 
</body>
</html>


