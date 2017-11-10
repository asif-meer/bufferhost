<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from crazycafe.net/demos/hosting/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 13:44:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Hosting-Contact page</title>

    <!-- ================================================================
        ***Favicon***
    ================================================================= -->

    <?php $page='contact'; include('header.php'); ?>
    <!-- Header End -->
<!-- ==========================================================
2.*Hero_area start
============================================================ -->
    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>contact us</h1>
                        <ol class="breadcrumb hvr-shutter-out-horizontal">
                            <li><a href="index-2.html">Home</a><span></span></li>
                            <li><a href="#">contact</a></li>
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
3.*romana_awesome_service_area start
============================================================ -->
    <div class="romana_gmap_area romana_registration_form_area">
        <div class="romana_google_map">
            <div id="googleMap"></div>
        </div>
        <div class="container">
            <div class="row ">
                <!-- column End -->
                <div class="col-sm-12">
                    <div class="romana_registration_btn text-center">
                        <p class="hvr-bounce-to-right">get in touch</p>
                    </div>
                    <div class="romana_registration_form">
                        <form action="https://formspree.io/crazycafe@gmail.com" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder" for="FistName">
                                            First name
                                            <span class="red">*</span>
                                        </label>
                                        <input id="FistName" type="text" name="name" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder" for="userEmail">
                                            Email Address
                                            <span class="red">*</span>
                                        </label>
                                        <input id="userEmail" type="text" name="_replyto" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="field">
                                        <label class="placeholder" for="LastName">
                                            Last name
                                            <span class="red">*</span>
                                        </label>
                                        <input id="LastName" type="text" name="LastName" />
                                    </div>
                                    <div class="field">
                                        <label class="placeholder" for="userPhone">
                                            Phone Number
                                            <span class="red">*</span>
                                        </label>
                                        <input id="userPhone" type="text" name="userPhone" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field text-field">
                                        <label class="placeholder">
                                            Message here ...
                                        </label>
                                        <textarea cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="romana_submit_btn">
                                <input type="submit" value="message now">
                            </div>
                        </form>
                    </div>
                    <!-- romana_registration form End -->
                    <div class="romana_contact_info">
                        <p><b>phone:</b> <span>+88-568-452-857 <br>+88-568-452-885</span></p>
                        <address>
                        <b>address:</b>
                        <span>420 Backburn East Haven <br>Kaukauna, Monpura</span>
                    </address>
                    </div>
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->
        </div>
        <!-- container End -->
    </div>
<!-- ==================================================
4.*Footer_area start
=================================================== -->
    <?php include('footer.php'); ?>
<!-- ======================================================
    ***Js Files***
=========================================================== -->

    <!-- ================= Main Js ==================== -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- ================= Google Map Api ============== -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
<!--     <script type="text/javascript">
        var map;
        var latlng = new google.maps.LatLng(41.901630, 12.460245);
        var stylez = [
            {
                featureType: "all",
                elementType: "all",
                stylers: [
                    {
                        saturation: -100
                    } // <-- THIS
                  ]
                }
            ];
        var mapOptions = {
            zoom: 12,
            center: latlng,
            scrollwheel: false,
            scaleControl: false,
            disableDefaultUI: true,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
            }
        };
        map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        var geocoder_map = new google.maps.Geocoder();
        var address = 'Rome';
        geocoder_map.geocode({
            'address': address
        }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);

                var marker = new google.maps.Marker({
                    map: map,
                    icon: 'images/map.png',
                    position: map.getCenter()
                });

                var contentString = 'Rome';
                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

            } else {
                alert("Geocode was not successful for the following reason: " + status);
            }
        });
        var mapType = new google.maps.StyledMapType(stylez, {
            name: "Grayscale"
        });
        map.mapTypes.set('gMap', mapType);
        map.setMapTypeId('gMap');
    </script> -->

  

</body>


<!-- Mirrored from crazycafe.net/demos/hosting/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 13:44:46 GMT -->
</html>