<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title>Order History - <?php echo $thename?></title>
</head>

<body>
    <?php include '../header.php'?>

	<section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="other-pages-back-div">
                    <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                        <ul>
                            <li class="li dashbaord-li" title="ORDER HISTORY">ORDER HISTORY</li>				
                        </ul>
                    </div>
                    
                    <div class="pages-back-container">           
                        <div class="right-container user-link-right-container">
                            <div class="dashboard-list-wrapper">                             
                                <div class="dashboard-list-div order-pg-list-wrapper">
                                    <div class="inner-div">
                                        <div class="chart-div-notifications">
                                            <div class="text-back-div">
                                                <div class="text-inner"> 
                                                    <div class="text"><i class="bi-graph-up-arrow"></i> Order History for </div> 

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
                                                </div>

                                                <div class="text">
                                                    <div class="custom-srch-div">
                                                        <div class="custom-srch-div-in">
                                                            <div class="text_field_container dash_field_container">
                                                                <input class="text_field bar_cust_text_field" type="text" id="datepickers-from" placeholder=""/>
                                                                <div class="placeholder bar_cust_placeholder"><i class="bi-calendar3"></i> From</div>
                                                            </div>

                                                            <div class="text_field_container dash_field_container">
                                                                <input class="text_field bar_cust_text_field" type="text" id="datepickers-to" placeholder=""/>
                                                                <div class="placeholder  bar_cust_placeholder"><i class="bi-calendar3"></i> To</div>
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
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-list-div">
                                    <div class="inner-div">
                                        <div class="alert alert-success">
                                            <span><i class="bi-graph-up-arrow"></i></span> Order History Between <span>January 14 2025</span> - <span>February 13 2025</span>
                                        </div>

                                        <div class="table-div animated fadeIn">
                                            <table class="table" cellspacing="0" style="width:100%" id="fetchAllHosting">
                                                <thead>
                                                    <tr class="tb-col">
                                                        <th>Date</th>
                                                        <th>Order ID</th>
                                                        <th>Items</th>
                                                        <th>(₦)Amount</th>
                                                        <th>Logistics</th>
                                                        <th>Order Status</th>
                                                        <th>Payment Method</th>
                                                        <th>Payment Status</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr class="tb-row">                                                      
                                                        <td>2025-02-14 17:03:46</td>
                                                        <td><span>SHOP5964620250203090426</span></td>
                                                        <td>10</td>
                                                        <td><span>₦60,000.00</span></td>
                                                        <td>DELIVERY</td>                                                     
                                                        <td class="order-status DELIVERED">DELIVERED</td>
                                                        <td>DEBIT/CREDIT CARD</td>
                                                        <td>
                                                            <div class="status-div SUCCESS">SUCCESS</div>
                                                        </td>
                                                    </tr>

                                                    <tr class="tb-row">                                                      
                                                        <td>2025-02-12 17:03:46</td>
                                                        <td><span>SHOP5964620250203090431</span></td>
                                                        <td>20</td>
                                                        <td><span>₦120,000.00</span></td>
                                                        <td>PICK-UP</td>                                                     
                                                        <td class="order-status READY">READY</td>
                                                        <td>DEBIT/CREDIT CARD</td>
                                                        <td>
                                                            <div class="status-div SUCCESS">SUCCESS</div>
                                                        </td>
                                                    </tr>

                                                    <tr class="tb-row">                                                      
                                                        <td>2025-02-22 17:03:46</td>
                                                        <td><span>SHOP5964620250203090411</span></td>
                                                        <td>15</td>
                                                        <td><span>₦100,000.00</span></td>
                                                        <td>DELIVERY</td>                                                     
                                                        <td class="order-status PENDING">PENDING</td>
                                                        <td>BANK TRANSFER</td>
                                                        <td>
                                                            <div class="status-div SUCCESS">SUCCESS</div>
                                                        </td>
                                                    </tr>
                                                    <tr class="tb-row">                                                      
                                                        <td>2025-02-15 17:03:46</td>
                                                        <td><span>SHOP5964620250203090427</span></td>
                                                        <td>10</td>
                                                        <td><span>₦10,000.00</span></td>
                                                        <td>DELIVERY</td>                                                     
                                                        <td class="order-status READY">READY</td>
                                                        <td>DEBIT/CREDIT CARD</td>
                                                        <td>
                                                            <div class="status-div SUCCESS">SUCCESS</div>
                                                        </td>
                                                    </tr>

                                                    <tr class="tb-row">                                                      
                                                        <td>2025-02-11 17:03:46</td>
                                                        <td><span>SHOP5964620250203090478</span></td>
                                                        <td>12</td>
                                                        <td><span>₦5,000.00</span></td>
                                                        <td>PICK-UP</td>                                                     
                                                        <td class="order-status DELIVERED">DELIVERED</td>
                                                        <td>BANK TRANSFER</td>
                                                        <td>
                                                            <div class="status-div PENDING">PENDING</div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="left-container sticky-div user-link-left-container animated fadeIn">
                            <?php $callclass-> _userSideLink($website_url,$website_auto_url);?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include '../footer.php' ?>
    </section>
</body>
</html>
