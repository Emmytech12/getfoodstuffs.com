
<?php if ($page=='dashboard'){?>
    <div class="page-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="top-title"><span id="page-title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</span></div>
            <div class="main-title">👋 Hi, <span id="login_fullname">Hon Emmanuel Paul</span></div>
            <div class="bottom-title"><i class="bi-clock"></i> Last Login Date | <span> 2024-11-18 03:28:41</span></div>
        </div>

        <div class="dashbaord-right-wrapper">
            <ul>
                <li title="Customers" onclick="_getPage('customers','customers', '')"><i class="bi-person"></i> Customers <div class="num" id="">150</div></li>
                <li title="Products"><i class="bi-flower2"></i> Products <div class="num" id="">200</div></li>
                <li title="Combo" onclick="_getPage('combo','products', '');"><i class="bi-gift"></i> Combo <div class="num" id="">10</div></li>
            </ul> 
        </div>
    </div>

    <div class="dashboard-statistics-wrapper">
        <div class="left-dashbaord-container">
            <div class="statistics-chart-back-div" data-aos="fade-in" data-aos-duration="1500">
                <div class="statistics-back-div">
                    <div class="statistics-div left-border" title="Unpaid Order" onclick="_getPage('staff','staff','');">
                        <h2>20</h2> 
                        <span><i class="bi-basket"></i> Unpaid Order</span>
                    </div>

                    <div class="statistics-div" title="Unprocessed Order" onclick="_getPage('customers','customers','');">
                        <h2>10</h2> 
                        <span><i class="bi-basket"></i> Unprocessed Order</span>
                    </div>

                    <div class="statistics-div" title="Ready Order">
                        <h2>5</h2> 
                        <span><i class="bi-basket"></i> Ready Order </span>
                    </div>

                    <div class="statistics-div right-border" title="Delivered Order">
                        <h2>250</h2> 
                        <span><i class="bi-basket"></i> Delivered Order</span>
                    </div>
                </div>

                <div class="chart-back-div">
                    <div class="chart-div-notifications">
                        <div class="text"><i class="bi-graph-up-arrow"></i> Showing Matrix for </div> 

                        <div class="text text-right" onclick="select_search()">
                            <span id="srch-text">Last 30 Days</span>              
                            <div class="icon-div"><i class="bi-caret-down"></i></div> 
                        
                            <div class="srch-select alert-srch-select">
                                <div id="srch-today" onclick="_getAlertReport('srch-today', 'view_today_search');">Today</div>
                                <div id="srch-week" onclick="_getAlertReport('srch-week', 'view_thisweek_search');">This Week</div>
                                <div id="srch-7" onclick="_getAlertReport('srch-7', 'view_7days_search');">Last 7 Days</div>
                                <div id="srch-month" onclick="_getAlertReport('srch-month', 'view_thismonth_search');">This Month</div>
                                <div id="srch-30" onclick="_getAlertReport('srch-30', 'view_30days_search');">Last 30 Days</div>
                                <div id="srch-90" onclick="_getAlertReport('srch-90', 'view_90days_search');">Last 90 Days</div>
                                <div id="srch-year" onclick="_getAlertReport('srch-year', 'view_thisyear_search');">This Year</div>
                                <div id="srch-1year" onclick="_getAlertReport('srch-1year', 'view_1year_search');">Last 1 Year</div>
                                <div onclick="srch_custom('Custom Search')">Custom Search</div>
                            </div> 
                        </div> 

                        <div class="text">
                            <div class="custom-srch-div">
                                <div class="custom-srch-div-in">
                                    <div class="text_field_container dash_field_container">
                                        <input class="text_field dash_text_field bar_cust_text_field" type="text" id="datepickers-from" placeholder=""/>
                                        <div class="placeholder dash_placeholder bar_cust_placeholder"><i class="bi-calendar3"></i> From</div>
                                    </div>

                                    <div class="text_field_container dash_field_container">
                                        <input class="text_field dash_text_field bar_cust_text_field" type="text" id="datepickers-to" placeholder=""/>
                                        <div class="placeholder dash_placeholder bar_cust_placeholder"><i class="bi-calendar3"></i> To</div>
                                    </div>
                                    <button type="button" class="btn">Apply</button>
                                </div>
                            </div>
                        </div>


                        <script language="javascript">
                            $('#datepickers-from').datetimepicker({
                                lang:'en',
                                timepicker:false,
                                format:'Y-m-d',
                                formatDate:'Y-M-d',
                            });
                            
                            $('#datepickers-to').datetimepicker({
                                lang:'en',
                                timepicker:false,
                                format:'Y-m-d',
                                formatDate:'Y-M-d',
                            });
                        </script>
                    </div>

                    <div class="trending-back-div">
                        <div class="revenue-back-div">
                            <div class="revenue-div top-rev">Revenue For<span>January 18 2025</span>-<span>February 17 2025</span></div>
                            <div class="revenue-div"><h3><span>₦1,343,581.63</span>(SALES)</h3>-<h3><span>₦256,000.00</span>(WALLET)</h3></div>
                        </div>

                        <div id="chartContainer" style="width:100%; height:300px; margin:auto;"></div>
                        <script>
                            $(document).ready(function() {
                                var chart = new CanvasJS.Chart("chartContainer", {
                                    animationEnabled: true,
                                    theme: "light1",
                                    title:{
                                        text: ""
                                    },
                                    axisX:{
                                        valueFormatString: "DD MMM",
                                        crosshair: {
                                            enabled: true,
                                            snapToDataPoint: true
                                        }
                                    },
                                    axisY: {
                                        title: "",
                                        includeZero: true,
                                        crosshair: {
                                            enabled: true
                                        }
                                    },
                                    toolTip:{
                                        shared:true
                                    },  
                                    legend:{
                                        cursor:"pointer",
                                        verticalAlign: "bottom",
                                        horizontalAlign: "left",
                                        dockInsidePlotArea: true,
                                        itemclick: toogleDataSeries
                                    },
                                    data: [
                                    {
                                        type: "line",
                                        showInLegend: true,
                                        name: "Sales",
                                        markerType: "square",
                                        xValueFormatString: "DD MMM, YYYY",
                                        color: "#29BA00",
                                        dataPoints: [
                                            { x: new Date(2025, 0, 1), y: 250000 },
                                            { x: new Date(2025, 0, 2), y: 180000 },
                                            { x: new Date(2025, 0, 3), y: 100000 },
                                            { x: new Date(2025, 0, 4), y: 300000 },
                                            { x: new Date(2025, 0, 5), y: 120000 },
                                            { x: new Date(2025, 0, 6), y: 150000 },
                                            { x: new Date(2025, 0, 7), y: 275000 },
                                            { x: new Date(2025, 0, 8), y: 160000 },
                                            { x: new Date(2025, 0, 9), y: 350000 },
                                            { x: new Date(2025, 0, 10), y: 380000 },
                                            { x: new Date(2025, 0, 11), y: 0 },
                                            { x: new Date(2025, 0, 12), y: 100000 },
                                            { x: new Date(2025, 0, 13), y: 0 },
                                            { x: new Date(2025, 0, 14), y: 180000 },
                                            { x: new Date(2025, 0, 15), y: 270000 },
                                        ]
                                    },
                                    {
                                        type: "line",
                                        showInLegend: true,
                                        name: "Wallet",
                                        lineDashType: "dash",
                                        dataPoints: [
                                            { x: new Date(2025, 0, 1), y: 180000 },
                                            { x: new Date(2025, 0, 2), y: 50000 },
                                            { x: new Date(2025, 0, 3), y: 80000 },
                                            { x: new Date(2025, 0, 4), y: 0 },
                                            { x: new Date(2025, 0, 5), y: 150000 },
                                            { x: new Date(2025, 0, 6), y: 40000 },
                                            { x: new Date(2025, 0, 7), y: 300000 },
                                            { x: new Date(2025, 0, 8), y: 200000 },
                                            { x: new Date(2025, 0, 9), y: 0 },
                                            { x: new Date(2025, 0, 10), y: 120000 },
                                            { x: new Date(2025, 0, 11), y: 90000 },
                                            { x: new Date(2025, 0, 12), y: 200000 },
                                            { x: new Date(2025, 0, 13), y: 0 },
                                            { x: new Date(2025, 0, 14), y: 280000 },
                                            { x: new Date(2025, 0, 15), y: 50000 },
                                        
                                        ]
                                    }
                                ]

                                });
                                chart.render();

                                function toogleDataSeries(e){
                                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                        e.dataSeries.visible = false;
                                    } else{
                                        e.dataSeries.visible = true;
                                    }
                                    chart.render();
                                }
                            })
                        </script>
                    </div>  
                </div>
            </div>
        </div>

        <div class="right-dashbaord-container" data-aos="fade-in" data-aos-duration="1500">
            <div class="matrix-div">
                <div class="inner-div">
                    <div class="title"><h3>Order Matrix</h3></div>
                    <div id="chartContainer1" style="width:100%; height:200px; margin:auto;"></div>
            
                    <script type="text/javascript">
                        var options = {
                            title: {
                            text: "" /*My Performance*/
                            },
                            data: [{
                            type: "pie",
                            startAngle: 45,
                            showInLegend: "False",
                            legendText: "{label}",
                            indexLabel: "{label} ({y})",
                            yValueFormatString:"#,##0.#"%"",
                            dataPoints: [
                            { label: "Outstanding", y: 5},
                            { label: "Pending", y: 6},
                            { label: "Processing", y: 4},
                            { label: "Ready", y: 5},
                            { label: "Delivered", y: 15},
                            ]
                            }]
                            };
                        $("#chartContainer1").CanvasJSChart(options);
                    </script>
                </div>                     
            </div>

            <div class="matrix-div">
                <div class="inner-div">
                    <div class="title"><h3>Payment Matrix</h3></div>
                    <div id="chartContainer2" style="width:100%; height:200px; margin:auto;"></div>
            
                    <script type="text/javascript">
                        var options = {
                            title: {
                            text: "" /*My Performance*/
                            },
                            data: [{
                            type: "pie",
                            startAngle: 45,
                            showInLegend: "False",
                            legendText: "{label}",
                            indexLabel: "{label} ({y})",
                            yValueFormatString:"#,##0.#"%"",
                            dataPoints: [
                            { label: "Debit/Credit Card", y: 3},
                            { label: "Wallet", y: 2},
                            { label: "Bank Transfer", y: 11},
                            ]
                            }]
                        };
                        $("#chartContainer2").CanvasJSChart(options);
                    </script>
                </div>                     
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='branches'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-diagram-3"></i> <strong>Branches</strong></div>
            <div class="bottom-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="other-pages-filter-div">
            filter
            <button class="btn" type="button" title="ADD NEW BRANCH" onclick="_getForm();">
                <i class="bi-plus-square"></i> ADD NEW BRANCH
            </button>
        </div>
    </div>

    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllStaff">
                    <thead>
                        <tr class="tb-col">
                            <th>sn</th>
                            <th>Branch Name</th>
                            <th>Branch Email Address</th>
                            <th>Branch Phone Number</th>
                            <th>Branch  Address</th>
                            <th>Branch Manager</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">
                            <td>1</td>
                            <td class="clickable-td" title="Click to view branch profile" onclick="_getFormWithId();"> Gateway Polytechnic</td></div>
                            <td>gatewaypolybranch@gmail.com</td>
                            <td>09028194758</td>
                            <td>33, Old Lagos - Ibadan Expy, Saapde Ogun State</td>
                            <td class="clickable-td" title="Click to view branch Manager's profile">Hon. Emmanuel Paul</td>
                            <td><div class="status-div ACTIVE">ACTIVE</div></td>                        
                        </tr>

                        <tr class="tb-row">
                            <td>2</td>
                            <td class="clickable-td" title="Click to view branch profile" onclick="_getFormWithId();"> Olabisi Onabanjo University</td></div>
                            <td>olabisiunibranch@gmail.com</td>
                            <td>0705908475</td>
                            <td>Ago-Iwoye - Ilisan road, Ago-Iwoye</td>
                            <td class="clickable-td" title="Click to view branch Manager's profile">Bamirin Francis</td>
                            <td><div class="status-div ACTIVE">ACTIVE</div></td>                        
                        </tr>

                        <tr class="tb-row">
                            <td>3</td>
                            <td class="clickable-td" title="Click to view branch profile" onclick="_getFormWithId();"> Gateway Polytechnic</td></div>
                            <td>Moshood Abiola Polytechnic</td>
                            <td>09123758594</td>
                            <td>Ojere, Abeokuta, Ogun State</td>
                            <td class="clickable-td" title="Click to view branch Manager's profile">Micheal Olupe</td>
                            <td><div class="status-div ACTIVE">ACTIVE</div></td>                        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='staff'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-people"></i> <strong>Administrators</strong></div>
            <div class="bottom-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="other-pages-filter-div">
            filter

            <button class="btn" type="button" title="ADD NEW STAFF" onclick="_getForm('staff_reg');">
                <i class="bi-plus-square"></i> ADD NEW STAFF
            </button>
        </div>
    </div>

    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllStaff">
                    <thead>
                        <tr class="tb-col">
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Staff Branch</th>
                            <th>Role</th>
                            <th>Last Login</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">
                            <td class="clickable-td" title="Click to view staff profile" onclick="_getFormWithId('update_staff','');"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Paul Emmanuel"/></div> Paul Emmanuel</td></div>
                            <td>seuemmanuel107@gmail.com</td>
                            <td>Gateway Polytechnic</td>
                            <td>Super Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div ACTIVE">ACTIVE</div></td>                        
                        </tr>

                        <tr class="tb-row">
                            <td class="clickable-td" title="Click to view staff profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Arinsola Olutayo"/></div> Arinsola Olutayo</td></div>
                            <td>arinsola@gmail.com</td>
                            <td>Gateway Polytechnic</td>
                            <td>Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div ACTIVE">ACTIVE</div></div></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="clickable-td" title="Click to view staff profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Paul Emmanuel"/></div> Yakubu Ezekiel</td></div>
                            <td>yakubu200@gmail.com</td>
                            <td>Olabisi Onabanjo University</td>
                            <td>Staff</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div ACTIVE">ACTIVE</div></div></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="clickable-td" title="Click to view staff profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Balogun Samuel"/></div> Balogun Samuel</td></div>
                            <td>balogun200@gmail.com</td>
                            <td>Olabisi Onabanjo University</td>
                            <td>Staff</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div SUSPENDED">SUSPENDED</div></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='customers'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-people"></i> <strong>Users</strong></div>
            <div class="bottom-title">
                Active: <span id="">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="other-pages-filter-div">
            filter
        </div>
    </div> 


    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%" id="fetchAllUsers">
                    <thead>
                        <tr class="tb-col">
                            <th>sn</th>
                            <th>User Id</th>
                            <th>User Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Last Login</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="tb-row">
                            <td>1</td>
                            <td class="clickable-td">BM20220605070858002</td>
                            <td class="clickable-td" title="Click to view user" onclick="_getFormWithId('user-details-form');"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Johnson Agida"/></div> Johnson Agida</td></div>
                            <td>johnson120@gmail.com</td>
                            <td>09029148593</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div ACTIVE">ACTIVE</div></td>
                        </tr>

                        <tr class="tb-row">
                            <td>2</td>
                            <td class="clickable-td">BM20220605070858003</td>
                            <td class="clickable-td" title="Click to view user"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Clement Smith"/></div> Clement Smith</td></div>
                            <td>clement@gmail.com</td>
                            <td>070394859435</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div ACTIVE">ACTIVE</div></div></td>
                        </tr>

                        <tr class="tb-row">
                            <td>3</td>
                            <td class="clickable-td">BM20220605070858004</td>
                            <td class="clickable-td" title="Click to view profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Paul Emmanuel"/></div> Yakubu Ezekiel</td></div>
                            <td>yakubu200@gmail.com</td>
                            <td>0812345567</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div ACTIVE">ACTIVE</div></div></td>
                        </tr>

                        <tr class="tb-row">
                            <td>4</td>
                            <td class="clickable-td">BM20220605070858005</td>        
                            <td class="clickable-td" title="Click to view profile"><div class="image-div"><img src="<?php echo $website_url?>/all-images/images/avatar.jpg" alt="Balogun Samuel"/></div> Balogun Samuel</td></div>
                            <td>balogun200@gmail.com</td>
                            <td>080382938494</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div><div class="status-div SUSPENDED">SUSPENDED</div></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php }?>

<?php if($page=='product_cat'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-flower2"></i> <strong>Product Categories</strong></div>
            <div class="bottom-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="other-pages-filter-div">
            filter
            <button class="btn" type="button" title="ADD NEW PRODUCT CATEGORY" onclick="_getForm();">
                <i class="bi-plus-square"></i> ADD NEW PRODUCT CATEGORY
            </button>
        </div>
    </div>

    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            ff
        </div>
    </div>
<?php }?>



<?php if($page=='combo'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-basket"></i> <strong>Combo</strong></div>
            <div class="bottom-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="other-pages-filter-div">
            filter
            <button class="btn" type="button" title="ADD NEW COMBOY" onclick="_getForm();">
                <i class="bi-plus-square"></i> ADD NEW COMBO
            </button>
        </div>
    </div>

    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            ff
        </div>
    </div>
<?php }?>











<?php if($page=='settings'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-gear"></i> <strong>Global Configurations</strong></div>
            <span class="settings-span">Manage and configure dashboard settings, global settings and manage users </span>
        </div>
        <button class="btn" title="LEARN MORE">LEARN MORE</button>
    </div>
    
    <div class="pages-back-div">
        <div class="user-managment-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="user-managment-list" onclick="_getPage('user-role-configuration', 'user-role-configuration', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/authorization.png" alt="User Role Configurations"/></div>
                    <div class="text-div">
                        <h3>User Role Configurations</h3>
                        <p>User role configurations manage permissions, ensuring secure and efficient access to features.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('user-status-configuration', 'user-status-configuration', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/status.png" alt="User Status Configurations"/></div>
                    <div class="text-div">
                        <h3>User Status Configurations</h3>
                        <p>User status configurations manage states, ensuring efficient system monitoring.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('blog-cat-config', 'blog-cat-config', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/blog.png" alt="Blog Category Configurations"/></div>
                    <div class="text-div">
                        <h3>Blog Category Configurations</h3>
                        <p>Blog category configurations organize content, ensuring easy navigation and management.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('faq-cat-config', 'faq-cat-config', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/faq.png" alt="FAQ Category Configurations"/></div>
                    <div class="text-div">
                        <h3>FAQ Category Configurations</h3>
                        <p>FAQ category configurations organize questions, ensuring easy access and management.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getPage('master-count-config', 'master-count-config', '');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/calculate.png" alt="Master Count Configurations"/></div>
                    <div class="text-div">
                        <h3>Master Count Configurations</h3>
                        <p>Master count configurations manage data totals, ensuring accurate tracking and control.</p>
                    </div>
                </div>
            </div>

            <div class="user-managment-list" onclick="_getForm('app_settings');">
                <div class="inner-div">
                    <div class="icon-div"><img src="<?php echo $website_url?>/all-images/images/settings.png" alt="Global Configurations"/></div>
                    <div class="text-div">
                        <h3>Global Configurations</h3>
                        <p>Global configurations set system-wide settings, ensuring consistency and control.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='user-role-configuration'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Role And Permissions</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Roles And Permissions</strong></div>
        </div>
        <button class="btn" title="ADD NEW ROLE" onclick="_getForm('role_reg');"><i class="bi-plus-square"></i> ADD NEW ROLE</button>
    </div>
    
    <div class="pages-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="role-list-back-div">
            <div class="role-list-div" onclick="_getForm('update_role');">
                <div class="div-in">
                    <div class="icon-div"><i class="bi-shield-fill-check"></i></div>
                    <div class="text-div">
                        <h4>Super Admin</h4>
                        <p>Super admin have view and edit access to all functions by default which cannot be changed</p>
                    </div>
                </div>
                <div class="bottom-div">
                    <div class="count-div"><i class="bi-person-circle"></i>&nbsp; <span>1</span> ACTIVE USER</div>
                </div>
            </div>
            
            <div class="role-list-div">
                <div class="div-in">
                    <div class="icon-div"><i class="bi-shield-fill-check"></i></div>
                    <div class="text-div">
                        <h4>Admin</h4>
                        <p>Admin are able to view, create and edit users and other activities created by super admin</p>
                    </div>
                </div>
                <div class="bottom-div">
                    <div class="count-div"><i class="bi-person-circle"></i>&nbsp; <span>1</span> ACTIVE USER</div>
                </div>
            </div>

            <div class="role-list-div">
                <div class="div-in">
                    <div class="icon-div"><i class="bi-shield-fill-check"></i></div>
                    <div class="text-div">
                        <h4>Staff</h4>
                        <p>Staff has limited access to preview what has been created by admin or super admin</p>
                    </div>
                </div>
                <div class="bottom-div">
                    <div class="count-div"><i class="bi-person-circle"></i>&nbsp; <span>1</span> ACTIVE USER</div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='user-status-configuration'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Status Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Status Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW STATUS" onclick="_getForm('status_reg');"><i class="bi-plus-square"></i> ADD NEW STATUS</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Status ID</th>
                            <th>Status Name</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Role" onclick="_getFormWithId();"> ROLE0001</td></div>
                            <td class="second-td">Super Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Role" onclick="_getFormWithId();"> ROLE0002</td></div>
                            <td class="second-td">Admin</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Role" onclick="_getFormWithId();"> ROLE0003</td></div>
                            <td class="second-td">Staff</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='blog-cat-config'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Blog Category Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Blog Category Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW CATEGORY" onclick="_getForm('blog_cat_reg');"><i class="bi-plus-square"></i> ADD NEW CATEGORY</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Category ID</th>
                            <th>Blog Category Name</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG001</td></div>
                            <td class="second-td">Announcement</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG002</td></div>
                            <td class="second-td">General</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG003</td></div>
                            <td class="second">Hosting</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='faq-cat-config'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> FAQ Category Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>FAQ Category Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW CATEGORY" onclick="_getForm('faq_cat_reg');"><i class="bi-plus-square"></i> ADD NEW CATEGORY</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Category ID</th>
                            <th>FAQ Category Name</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> FAQ001</td></div>
                            <td class="second-td">Announcement</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> FAQ002</td></div>
                            <td class="second-td">General</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> FAQ003</td></div>
                            <td class="second-td">Hosting</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='master-count-config'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="back-div"><span onclick="_getPage('settings','settings','');"><i class="bi-arrow-left"></i> System Settings</span> Master Count Configurations</div>
            <div class="main-title title"><i class="bi-gear"></i> <strong>Master Count Configurations</strong></div>
        </div>
        <button class="btn" title="ADD NEW CATEGORY" onclick="_getForm('master_count_reg');"><i class="bi-plus-square"></i> ADD NEW MASTER</button>
    </div>
    
    <div class="pages-back-div">
        <div class="dynamic-back-div" data-aos="fade-in" data-aos-duration="1500">
            <div class="table-div animated fadeIn">
                <table class="table" cellspacing="0" style="width:100%">
                    <thead>
                        <tr class="tb-col">
                            <th>Counter ID</th>
                            <th>Counter Discription</th>
                            <th>Counter Value</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> STAFF</td></div>
                            <td class="second-td">STAFF ID COUNT</td>
                            <td>20</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> USER</td></div>
                            <td class="second-td">USER ID COUNT</td>
                            <td>10</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>

                        <tr class="tb-row">
                            <td class="first-td" title="Click to View Category" onclick="_getFormWithId();"> BLOG</td></div>
                            <td class="second-td">BLOG ID COUNT</td>
                            <td>30</td>
                            <td>2024-11-18 03:28:41</td>
                            <td><div class="status-div active">Active</div></td>
                            <td><i class="bi-three-dots-vertical"></i></td>
                        </tr>                
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='all_blogs'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-journals"></i> <strong>Blog & Articles</strong></div>
            <div class="bottom-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchBlog" onkeyup="filter('Blog')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>

            <button class="btn" type="button" title="ADD NEW BLOG" onclick="_getForm('blog_reg');">
                <i class="bi-plus-square"></i> ADD NEW BLOG
            </button>
        </div>
    </div>

    <div class="pages-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="dynamic-back-div other-pg-dynamic-back-div" id="fetchAllBlog">
            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_getFormWithId('edit_page_form')">EDIT</button>
                    <button class="btn" onclick="_editPage('edit_page_form','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_1.jpg" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Maximizing Business Efficiency Through Custom Software...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>

            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_get_form_with_id('')">EDIT</button>
                    <button class="btn" onclick="_edit_page('<?php echo $page_category_id;?>','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_2.png" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Leveraging Cutting-Edge Cybersecurity Strategies...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>

            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_get_form_with_id('')">EDIT</button>
                    <button class="btn" onclick="_edit_page('<?php echo $page_category_id;?>','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_3.jpeg" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Maximizing Business Efficiency Through Custom Software...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>

            <div class="grid-div">
                <div class="btn-div">
                    <button class="btn active-btn" onclick="_get_form_with_id('')">EDIT</button>
                    <button class="btn" onclick="_edit_page('<?php echo $page_category_id;?>','')">EDIT PAGE DETAILS</button>
                </div>

                <div class="status-div">ACTIVE</div>
                <div class="img-div"><img src="<?php echo $website_url?>/all-images/blog/blog_2.png" alt="Blog"></div>
                <div class="text-div">
                    <div class="top-text"><span>Announcement</span></div>
                    <h2>Enhancing Digital Transformation with Scalable...</h2>
                    <div class="text-in">
                        <div class="text">UPDATED ON: <span>27 Jul 2024</span> | <span>486</span> VIEWS </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if($page=='faq'){?>
    <div class="page-title-back-div other-pages-title-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="page-title-div">
            <div class="main-title title"><i class="bi-patch-question"></i> <strong>Freqently Asked Questions</strong></div>
            <div class="bottom-title">
                Active: <span id="active-staff">10</span> |
                Suspended: <span>5</span>
            </div>
        </div>

        <div class="date-filter-div other-pages-filter-div">
            <div class="text_field_container dash_field_container">
                <input class="text_field dash_text_field" type="text" id="searchFaq" onkeyup="filter('Faq')" placeholder="" title="Type Here To Search..." />
                <div class="placeholder dash_placeholder"><i class="bi-search"></i> Type Here To Search...</div>
            </div>

            <button class="btn" type="button" title="ADD NEW FAQ" onclick="_getForm('faq_reg');">
                <i class="bi-plus-square"></i> ADD NEW FAQ
            </button>
        </div>
    </div>

    <div class="pages-back-div" data-aos="fade-in" data-aos-duration="1500">
        <div class="dynamic-back-div other-pg-dynamic-back-div faq-pg-dynamic-back-div" id="fetchAllFaq">
            <div class="faq-back-div">
                <div class="title-div">
                    <div class="num">1</div>
                    <button class="btn" onclick=""><i class="bi-pencil-square"></i> <span>What types of web hosting are available?</span></button>
                </div>
                <div class="answer-div">There are several types of web hosting, including shared hosting, VPS
                    hosting, dedicated hosting, and cloud hosting. Shared hosting is
                    budget-friendly and suitable for small sites, while VPS and dedicated
                    hosting offer more resources and control. Cloud hosting provides
                    scalability for growing sites.</div>
            </div>

            <div class="faq-back-div">
                <div class="title-div">
                    <div class="num">2</div>
                    <button class="btn" onclick=""><i class="bi-pencil-square"></i> <span>How much does it cost to develop a website?</span></button>
                </div>
                <div class="answer-div">Website development costs vary based on complexity, design, and features.
                    Basic sites may cost a few hundred dollars, while custom or e-commerce
                    sites may range from a few thousand dollars and up, depending on the
                    project's scope and requirements.</div>
            </div>
        </div>
    </div>
<?php }?>



























<?php if($page=='login'){?>
    <div class="form-div animated fadeIn" id="view_login" data-aos="zoom-in" data-aos-duration="1200">
        <div class="inner-form">
            <h1> 👋 Administrative <span>Log-In</span></h1>                   

            <div class="alert alert-success login-form-alert">
                Kindly, provide your <span>Email Address</span> to Login
            </div>
            
            <div class="text_field_container" id="email_container">
                <script>textField('email', 'Enter Your Email Address')</script>
            </div>

            <div class="text_field_container" id="password_container">
                <script>textField('password', 'Enter Your Password', 'password')</script>
            </div>

            <button class="btn" id="" title="Log In" onclick="location.href='<?php echo $website_url?>/admin/dashboard'">Log In <i class="bi-check"></i></button>
        </div>
    </div>

    <div class="form-div animated fadeIn" id="view_forgot_password">
        <div class="inner-form">
            <h1> Administrative <span>Reset Password</span></h1>                   

            <div class="alert alert-success login-form-alert">
                Kindly, provide your <span>Email Address</span> to reset your password
            </div>
            
            <div class="text_field_container" id="reset_email_container">
                <script>textField('reset_email', 'Enter Your Email Address')</script>
            </div>

            <button class="btn" id="" title="Proceed" onclick="_nextLoginPage('send_link_info','');">Proceed <i class="bi-arrow-right"></i></button>
        </div>
    </div> 

    <div class="form-div animated fadeIn" id="send_link_info">
        <div class="inner-form">
            <div class="top-div">
                <div class="icon-div"><i class="bi-check2-circle"></i></div> 
                <h3>Mail sent successfully</h3>
            </div>
           
            <div class="alert alert-success login-form-alert"><i class="bi-person"></i> Dear <strong>Paul Emmanuel</strong>, 
                a link has been sent to your email address (<strong>seunemmanuel107@gmail.com</strong>) 
                to reset your password. Kindly check your <strong>INBOX</strong> or <strong>SPAM</strong> to confirm.
            </div>

            <button class="btn" type="button" id="submit_btn" title="Okay" onclick="location.href='<?php echo $website_url?>/admin/reset-password'"> 
                OKAY <i class="bi-check2-all"></i>
            </button>                          
            <div class="notification"><strong>MAIL</strong> not received? <span><i class="bi-send"></i> <strong> RESEND MAIL </strong></span></div>                             
        </div>
    </div>
<?php }?>

<?php if($page=='password_reset_successful'){?>
    <div class="successful-div animated bounceInDown">
        <div class="success-in">
            <div class="gif">
                <img src="<?php echo $website_url?>/all-images/images/success.gif" alt="successful gif">
            </div>
            <h3>PASSWORD RESET SUCCESSFULLY</h3>
            <button class="btn" onclick="location.href='<?php echo $website_url?>/admin/login'">OKAY <i class="bi-check2-all"></i></button>
        </div> 
    </div>
<?php }?>

