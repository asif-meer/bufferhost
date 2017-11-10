<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crazycafe.net/demos/hosting/domain-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 13:44:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Hosting-Domain Search page</title>

    <!-- ================================================================
        ***Favicon***
    ================================================================= -->

    <?php
	 $page='domain';
      include('header.php');
	
	?>
    <!-- Header End -->
<!-- ==========================================================
2.*Hero_area start
============================================================ -->
<style>
<!--.romana_cart_area2 .romana_search_submit input {
    background: #288feb none repeat scroll 0 0;
    border: medium none;
    height: 50px;
    position: absolute;
    right: 18px;
    top: 17px !important;
	float:left;
}-->

.romana_checkbox2 {
    margin-left: 9px !important;
    padding-bottom: 90px;
    margin-top: 14px !important;
}
.custm{
background-color: #288feb !important;
    color: #ffffff;
    font-size: 25px;
    border-radius: 10px;
    /* width: 71%; */
}
</style>
    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>search domain</h1>
                        <ol class="breadcrumb hvr-shutter-out-horizontal">
                            <li><a href="index-2.html">Home</a><span></span></li>
                            <li><a href="#">domain</a></li>
                        </ol>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
<!-- ==========================================================
3.*Cart Area start
============================================================ -->
    <div class="romana_cart_area romana_cart_area2">
        <div class="container">
            <div class="row">
			<form action="http://bufferhost.com/whmcss/domainchecker.php?systpl=apprasoft" method="post" id="domainSearchForm" class="clearfix">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="romana_domain_text">
                        <h2>Search Your Domain!</h2>
                        <div class="romana_checkbox">
                            <div class="romana_single_check">
                                <input id="Register" name="Register" type="checkbox" checked>
                                <label for="Register"></label>
                                <span>Register</span>
                            </div>
                            <div class="romana_single_check">
                                <input id="Transfer" name="Transfer" type="checkbox">
                                <label for="Transfer"></label>
                                <span>Transfer</span>
                            </div>
                            <div class="romana_single_check">
                                <input id="Manage" name="Manage" type="checkbox">
                                <label for="Manage"></label>
                                <span>Manage</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column End -->
                
                    <div class="romana_domain_search">
                        
                            <div class="romana_search_input">
							<div class="col-md-8">
                                <input type="text" name="domain" id="searchInput" placeholder="Enter domain name here"></div>
								 
                                <div class="col-md-4" >
								
								<input type="submit" value="search domain" class="custm"></div>
                           
                            </div>

                           
                        <div class="col-md-4">
                        <div class="romana_checkbox romana_checkbox2">
                           <div class="romana_checkbox romana_checkbox2">
                            
							<div class="row extensions">
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".com" id="extCom" checked>
                                            <label for="extCom">.com</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".net" id="extNet">
                                            <label for="extNet">.net</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".org" id="extOrg">
                                            <label for="extOrg">.org</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".info" id="extInfo">
                                            <label for="extInfo">.info</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".biz" id="extBiz">
                                            <label for="extBiz">.biz</label>
                                        </div>
                                        <div class="col-sm-2 col-xs-6">
                                            <input type="radio" name="ext" value=".us" id="extUs">
                                            <label for="extUs">.us</label>
                                        </div>
										</div>
										</div>
										 </form>
                                    </div>
                        </div>
						
                    </div>
					
              </div>
				
            </div>
			
          </div>
		   
		  
		  </div>
		 
<?php include('footer.php'); ?>

</body>


<!-- Mirrored from crazycafe.net/demos/hosting/domain-search.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 13:44:06 GMT -->
</html>