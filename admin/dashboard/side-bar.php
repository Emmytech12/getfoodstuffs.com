<div class="side-nav-div animated fadeInLeft">
    <div class="nav-back-div">
        <div class="nav-div active-li" title="Dashboard" onclick="_getPage('dashboard','dashboard', '')" id="side-dashboard">           
            <div class="icon"><i class="bi-speedometer2"></i> Dashboard</div> 
            <div class="hidden" id="_dashboard"><i class="bi-speedometer2"></i> Admin Dashboard Overview</div>
        </div>

        <div class="nav-div" title="Branches" onClick="_getPage('branches','branches','')" id="side-branches">
            <div class="icon"><i class="bi-diagram-3"></i> Branches</div> 
            <div class="hidden" id="_branches"><i class="bi-diagram-3"></i> Branches</div>
        </div>

        <div class="nav-div" title="Staff" onClick="_getPage('staff','staff','')" id="side-staff">
            <div class="icon"><i class="bi-people"></i> Staff</div> 
            <div class="hidden" id="_staff"><i class="bi-people"></i> Active Staff</div>
        </div>

        <div class="nav-div" title="Customers" onClick="_getPage('customers', 'customers','')" id="side-customers">
            <div class="icon"><i class="bi-people"></i> Customers</div> 
        </div>

        <div class="nav-div" title="Products" onClick="_getPage('','products', 'products')" id="side-products">
            <div class="icon"><i class="bi-flower2"></i> Products</div> 
        </div>   

        <div class="nav-div" title="Order" onClick="_getPage('','orders','orders',)" id="side-orders">
            <div class="icon"><i class="bi-basket"></i> Order</div> 
        </div> 

        <div class="nav-div" title="Publish" onClick="_getPage('','publish','publish')" id="side-publish">
            <div class="icon" ><i class="bi-cloud-upload"></i> Publish</div> 
        </div>

        <div class="nav-div" title="Report" onClick="_getPage('','reports', 'reports')" id="side-reports">
            <div class="icon" ><i class="bi-graph-up-arrow"></i> Report</div> 
        </div>
    </div>
</div>














<!--------------------------for nav sub div view----------------------------------------->

<div class="side-nav-bg-sub-div">
	<div class="nav-div animated fadeInLeft" id="link-products">
        <div class="link" title="Product Categories" onclick="_getPage('product_cat','products','');">- Product Categories <div class="num" id="">0</div></div>
        <div class="hidden" id="_products"><i class="bi-flower2"></i> Product Categories</div>

        <div class="link" title="Combo" onclick="_getPage('combo','products','');">- Combo <div class="num" id="">0</div></div>
        <div class="hidden" id="_combo"><i class="bi-basket"></i> Combo</div>
    </div>

    <div class="nav-div animated fadeInLeft" id="link-orders">
        <div class="link" title="Unpaid Order" onclick="_getPage('outstanding_orders','orders','');">- Unpaid Order <div class="num" id="">0</div></div>
        <div class="hidden" id="_outstanding_orders"><i class="bi-basket"></i> Unpaid Order</div>

        <div class="link" title="Unprocessed Order" onclick="_getPage('pending_orders','order','')">- Unprocessed Order <div class="num" id="">0</div></div>
        <div class="hidden" id="_pending_orders"><i class="bi-basket"></i> Unprocessed Order</div>

        <div class="link" title="Order In Progress" onclick="_getPage('attending_orders','order','')">- Order In Progress <div class="num" id="">0</div></div>
        <div class="hidden" id="_attending_orders"><i class="bi-basket"></i> Order In Progress</div>

        <div class="link" title="Ready Order" onclick="_getPage('ready_orders','order','')">- Ready Order <div class="num" id="">0</div></div>
        <div class="hidden" id="_ready_orders"><i class="bi-basket"></i> Ready Order</div>

        <div class="link" title="Delivered Order" onclick="_getPage('delivery_orders','order','')">- Delivered Order <div class="num" id="">0</div></div>
        <div class="hidden" id="_delivery_orders"><i class="bi-basket"></i> Delivered Order</div>
    </div>

    <div class="nav-div animated fadeInLeft" id="link-publish">
        <div class="link" title="News & Blogs" onclick="_getPage('all_blogs','publish','');">- News & Blogs <div class="num" id="">0</div></div>
        <div class="hidden" id="_all_blogs"><i class="bi-journals"></i> News & Blogs</div>

        <div class="link" title="FAQs" onclick="_getPage('all_faqs','products','');">- FAQs <div class="num" id="">0</div></div>
        <div class="hidden" id="_all_faqs"><i class="bi-patch-question"></i> Frequently Asked Question</div>
    </div>

    <div class="nav-div animated fadeInLeft" id="link-reports">
        <div class="link" title="Product Report" onclick="_getPage('product_report','publish','');">- Product Report <div class="num" id="">0</div></div>
        <div class="hidden" id="_product_report"><i class="bi-flower2"></i> Product Report</div>

        <div class="link" title="Sales Report" onclick="_getPage('sales_report','products','');">- Sales Report<div class="num" id="">0</div></div>
        <div class="hidden" id="_sales_report"><i class="bi-boxes"></i> Sales Report</div>

        <div class="link" title="Wallet Report" onclick="_getPage('wallet_report','products','');">- Wallet Report<div class="num" id="">0</div></div>
        <div class="hidden" id="_wallet_report"><i class="bi-credit-card"></i> Wallet Report</div>
    </div>
    
    <div class="nav-back-div" onclick="_closeNav();"></div>
</div>