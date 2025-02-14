<?php include '../config/constants.php';?>
<?php include 'config/functions.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include 'meta.php'?>
    <title>Wallet History - <?php echo $thename?></title>
</head>

<body>
    <?php include '../header.php'?>

	<section class="others-pg-content-div">
        <section class="body-div">
            <div class="body-div-in">
                <div class="other-pages-back-div">
                    <div class="nav-title" data-aos="fade-in" data-aos-duration="1200">
                        <ul>
                            <li class="li dashbaord-li" title="WALLET HISTORY">WALLET HISTORY</li>				
                        </ul>
                    </div>
                    
                    <div class="pages-back-container">           
                        <div class="right-container">
                            <div class="dashboard-list-wrapper">                             
                            <div class="dashboard-list-div">
                                    <div class="inner-div">
                                        <div class="top-div">
                                            <div class="title"><h3>WALLET BALANCE</h3></div>
                                            <div class="btn-div">
                                                <button class="btn" title="Load Wallet" onclick="_getForm('load_user_wallet');"><i class="bi-credit-card"></i> Load Wallet</button>
                                            </div>
                                        </div>
                                        
                                        <div class="wallet-details-wrapper">
                                            <div class="wallet-details">
                                                <h3>NGN 640,000.00</h3>
                                                <h4>TOTAL AMOUNT RECEIVED</h4>
                                            </div> 
                                            
                                            <div class="wallet-details">
                                                <h3>NGN 466,484.92</h3>
                                                <h4>TOTAL AMOUNT SPENT</h4>
                                            </div>  

                                            <div class="wallet-details border-none">
                                                <h3>NGN 173,515.08</h3>
                                                <h4>AVAILABLE BALANCE</h4>
                                            </div>  
                                        </div>
                                    </div>
                                </div>

                                <div class="dashboard-list-wrapper">                             
                                    <div class="dashboard-list-div">
                                        <div class="inner-div">
                                            <div class="top-div">
                                                <div class="title"><h3>WALLET ACTIVITIES</h3></div>
                                            </div>

                                            <div class="table-div animated fadeIn">
                                                <table class="table" cellspacing="0" style="width:100%" id="fetchAllHosting">
                                                    <thead>
                                                        <tr class="tb-col">
                                                            <th>Date</th>
                                                            <th>Trans ID</th>
                                                            <th>Balance Before</th>
                                                            <th>(₦)Amount Loaded</th>
                                                            <th>Balance After</th>
                                                            <th>Trans Type</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr class="tb-row">                                                      
                                                            <td>2025-02-12 17:03:46</td>
                                                            <td>TRC23220250213</td>
                                                            <td><span>NGN 10,000.00</span></td>
                                                            <td>NGN 5,000.00</td>
                                                            <td><span>NGN 15,000.00</span></td>                                                    
                                                            <td>CREDIT</td>
                                                            <td>
                                                                <div class="status-div SUCCESS">SUCCESS</div>
                                                            </td>
                                                        </tr>

                                                        <tr class="tb-row">                                                      
                                                            <td>2025-02-12 17:03:46</td>
                                                            <td>TRC23220250233</td>
                                                            <td><span>NGN 0.00</span></td>
                                                            <td><span class="CANCELLED">NGN 5,000.00</span></td>
                                                            <td><span>NGN 0.00</span></td>                                                    
                                                            <td>CREDIT</td>
                                                            <td>
                                                                <div class="status-div CANCELLED">CANCELLED</div>
                                                            </td>
                                                        </tr>                                                   
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="left-container sticky-div animated fadeIn">
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
