<?php if ($page == 'cart_form') { ?>
    <div class="cart-form-back-div">
        <div class="inner-cart-form">
            <div class="cart-prod-image-back-div">
                <div class="cart-prod-image" id="product_preview">
                    <img src="<?php echo $website_url?>/all-images/products-pix/palm-oil.jpg" alt="<?php echo $thename ?> PALM OIL" />
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

            <div class="cart-prod-content-back-div">
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
                    <button class="btn" title="Continue Shopping" onclick="_alertClose2();"><i class="bi-basket"></i> Continue Shopping</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>