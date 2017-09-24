<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/icon-infinity.svg" type="image/x-icon">
  <meta name="description" content="Website Generator Description">
  <title>InventoryManagement</title>
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
<section class="menu cid-qvXtDDdClR" once="menu" id="menu1-j" data-rv-view="661">

    

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
                    </a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="page4.php" target="_blank">Market Anallysis</a><a class="text-white dropdown-item display-4" href="page3.php" target="_blank">Amazon Loyalty</a><a class="text-white dropdown-item display-4" href="page1.php" target="_blank">Inventory Management</a></div>
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

<section class="engine"><a href="https://mobirise.co/n">bootstrap modal popup</a></section><section class="tabs1 cid-qvY5tBzqk7 mbr-parallax-background" id="tabs1-10" data-rv-view="658">

    

    
    <div class="container">
        <h2 class="mbr-white align-center pb-5 mbr-fonts-style mbr-bold display-2">Items that could be relevent&nbsp;</h2>
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" href="#tabs1-10_tab0" aria-expanded="true">Market Demand</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style display-7" role="tab" data-toggle="tab" href="#tabs1-10_tab1" aria-expanded="false">Amazon Recommended</a></li>
                    <li class="nav-item"><a class="nav-link mbr-fonts-style display-7" role="tab" data-toggle="tab" href="#tabs1-10_tab2" aria-expanded="false">Compatible to your Inventory</a></li>
                    
                    
                    
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7"style="font-size: 20pt;">
				<b>Market Demand</b>
                                    
                           <table style="color:#ffffff"; cellspacing="5" cellpadding="2" border="1">
                              
                               <?php
					$handle = fopen("item", "r");
					$handle1 = fopen("suggestion", "r");
					if ($handle&&$handle1) {
    						while (($line = fgets($handle)) !== false&&($line1=fgets($handle1))) {
							echo '<tr><td align="center" style="font-size: 15pt; height: 15px; "> <b>'.$line.' </b> </td><td align="center" style="font-size: 15pt; height: 15px; "> <b>'.$line1.' </b> </td></tr>';
    					}
					fclose($handle1);	
    					fclose($handle);
					} else {
						echo 'error';
    // error opening the file.
					} 
				?> 
                             
                            </table>
                                  </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="mbr-text py-5 mbr-fonts-style display-7"style="font-size: 20pt;">
                                    <b>Amazon Recomended</b> 
                            <table style="color:#ffffff"; cellspacing="5" cellpadding="2" border="1">
                              <?php
					$handle = fopen("item", "r");
					$handle1 = fopen("suggestion", "r");
					if ($handle&&$handle1) {
    						while (($line = fgets($handle)) !== false&&($line1=fgets($handle1))) {
							echo '<tr><td align="center" style="font-size: 15pt; height: 15px; "> <b>'.$line.' </b> </td><td align="center" style="font-size: 15pt; height: 15px; "> <b>'.$line1.' </b> </td></tr>';
    					}
					fclose($handle1);	
    					fclose($handle);
					} else {
						echo 'error';
    // error opening the file.
					}
				?>
                            </table>

                                  </p>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
			<p class="mbr-text py-5 mbr-fonts-style display-7"style="font-size: 20pt;">
                                    <b>Compatible to your inventory</b>
                          <table style="color:#ffffff"; cellspacing="5" cellpadding="2" border="1">
                              <?php
					$handle = fopen("item", "r");
					$handle1 = fopen("suggestion", "r");
					if ($handle&&$handle1) {
    						while (($line = fgets($handle)) !== false&&($line1=fgets($handle1))) {
							echo '<tr><td align="center" style="font-size: 15pt; height: 15px; "> <b>'.$line.' </b> </td><td align="center" style="font-size: 15pt; height: 15px; "> <b>'.$line1.' </b> </td></tr>';
    					}
					fclose($handle1);	
    					fclose($handle);
					} else {
						echo 'error';
    // error opening the file.
					}
				?>
                            </table>

                               </p>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Code for form............ -->
<section class="section-table cid-qvXQC6kZXv" id="table1-z" data-rv-view="663">
  <br><br><br>
  
<div class="container container-table">
  <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Add To Your Inventory
      </h2>
<?php
require 'connect.inc.php';
if(isset($_POST['itemName'])&&!empty($_POST['itemName'])){
	$query="INSERT INTO `user_item`(`Product`, `Qty`, `Catagory`, `Price`) VALUES('".$_POST['itemName']."','".$_POST['itemQuant']."','".$_POST['itemCat']."','".$_POST['itemPrice']."')";
	$min=rand(10,1000);
	$avg=rand($min,1000+$min);
	//$expe=avg
	$de=rand(10,100);
	$query1="INSERT INTO `DemandTable` VALUES('".$_POST['itemName']."','".$de."','".$avg."','".$avg."','".$min."')";
	//echo $query;
	//$query="SELECT * FROM `facebook`";
		if(mysqli_query($link,$query)&&mysqli_query($link,$query1)){
				//header('Location: index.php');
		}
		else
			echo "wrong";
	mysqli_close ($con);
}
?>

<center>
  <form action = "page1.php" method = "post">
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
             <td align="center"><b>Category :</b> </td>
              <td align="center"><input type = "date" name = "itemCat" style="font-size: 18pt; height: 20px; width:600px; "></td>
            </tr>
            <tr>
              <td align ="center" colspan="2"> <input type = "submit" value="Add To Sale" ></td>  
            </tr>

            </table>
</form>
</center>
</div>
</section>
<!-- From ends here........... -->


<section class="section-table cid-qvXQC6kZXv" id="table1-z" data-rv-view="663">

  
  
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Table
      </h2>
      
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <!-- <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="">
                </div> -->
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">PRODUT NAME</th><th class="head-item mbr-fonts-style display-7">
                      QUANTITY</th><th class="head-item mbr-fonts-style display-7">CATEGORY</th><th class="head-item mbr-fonts-style display-7">
                      PRICE</th></tr>
            </thead>

            <tbody>
              
               <?php
		require 'connect.inc.php';
		$result = mysqli_query($link,"SELECT * FROM `user_item`");
#$row = mysqli_fetch_array( $result);
		while ($row = mysqli_fetch_array($result))
		{
			echo '<tr><td class="body-item mbr-fonts-style display-7">'.$row['Product'].'</td><td class="body-item mbr-fonts-style display-7">'.$row['Qty'].'</td><td class="body-item mbr-fonts-style display-7">'.$row['Catagory'].'</td><td class="body-item mbr-fonts-style display-7">'.$row['Price'].'</td></tr><tr>';
		}
#echo $row['ProductName'];
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

<section class="mbr-section info1 cid-qvYsoUPTbT" id="info1-15" data-rv-view="720">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
                    Statistics for targetting market</h3>
                <h2 class="align-left mbr-bold mbr-fonts-style display-2">
                    BOLDER STEPS WITH RELIABLE INFORMATION</h2>
            </div>
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="page4.php">Analyse market</a></div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/jarallax/jarallax.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/data-tables/jquery.data-tables.min.js"></script>
  <script src="assets/data-tables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>
