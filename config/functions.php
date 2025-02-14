<?php
class allClass
{
    function _productCatSideLink($website_url){?>
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
    <?php }
        
    
} //end of class
$callclass = new allClass();
?>