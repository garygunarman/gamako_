<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<?php $prefix="../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gamako | Products</title>
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

            <?php include('../static/header.php') ?>

            <div class="main-container">

                <div class="main-content">

                    <div class="red-line"></div>

                    <div class="aside">
                        <div class="choose-industry">
                            <div class="filter-label hidden">Filter by Industry</div>
                            <select class="input-select" id="gender" name="gender">
                                <option value="">Select Industry</option>
                                <option selected value="automotive">Automotive</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="airlines">Airlines</option>
                                <option value="architectural">Architectural</option>
                            </select>
                        </div>
                        <ul>
                            <li><a class="selected" href="">All Products</a>
                                <ul>
                                    <li><a href="">Piping Materials</a>
                                        <ul>
                                            <li><a href="">Pipes</a>
                                                <ul>
                                                    <li><a href="">Carbon Steel</a>
                                                        <ul>
                                                            <li><a href="">Seamless</a></li>
                                                            <li><a href="">Welded</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="">Fittings</a></li>
                                            <li><a href="">Flanges</a></li>
                                            <li><a href="">Gaskets</a></li>
                                            <li><a href="">Bolt &amp; Nut</a></li>
                                            <li><a href="">Flexible Joints</a></li>
                                            <li><a href="">Expansion Joints</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Special Piping Systems</a></li>
                                    <li><a href="">Valves</a>
                                        <!--<ul>
                                            <li><a href="">Manual Valves</a>
                                                <ul>   
                                                    <li><a href="">Ball Valve</a>
                                                        <ul>
                                                            <li><a href="">Brass</a></li>
                                                            <li><a href="">Bronze</a></li>
                                                            <li><a href="">Malleable Iron</a></li>
                                                            <li><a href="">Carbon Steel</a></li>
                                                            <li><a href="">Stainless Steel</a></li>
                                                            <li><a href="">Metal Seat</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="">Below Seal Valve</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Automatic Valves</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="">Measurement &amp; Controls</a></li>
                                    <li><a href="">Instrument Fittings, Valves &amp; Manifold</a></li>
                                    <li><a href="">Process Equipments</a></li>
                                    <li><a href="">Seal Products</a></li>
                                    <li><a href="">Industrial Hoses</a></li>
                                    <li><a href="">Fluid Power</a></li>
                                    <li><a href="">Safety &amp; Protection</a></li>
                                    <li><a href="">Machinery, Tools &amp; Accessories</a></li>
                                    <li><a href="">New Products</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> <!--aside-->

                    <div class="spacer"></div>

                    <div class="inner-content-header">
                        <a href="<?php echo $prefix;?>industries"><div class="back fl"></div></a>
                        <h2 class="fl">Automotive</h2>
                    </div>

                    <div class="inner-content">

                        
                        <h2>All Products <span>/ All Brands</span></h2>
                        <div class="red-line"></div>
                        <br>
                        <div class="filter-label">Filter by Brands:</div>
                        <div class="filter-brands clearfix">
                            <a class="selected" href=""><div class="brand-box all-brands">All Brands</div></a>
                            <a class="selected" href=""><div class="brand-box all-brands">All Brands</div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/ako.png" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/amri.png" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/apollo.png" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/ako.png" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/Armstrong.gif" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/bestobell.png" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/ako.png" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/amri.png" width="115"></div></a>
                            <a href=""><div class="brand-box"><img src="<?php echo $prefix;?>img/uploads/brands/apollo.png" width="115"></div></a>
                        </div>
                        
                        <div class="products-content">
                            <img src="<?php echo $prefix;?>img/uploads/product-1.jpg" width="700">
                            <img src="<?php echo $prefix;?>img/uploads/product-1.jpg" width="700">
                            <img src="<?php echo $prefix;?>img/uploads/product-1.jpg" width="700">
                            <img src="<?php echo $prefix;?>img/uploads/product-1.jpg" width="700">
                        </div>

                        <div class="pagination clearfix">
                            <div class="pagination-left fl">
                                <a href=""><div class="page fl">First</div></a>
                                <a href=""><div class="page fl">Previous</div></a>
                            </div> <!--pagination-left-->
                            <div class="pagination-center">
                                <div class="outer-center">
                                    <div class="inner-center">
                                        <a class="selected" href=""><div class="page">1</div></a>
                                        <a href=""><div class="page">2</div></a>
                                        <a href=""><div class="page">3</div></a>
                                    </div>
                                </div>
                            </div> <!--pagination-center-->
                            <div class="pagination-right fr">
                                <a href=""><div class="page fr">Next</div></a>
                                <a href=""><div class="page fr">Last</div></a>
                            </div> <!--pagination-right-->
                        </div> <!--pagination-->

                    </div> <!--inner-content-->

                </div> <!--main-content-->

            </div> <!--main-container-->

        </div> <!--container-->

        <?php include('../static/footer.php') ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="<?php echo $prefix;?>js/plugins.js"></script>
        <script src="<?php echo $prefix;?>js/main.js"></script>

    </body>
</html>
