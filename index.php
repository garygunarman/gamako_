<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<?php $prefix="";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gamako</title>
        <meta name="description" content="">
		<!--[if lt IE 9]>
			<script src="<?php echo $prefix;?>js/html5shiv.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="<?php echo $prefix;?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/main.css">
        <script src="<?php echo $prefix;?>js/vendor/modernizr-2.6.1.min.js"></script>
        <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'XX-XXXXXXXX-X']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="container" class="clearfix">

            <?php include('static/header.php') ?>

            <div class="main-container">

                <div class="main-content">

                    <div class="banner">
                        <div class="banner-overlay"></div>
                    </div>

                    <div class="red-line"></div>

                    <div class="featured-category clearfix">
                        <div class="blue-box"><p>Products</p></div>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Piping Materials</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Special<br>Piping Systems</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Valves</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Measurement<br>&amp; Control</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Special<br>Piping Systems</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Instrument Fittings,<br>Valves &amp; Manifolds</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Seal<br>Products</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Measurement<br>&amp; Control</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Special<br>Piping Systems</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Instrument Fittings,<br>Valves &amp; Manifolds</p></div></a>
                        <a href="<?php echo $prefix;?>products/details.php"><div class="box"><p>Seal<br>Products</p></div></a>
                    </div>

                    <div class="red-line"></div>

                    <div class="bottom-content clearfix">
                        <div class="red-box">
                            <p>News &amp; Events</p>
                        </div>
                        <a href="<?php echo $prefix;?>news-events/details.php"><div class="news-box">
                            <div class="news-box-content">
                                <h2>Gamako News / Event</h2>
                                <p class="date">28 September 2012</p>
                                <div class="img-container" style="margin-bottom: 10px">
                                    <img src="<?php echo $prefix;?>img/common/sample_event.jpg" width="270">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor...</p>
                            </div>
                            <div class="view-details">View Details</div>
                        </div></a><!--news-box-->
                        <a href="<?php echo $prefix;?>news-events/details.php"><div class="news-box">
                            <div class="news-box-content">
                                <h2>Gamako News / Event</h2>
                                <p class="date">28 September 2012</p>
                                <div class="img-container" style="margin-bottom: 10px">
                                    <img src="<?php echo $prefix;?>img/common/sample_event.jpg" width="270">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor...</p>
                            </div>
                            <div class="view-details">View Details</div>
                        </div></a> <!--news-box-->
                        <div class="contact-box">
                            <p class="title">Contact</p>
                            <div class="contact-box-content">
                                <h3>PT. Gamako Mandiri</h3>
                                <p style="font-size: 11px">
                                    Jl. Pinangsia Timur No. 44<br> 
                                    Jakarta 11110 <br>
                                    P.O. BOX. 5030 <br>
                                    JKTF - 11050<br> 
                                    Indonesia<br>
                                    <br>
                                    <b>Tel.</b> <br>
                                    6902756, 6902761, 6900591<br>
                                    <br>
                                    <b>Fax.</b> <br>
                                    6902758, 6906720, 6007270<br>
                                    <br>
                                    <b>Email</b> <br>
                                    sales@gamakomandiri.com
                                </p>
                            </div>
                        </div> <!--contact-box-->
                    </div> <!--bottom-content-->

                </div> <!--main-content-->

            </div> <!--main-container-->

        </div> <!--container-->

        <?php include('static/footer.php') ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="<?php echo $prefix;?>js/plugins.js"></script>
        <script src="<?php echo $prefix;?>js/main.js"></script>

    </body>
</html>
