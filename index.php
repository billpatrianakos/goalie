<?php

if (isset($_COOKIE['goalie']) && $_COOKIE['goalie'] == 'set') {
	header("Location: do_it/index.php");
}

# Logic to display "User already exists message"
if (isset($_GET['err'])) {
	$error = $_GET['err'];
	if ($error == "exists") {
		$signup_error = "show-error";
		$login_error = "hidden";
	}
	elseif ($error == "fail") {
		$signup_error = "hidden";
		$login_error = "show-error";
	}
	else {
		$signup_error = "hidden";
		$login_error = "hidden";
	}
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en" manifest="config/main.appcache">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 
	<title>Goalie | An understated todo list</title>
	<meta name="description" content="Much more than just a todo list dressed up in an understated, unassuming package." />
	<meta name="author" content="Bill Patrianakos" />
	<link rel="author" href="humans.txt" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
    <link href="apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
    <link href="apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
    <link href="apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<link rel="stylesheet" href="public/css/style.css?v=2" />
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700|Pacifico' rel='stylesheet' type='text/css'>
	<script src="public/js/libs/respond.min.js" type="text/javascript"></script>
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
				<h1 class="centered-text"><i class="icon-check icon-large"></i> Goalie
					<ul class="tabs right">  
					    <li class="active"><a href="#">Sign up</a></li>
					    <li><a href="#">Log in</a></li>
					</ul>
				</h1>
			</nav>
		</section>
	</header>
	<section id="main" class="container">
		<section class="row">
			<article class="twelve">
				<div class="clear"></div>
				<div id="signup" class="centered-text tabs_content">
					<div>
					<h2>Sign up</h2>
					<p class="<?php echo "$signup_error"; ?>">
						<strong><i class="icon-warning-sign icon-large"></i> Sorry, the username you chose is taken. Please choose another</strong>
						<br />
						<small>(Trying to log in? Press the button in the top right corner of this page)</small>
					</p>
					<fieldset>
						<form method="post" action="app/signup.php">
							<i class="icon-user icon-large"></i> <input type="text" name="user" value="" placeholder="Username" />
							<br />
							<i class="icon-key icon-large"></i> <input type="password" name="password" value="" placeholder="Password" />
							<br />
							<input type="submit" name="signup" value="Create account" />
						</form>
					</fieldset>
					</div>
					<div>
					<h2>Log in</h2>
					<p class="<?php echo "$login_error"; ?>">
						<strong><i class="icon-warning-sign icon-large"></i> Oops, the username or password you entered is incorrect</strong>
						<br />
						<small>(Trying to sign up? Press the button in the top right corner of this page)</small>
					</p>
					<fieldset>
						<form method="post" action="app/login.php">
							<i class="icon-user icon-large"></i> <input type="text" name="user" value="" placeholder="Username" />
							<br />
							<i class="icon-key icon-large"></i> <input type="password" name="password" value="" placeholder="Password" />
							<br />
							<input type="submit" name="signup" value="Log in" />
						</form>
					</fieldset>
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
	<script>window.jQuery || document.write('<script src="public/js/libs/jquery1.6.4.min.js">\x3C/script>')</script>
	<script src="public/js/plugins.js"></script>
	<script src="public/js/scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("ul.tabs").jTabs({content: ".tabs_content", cookies: true});
		});
	</script>

	<script type="text/javascript">
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