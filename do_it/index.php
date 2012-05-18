<?php
require_once "../app/auth.php";
include "../app/fetch_lists.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en" manifest="../config/main.appcache">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 
	<title><?php echo "$username's Goals"; ?></title>
	<meta name="description" content="Much more than just a todo list dressed up in an understated, unassuming package." />
	<meta name="author" content="Bill Patrianakos" />
	<link rel="author" href="../humans.txt" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="../apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
    <link href="../apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link href="../apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
    <link href="../apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<link rel="stylesheet" href="../public/css/style.css?v=2" />
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700|Pacifico' rel='stylesheet' type='text/css'>
	<script src="../public/js/libs/respond.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(chref=d.href).replace(e.href,"").indexOf("#")&&(!/^[a-z\+\.\-]+:/i.test(chref)||chref.indexOf(e.protocol+"//"+e.host)===0)&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone");
	</script>
	
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if gte IE 9]><style type="text/css">.gradient { filter: none; }</style><![endif]-->

</head>

<body>
<div id="wrap">
	<header class="container">
		<section class="row gradient" id="header">
			<nav class="twelve">

				<h1 class="centered-text">
					<a class="bar-button left" href="../app/logout.php" target=""><i class="icon-signout icon-large"></i> Log out</a>
					<i class="icon-check icon-large"></i> Goalie
					<a class="bar-button right" href="../new"><i class="icon-plus icon-large"></i> New Task</a>
				</h1>
			</nav>
		</section>
	</header>
	<section class="container">
		<section id="main" class="row">
			<article id="cat-sidebar" class="three">
				<ul id="categories" class="tabs">  
				    <li class="active catlist"><a href="#"><i class="icon-inbox icon-large"></i> Inbox</a></li>
				    <li><a href="#"><i class="icon-star icon-large"></i> Today</a></li>
				    <li><a href="#"><i class="icon-arrow-right icon-large"></i> Next</a></li>
				    <li><a href="#"><i class="icon-calendar icon-large"></i> Someday</a></li>
				</ul>
			</article>
			<article id="list-content" class="nine last">
				<div class="tabs_content">
				    <div>
				    	<h2>Inbox</h2>

				    	<ul class="list">
				    		<?php fetch_list('inbox'); ?>
				    	</ul>
				    </div>
				    <div>
				    	<h2>Today</h2>
				    	<ul class="list">
				    		<?php fetch_list('today'); ?>
				    	</ul>
				    </div>
				    <div>
				    	<h2>Next</h2>
				    	<ul class="list">
				    		<?php fetch_list('next'); ?>
				    	</ul>
				    </div>
				    <div>
				    	<h2>Someday</h2>
				    	<ul class="list">
				    		<?php fetch_list('someday'); ?>
				    	</ul>
				    </div>
				</div>
			</article>
		</section>
	</section>
</div>
	<footer class="container">
		<section class="row">
			<article class="twelve">
				<p class="copyright">
					<a href="http://facebook.com/cleverwebdesign"><i class="icon-facebook-sign icon-large"></i></a> 
					<a href="http://twitter.com/chooseclever"><i class="icon-twitter-sign icon-large"></i></a> 
					<a href="http://github.com/billpatrianakos"><i class="icon-github-sign icon-large"></i></a>
					<a class="tip" title="About Goalie" href="../about"><i class="icon-info-sign icon-large"></i></a>
					<br />
					<small>
						Goalie is copyright &copy; 2012 <a href="http://billpatrianakos.me">Bill Patrianakos</a>
					</small>
				</p>
			</article>
		</section>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>
	<script>window.jQuery || document.write('<script src="../public/js/libs/jquery1.6.4.min.js">\x3C/script>')</script>
	<script src="../public/js/plugins.js"></script>
	<script src="../public/js/scripts.js"></script>
	<script type="text/javascript">
		/* jTABS */
		$(document).ready(function(){
			$("ul.tabs").jTabs({content: ".tabs_content", equal_height: true,
			cookies: true});
		});
		
		/* ANALYTICS BELOW */
		var pkBaseURL = (("https:" == document.location.protocol) ? "https://chooseclever.com/stats/" : "http://chooseclever.com/stats/");
		document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
		</script><script type="text/javascript">
		try {
		var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 7);
		piwikTracker.trackPageView();
		piwikTracker.enableLinkTracking();
		} catch( err ) {}
	</script><noscript><p><img src="http://chooseclever.com/stats/piwik.php?idsite=7" style="border:0" alt="" /></p></noscript>

	<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]--> 


</body>
</html>