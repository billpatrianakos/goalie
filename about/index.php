<!DOCTYPE html>
<html class="no-js" lang="en" manifest="../config/main.appcache">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 
	<title>About Goalie</title>
	<meta name="description" content="Learn more about the creation of the Goalie todo list mobile web app." />
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
					<a class="bar-button left" href="../do_it/">Back</a>
					<i class="icon-check icon-large"></i> Goalie
				</h1>				
			</nav>
		</section>
	</header>
	<section id="main" class="container">
		<section class="row">
			<article id="sidebar" class="three">
				<ul id="categories">
					<li><strong>Dig deeper</strong></li>
					<li><a href="http://chooseclever.com">Clever Web Design</a></li>
					<li><a href="http://blog.billpatrianakos.me">Bill's Blog</a></li>
					<li><strong>More apps by Bill</strong></li>
					<li><a href="http://writeapp.me">Write.app</a></li>
					<li><a href="http://beautician.cleverlabs.info">Beautician</a></li>
					<li><a href="http://fractionless.info">Fractionless Boilerplate</a></li>
				</ul>
			</article>
			<article id="about-goalie" class="nine last">
				<h2>About Goalie</h2>
				<p>
				Goalie really is a very simple todo list app. The world doesn't need yet another todo list app, of course, so why build another? A few reasons, really. Design, necessity, skill building, and a lot of inspiration are the reasons for Goalie coming into existence. Its continued development however depends on reception, feasibility, and usefulness.
				</p>
				<h3>Design</h3>
				<p>
				Many like to argue that function trumps form. If that were the case then two equally functional apps would be evenly matched and a joy to use. That never happens. There are no shortage of ugly apps that you'd never want to use a second time. With Goalie, I strive to make the app a joy to use through design. The functionality, as with any todo list, is rather simple to implement. Design is what separates the functional from the joyful to use. Over time the design and experience will become better and better and its my sincere hope that people come to love looking at the app on phones, tablets, and in their browsers.
				</p>
				<h3>Necessity and Skill Building</h3>
				<p>
				With Goalie I'm scratching my own itch while practicing my craft. I'm a generalist web developer and I'm proud of that title. Developing Goalie required backend programming, server administration, and front end design. As with most of the apps I build I set up the entire stack from configuring the server (I'm using mod_pagespeed by the way, hopefully the site seems speedy) to writing the CSS. I wanted a todo list app but was unsatisfied with the way others had implemented theirs or designed theirs or, in some cases, charged for theirs. There are a lot of great ones out there, don't get me wrong, but there's something about creating and using your own app despite the existence of others that just feels great. So I made it because I could, because I wanted to, and if you like it that'd make me even happier.
				</p>
				<h3>Inspiration</h3>
				<p>
				I saved the best for last. Inspiration is probably the most important reason for the existence of Goalie (which was originally supposed to be called CloudThing). I drew the most inspiration from <a href="http://culturedcode.com/things/">Things</a> for both iOS and Mac. The functionality and design were largely inspired by Things. I especially liked the way that <a href="http://culturedcode.com/things/">Things</a> organized todos into the Inbox, Today, Next, Someday, and Scheduled categories. Future versions of Goalie will include more of these features (currently Goalie is missing Scheduled todos, repeating tasks, and projects as well as an archive but give me a break, Goalie is only 3 days old as of this writing). I also have to give a lot of credit to <a href="http://stripe.com">Stripe</a>'s dashboard which inspired much of the design of Goalie. From Things I took the sidebar of todo categories and a little of the app-like feel. From Stripe I took a lot of the color cues, the desktop design layout, and honestly just kind of almost cloned the thing. If you check out Things and Stripe you'll definitely see the inspiration. That said, I never outright plagiarized as far as taking anyone else's code or images in any way. I did it all from scratch... well, as much as anyone really does anything from scratch these days, anyway. Of course there is a list of open source software that helped me build this but what project doesn't have that list? 
				</p>
				<p>
				Got ideas? Found a bug? Feature requests? You can <a href="http://billpatrianakos.me">contact me here</a>.
				</p>
				<h4>Credits</h4>
				<p>
				Goalie was made possible by these open source projects (not including the LAMP stack on this server):
				</p>
				<ul>
					<li><a href="http://vanity.enavu.com">VanityJS</a></li>
					<li><a href="http://fortawesome.github.com/Font-Awesome/">Font Awesome</a></li>
					<li><a href="http://cssarrowplease.com">CSS Arrow Please</a></li>
					<li>Hmm... I thought I used more projects than this</li>
				</ul>
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
		$(document).ready(function(){
			$("ul.tabs").jTabs({content: ".tabs_content"});
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