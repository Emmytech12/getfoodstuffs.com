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
                            <li class="li dashbaord-li" title="NOTIFICATIONS">NOTIFICATIONS</li>				
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
                                            <span><i class="bi-graph-up-arrow"></i></span> Notifications History Between <span>January 14 2025</span> - <span>February 13 2025</span>
                                        </div>

                                        <div class="main-alert-div">
                                            <div class="system-alert" id="" onclick="_getFormWithId('alert_read');">
                                                <div class="alert-name"><i class="bi-person"></i>Hon. Emmanuel Paul <span id="<?php //echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                                                <div class="alert-text">Success Alert: A customer with whose name is EMMANUEL PAUL have cancelled a trans...</div>
                                                <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                                            </div>

                                            <div class="system-alert" id="" onClick="_get_form_with_id()">
                                                <div class="alert-name"><i class="bi-person"></i>Hon. Emmanuel Paul <span id="<?php //echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                                                <div class="alert-text">Success Alert: A customer with whose name is EMMANUEL PAUL have cancelled a trans...</div>
                                                <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                                            </div>

                                            <div class="system-alert" id="" onClick="_get_form_with_id()">
                                                <div class="alert-name"><i class="bi-person"></i> Hon. Emmanuel Paul <span id="<?php //echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                                                <div class="alert-text">Success Alert: A customer with whose name is EMMANUEL PAUL have cancelled a trans...</div>
                                                <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                                            </div>

                                            <div class="system-alert" id="" onClick="_get_form_with_id()">
                                                <div class="alert-name"><i class="bi-person"></i> Hon. Emmanuel Paul <span id="<?php //echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                                                <div class="alert-text">Success Alert: A customer with whose name is EMMANUEL PAUL have cancelled a trans...</div>
                                                <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                                            </div>

                                            <div class="system-alert" id="" onClick="_get_form_with_id()">
                                                <div class="alert-name"><i class="bi-person"></i> Hon. Emmanuel Paul <span id="<?php //echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                                                <div class="alert-text">Success Alert: A customer with whose name is EMMANUEL PAUL have cancelled a trans...</div>
                                                <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                                            </div>
                                            
                                            <div class="system-alert" id="" onClick="_get_form_with_id()">
                                                <div class="alert-name"><i class="bi-person"></i> Hon. Emmanuel Paul <span id="<?php //echo $alert_id; ?>viewed"><i class="bi-check"></i></span></div>
                                                <div class="alert-text">Success Alert: A customer with whose name is EMMANUEL PAUL have cancelled a trans...</div>
                                                <div class="alert-time"><i class="bi-clock"></i> <span>2023-07-09 15:31:34</span></div>
                                            </div>
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
