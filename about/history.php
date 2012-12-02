<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<?php $prefix="../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Gamako | About | History</title>
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

                    <div class="aside about">
                        <a class="selected" href="<?php echo $prefix;?>about/history.php">
                            <div>History</div>
                        </a>
                        <a href="<?php echo $prefix;?>about/organizationchart.php">
                            <div>Organization Chart</div>
                        </a>
                        <a href="<?php echo $prefix;?>">
                            <div>Facilities</div>
                        </a>
                    </div> <!--aside-->

                    <div class="inner-content news-events">

                        <div style="margin-bottom: 20px">
                            <h2>About <span>/ History</span></h2>
                            <div class="red-line"></div>
                        </div>
                        
                        <p>
                            <b>1969</b><br>
                            Established as General Supplier<br>
                            <br>
                            <b>1973</b><br>
                            Become Stockist<br>
                            (Pipes, Fittings, Flanges, Stainless Steel Plate, Valves)<br>
                            <br>
                            <b>1978</b><br>
                            Expand into Agency / Representative business.<br>
                            Engaged in Marketing & Technical activities to promote Products.<br>
                            <br>
                            <b>1982</b><br>
                            Open Branch Offices in Potential Area in Indonesia.<br>
                            <br>
                            <b>2011</b><br>
                            Currently has 30 over Agency Lines with Focus mainly on Piping Materials,Valves, Process Instrumentation, Seals, Safety Products, Heat Exchanger<br>




                        </p>

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
