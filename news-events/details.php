<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<?php $prefix="../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gamako | News &amp; Events</title>
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

                    <div class="aside" style="height: 300px">
                        <div class="choose-industry hidden">
                            <div class="filter-label">Filter by Industry</div>
                            <select class="input-select" id="gender" name="gender">
                                <option selected value="">Select Industry</option>
                                <option value="automotive">Automotive</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="airlines">Airlines</option>
                                <option value="architectural">Architectural</option>
                            </select>
                        </div>
                    </div> <!--aside-->

                    <div class="inner-content-header">
                            <a href="<?php echo $prefix;?>news-events"><div class="back fl"></div></a>
                            <h2 class="fl">News &amp; Events</h2>
                        </div>

                    <div class="inner-content news-events details">
                        
                        <div class="news-box">
                            <div class="news-box-content" style="height: auto">
                                <h2>Gamako News / Event</h2>
                                <p class="date" style="font-size: 10px; color: #e4222d; margin-bottom: 10px;">28 September 2012</p>
                                <div style="margin-bottom: 10px">
                                    <img src="<?php echo $prefix;?>img/common/sample_event_big.jpg" width="700">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor
                                <br><br>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobor
                                </p>
                            </div>
                        </div>

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
