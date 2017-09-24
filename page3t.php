<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/icon-infinity.svg" type="image/x-icon">
  <meta name="description" content="Web Page Builder Description">
  <title>AmazonLoyalty</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/data-tables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="menu cid-qvXtDDdClR" once="menu" id="menu1-n" data-rv-view="734">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                         <img src="assets/images/icon-infinity.svg" alt="Sales Mania" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">My Area</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="false">
                        <span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                        Services
                    </a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="page4.html" target="_blank">Market Anallysis</a><a class="text-white dropdown-item display-4" href="page3.html" target="_blank">Amazon Loyalty</a><a class="text-white dropdown-item display-4" href="page1.html" target="_blank">Inventory Management</a></div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="page5.html" target="_blank">
                        <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        About Us
                    </a>
                </li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="index.html" target="_blank"><span class="mbri-cart-add mbr-iconfont mbr-iconfont-btn"></span>
                    
                    Try It Now!
                </a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.co/g">create your own website</a></section><section class="mbr-section content5 cid-qvXD0cNb58 mbr-parallax-background" id="content5-o" data-rv-view="736">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    Amazon Loyalty&nbsp;</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                    Article header with background image and parallax effect
                </h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-qvXD2fTAW7" id="content11-p" data-rv-view="739">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <li><strong>CONDUCT A FLASH SALE</strong> - Flash Sales are conducted every now and then &nbsp;you have a chance to get rid of unnecessary stock and improve your rating .&nbsp;<a href="https://mobirise.com/">Try it now!</a></li>
                    <li><strong>EASY AND SIMPLE</strong> -Feature some adds when needed.&nbsp;<a href="https://mobirise.com/">Try it now!</a></li>
                    <li><strong>EARN AMAZON POINTS&nbsp;</strong>- Unlock better market analysis tools and much more. <a href="https://mobirise.com/">Try it now!</a></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section-table cid-qvXDmw5uJX" id="table1-q" data-rv-view="740">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Your Inventory Table
      </h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">
            Click blue "Gear" icon in the top right corner to hide/show search and info, change the the table background and other parameters.  In browser click on the table head to sort the table, use search to filter the table.     
      </h3>
	<?php
	require 'connect.inc.php';
	if(isset($_POST['itemName'])&&!empty($_POST['itemName'])){
		$query="INSERT INTO `sale` VALUES('".$_POST['itemName']."','".$_POST	['itemQuant']."','".$_POST['itemPrice']."','".$_POST['saleStart']."','".$_POST['saleEnd']."')";
		echo $query;
			if(mysqli_query($link,$query)){
					//header('Location: index.php');
			}
			else
				echo "wrong";
		mysqli_close ($con);
	}
	?>
       <!-- Code for form............ -->
      <left>
        <div class="container container-table">
          <form action = "/backendAction.php" method = "get" >

            <table bgcolor="#ffffff" cellspacing="5" cellpadding="2">
              <tr>
                <td align="center"> <b>Name Of Item :</b> </td>
                <!-- Name Of Item -->

                <td align="center"><input type = "text" name = "itemName" style="font-size: 18pt; height: 20px; width:600px; "></td> 
              </tr>

            <tr>
              <td align="center"><b>Quantity Of Item :</b></td>
              <td align="center"><input type = "text" name = "itemQuant" style="font-size: 18pt; height: 20px; width:600px; "></td>
            </tr>

            <tr>
              <td align="center"><b>Price pre Item :</b></td>
            <td align="center">
              <input type = "text" name = "itemPrice" style="font-size: 18pt; height: 20px; width:600px; "></td>
            </tr>
            <tr>
             <td align="center"><b>Starting Date :</b> </td>
              <td align="center"><input type = "date" name = "saleStart" style="font-size: 18pt; height: 20px; width:600px; "></td>
            </tr>
            <tr>
              <td align="center"><b>End Date :</b></td>
              <td align="center"><input type = "date"  name = "saleEnd" style="font-size: 18pt; height: 20px; width:600px; "></td>
            </tr>
            <tr>
              <td align ="center" colspan="2"> <input type = "submit" value="Add To Sale" ></td>  
            </tr>

            </table>

          </form>
      </div>
    </left>
    <br><br><br><br>
  <!-- Code for form ends here............ -->



      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      Product Name</th><th class="head-item mbr-fonts-style display-7">
                      Quantity Present</th><th class="head-item mbr-fonts-style display-7">
                      Price Labeled</th><th class="head-item mbr-fonts-style display-7">
                      Price Drop</th><th class="head-item mbr-fonts-style display-7">
                      Starting Date</th><th class="head-item mbr-fonts-style display-7">
                      Last Date</th></tr>
            </thead>

            <tbody>
              
              
              
            <?php
		require 'connect.inc.php';
		$result = mysqli_query($link,"SELECT * FROM `sale`");
#$row = mysqli_fetch_array( $result);
		while ($row = mysqli_fetch_array($result))
		{
			echo '<tr> <td class="body-item mbr-fonts-style display-7">'.$row['Product'].'</td><td class="body-item mbr-fonts-style display-7">'.$row['Qty'].'</td><td class="body-item mbr-fonts-style display-7">100</td><td class="body-item mbr-fonts-style display-7">'.$row['Qty'].'</td><td class="body-item mbr-fonts-style display-7">'.$row['sdate'].'</td><td class="body-item mbr-fonts-style display-7">'.$row['edate'].'</td></tr>';
		}
		mysqli_close ($con);
?>  
            </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entries</span>
                <span class="infoFilteredBefore">(filtered from</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> total entries)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="tabs2 cid-qvXOa42GOq" id="tabs2-y" data-rv-view="817">

    

    
    <div class="container">
        <h2 class="mbr-section-title align-center pb-5 mbr-fonts-style display-2">Sale Type</h2>
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs2-y_tab0">
                            Daily Flash Sale</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style display-7" role="tab" data-toggle="tab" href="#tabs2-y_tab1" aria-expanded="false">
                            All out Sale</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs2-y_tab2" aria-expanded="true">
                            Coins Earned</a></li>
                    
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">Daily Flash Sale keeps your product on amazon sale at the price for just the duration mentioned.</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7"><br>All Out Sale keeps your product on that price for ever.<br><br></p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Coins earned&nbsp;</p>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Mobirise gives you the freedom to develop as many websites as you like given the fact that it is a desktop app.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab5" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Publish your website to a local drive, FTP or host on Amazon S3, Google Cloud, Github Pages. Don't be a hostage to just one platform or service provider.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab6" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7">
                                    Just drop the blocks into the page, edit content inline and publish - no technical skills required.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/data-tables/jquery.data-tables.min.js"></script>
  <script src="assets/data-tables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
