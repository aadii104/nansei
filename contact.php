<!DOCTYPE html>
<html lang="en">



<head>
    <?php include 'head.php'?>
    
	<style>
	 
	 @media (min-width: 967px) 
		{ 
			.ltop
				{display:block;}
			
		}
	@media (max-width: 967px) 
		{ 
			
			div.ltop
				{width:120px;margin-top:1.2em;}
			.mapping
			{
			   width:100%; /* or whatever width you want. */
			   max-width:auto; /* or whatever width you want. */
			   height:100%;
			   margin-bottom:2em;
			   }
		}
	</style>
</head>

<body class="home2">
    <div id="preloader">
        <div class="preloader_spinner"></div>
    </div>
    <!-- preloader end -->
<!-- ==========================================================
    1.*Header_area start
============================================================ -->
    <header>
        
    <?php include 'header.php'?>
    
    </header>
    <!-- Header End -->
<!-- ==========================================================
2.*Hero_area start
============================================================ -->
    <div class="romana_allPage_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="romana_allPage_text text-center">
                        <h1>contact</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a><span></span></li>
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
3.*romana_contact_form_area start
============================================================ -->
    <div class="romana_contact_form_area romana_section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-sm-12">
                    <iframe class="mapping" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4013488.183188731!2d76.04352389592206!3d10.778951451797223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c582b1189633%3A0x559475cc463361f0!2sTamil+Nadu!5e0!3m2!1sen!2sin!4v1489141549182" width="550" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <!-- column End -->
                <div class="col-md-6 col-sm-12">
                    <div class="romana_contact_form romana_common_form">
                        <form action="mail.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="field">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required minlength="3" maxlength="25">
                                    </div>
                                    
                                </div>
                                <!-- column End -->
                                <div class="col-sm-6">
                                    <div class="field">
                                        <input type="text" name="mob" id="mob" class="form-control" placeholder="Mobile Number" required onkeypress='validate(event)'>
                                    </div>
                                    
                                </div>
                                <!-- column End -->
								<div class="col-sm-12">
                                    <div class="field">
                                        <input style="height:48px;" type="email" name="email" id="email" class="form-control" placeholder="E-mail" required maxlength="28">
                                    </div>
                                    
                                </div>
                                <!-- column End -->

                            </div>
                            <!-- row End -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="field text-field">
                                        <label class="placeholder">
                                            Message
                                        </label>
                                        <textarea cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="romana_submit_btn">
                                        <input type="submit" value="Send">
                                    </div>
                                </div>
                                <!-- column End -->
                            </div>
                            <!-- row End -->
                        </form>
                    </div>
                    <!-- romana_registration form End -->
                </div>
                <!-- column End -->
            </div>
            <!-- row End -->

			<div class="romana_all_contact">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="romana_single_contact clearfix">
                            <div class="romana_contact_icon">
                                <a href="#"><i class="icofont icofont-ui-call"></i></a>
                            </div>
                            <div class="romana_contact_info text-center">
                                <p>+91-9710 045 787</p>
                                <p>+91-9677 071 765</p>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-sm-4">
                        <div class="romana_single_contact clearfix">
                            <div class="romana_contact_icon">
                                <a href="#"><i class="icofont icofont-ui-message"></i></a>
                            </div>
                            <div class="romana_contact_info text-center">
                                <p>info@nansei.in</p>
                                <p>nanseinilam8@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                    <div class="col-sm-4">
                        <div class="romana_single_contact clearfix">
                            <div class="romana_contact_icon">
                                <a href="#"><i class="icofont icofont-social-google-map"></i></a>
                            </div>
                            <div class="romana_contact_info text-center">
                                <p>Nansei Nilam</p>
                                <p>Chennai</p>
                            </div>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
            
        </div>
        <!-- container End -->
    </div>
<!-- ==================================================
4.*Footer_area start
=================================================== -->
    <footer class="romana_footer_area romana_section_padding">
        
        <div class="romana_footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="romana_footer_bottom_text text-center">
                            <p class="copy">Copyright &copy; 2017 <strong>Nansei Nilam</strong>. All rights Reserved.</p>
                        </div>
                    </div>
                    <!-- column End -->
                </div>
                <!-- row End -->
            </div>
            <!-- container End -->
        </div>
        <!-- footer_bottom End -->
    </footer>
 <!-- ======================================================
    ***Js Files***
=========================================================== -->
    <!-- ================= Main Js ==================== -->
	<script>
			function validate(evt) {
			  var theEvent = evt || window.event;
			  var key = theEvent.keyCode || theEvent.which;
			  key = String.fromCharCode( key );
			  var regex = /[0-9]|\./;
			  if( !regex.test(key) ) {
				theEvent.returnValue = false;
				if(theEvent.preventDefault) theEvent.preventDefault();
			  }
			}
	</script>
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    
    <!-- ================= Bootstrap min Js =========== -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ================= owl carousel min Js ======== -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- ================= progressbar Js ======== -->
    <script src="js/jQuery-plugin-progressbar.js"></script>

    <!-- ================= Active Js ================== -->
    <script src="js/active.js"></script>
</body>



</html>