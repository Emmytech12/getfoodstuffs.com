<?php include '../../config/constants.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html id="other-page-header" lang="en" xmlns="http://www.w3.org/1999/xhtml">

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
    <?php  include '../../header.php'?>

    <section class="other-page-section" data-aos="fade-down" data-aos-duration="800">
        <div class="inner-section">
            <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                <ul>
                    <a href="<?php echo $website_url?>"><li title="Home">Home <i class="bi-caret-right-fill"></i></li></a>
                    <a href="<?php echo $website_url?>/blog/"><li title="Latest Blogs & Articles">Latest Blogs & Articles <i class="bi-caret-right-fill"></i></li></li></a>	
                    <li class="li" title="5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs">5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs</li>						
                </ul>
            </div>

            <div class="other-page-pix-div">
                <div class="text-content-div detail-page-text-content" data-aos="fade-in" data-aos-duration="900">
                    <h1 data-aos="fade-in" data-aos-duration="800"><span>5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs</span></h1>
                    <div class="count"><i class="bi-person"></i> By: <span>Paul Emmanuel</span> &nbsp;|&nbsp; <i class="bi-calendar3"></i> Date: <span>15 Jan, 2025</span> &nbsp;|&nbsp; <i class="bi-eye"></i> Views: <span>200</span> </div>
                    <p>Need quick meal ideas? Here are five easy recipes using fresh ingredients from Get Food Stuffs to help you prepare delicious, nutritious meals in no time.</p>                                
                </div>
            </div>
        </div>
    </section>
   
    <section class="others-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="page-back-div">
                    <div class="left-div">
                        <div class="page-list-back-div">
                            <div class="main-picture-back-div">	
                                <div class="main-picture-div" id="blog_preview">
                                    <img src="<?php echo $website_url?>/all-images/blog/blog_1.webp" alt="Blog"/> 
                                </div>   

                                <div class="bottom-img-div">
                                    <div class="inner-img-container"> 
                                        <div class="inner-img-div">
                                            <div class="each-img-div" title="Click to Preview" id="img1" onclick="_viewBlogPreviewImg('img1')">
                                                <img src="<?php echo $website_url?>/all-images/blog/blog_1.webp" alt="Blog"/> 
                                            </div> 
                                            <div class="each-img-div" title="Click to Preview" id="img2" onclick="_viewBlogPreviewImg('img2')">
                                                <img src="<?php echo $website_url?>/all-images/blog/blog_2.jpg" alt="Blog"/> 
                                            </div> 
                                        </div>
                                    </div>
                                    <button class="left-btn"> <i class="bi-chevron-double-left"></i></button>
                                    <button class="blog-right-btn"> <i class="bi-chevron-double-right"></i></button>
                                </div>                                   
						    </div>                         
                        
                            <div class="main-pages-content-div">
                                <p>Cooking delicious meals doesn’t have to be time-consuming! With fresh ingredients from Get Food Stuffs, you can prepare quick and healthy meals in minutes. Whether you're a student, a busy professional, or a home cook, these easy recipes will help you enjoy flavorful dishes with minimal effort.</p>
                                <p>From classic Nigerian staples to quick one-pot meals, our recipes use farm-fresh ingredients delivered straight to your doorstep. Whether it’s a simple jollof rice, stir-fried vegetables, or a protein-packed bean porridge, these meals are nutritious and perfect for any time of the day.</p>                               
                                <p>Get Food Stuffs makes meal preparation hassle-free by ensuring you always have fresh, high-quality ingredients. Say goodbye to long market trips and enjoy cooking with convenience. Explore our recipe ideas today and transform your daily meals with ease!</p>
                            </div>


                            <div class="comment-back-div">
                                <div id="disqus_thread"></div>
                                <script>
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://1stculturetour-com.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="right-div sticky-div">   
                        <div class="div-in">
                            <h3>RECENT BLOG</h3>
                            
                            <div class="related-post-back-div">
                                <a href="<?php echo $website_url?>/blog/5-quick-recipes-using-fresh-ingredients-from-get-food-stuffs" title="5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs">
                                <div class="related-post">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/blog/blog_1.webp" alt="Blog"/> 
                                    </div>

                                    <div class="cont-div">
                                        <h3>5 Quick Recipes Using Fresh Ingredients from Get Food Stuffs</h3> 
                                        <div class="comment"><i class="bi-clock"></i> <span> 15 Jan, 2025 </span> | <i class="bi-eye-fill"></i> <span> 200 Views </span></div>
                                    </div>
                                </div></a>                           
                            </div>

                            <div class="related-post-back-div">
                                <a href="<?php echo $website_url?>/blog/">
                                <div class="related-post">
                                    <div class="image-div">
                                        <img src="<?php echo $website_url?>/all-images/blog/blog_2.jpg" alt="Blog"/> 
                                    </div>

                                    <div class="cont-div">
                                        <h3>How Get Food Stuffs Ensures Freshness in Every Delivery</h3> 
                                        <div class="comment"><i class="bi-clock"></i> <span> 15 Jan, 2025 </span> | <i class="bi-eye-fill"></i> <span> 200 Views </span></div>
                                    </div>
                                </div></a>                           
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </section>
        <script>_fetchEachBlog('<?php echo $publish_id?>');</script>
        <?php include '../../footer.php'?>
    </section>
 
</body>
</html>


