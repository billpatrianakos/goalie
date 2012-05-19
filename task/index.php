<?php

include "../app/auth.php";
include "../config/database.php";
//include "../app/task.php";
$task = $_GET['task'];
$query = "SELECT * FROM todos WHERE id='$task' AND userid='$uid'";
	$result = mysqli_query($connect, $query) or die ("Query failed");
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$todo = mysqli_fetch_assoc($result);
			$id 			= $todo['id'];
			$name			= htmlentities($todo['name']);
			$description 	= $todo['description'];
			$category 		= $todo['category'];

			# Capitalize first letter of category for display
			$display_category = ucfirst($category);
			
	}
	else {
		$name = "No task found";
		$id = "0";
		$description = "An error occurred or this task no longer exists. If you believe this is an error please Tweet at us (@ChooseClever)";
		$category = "Error";
	}
?>
<!DOCTYPE html>
<html class="no-js" lang="en" manifest="../config/main.appcache">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 
	<title>View or Update a task | Goalie</title>
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
					<a class="bar-button left back-btn" href="../do_it/">Back</a>
					<i class="icon-check icon-large"></i> Goalie
					<ul class="tabs right">  
					    <li class="active"><a href="#"><i class="icon-eye-open icon-large"></i> View</a></li>
					    <li><a href="#"><i class="icon-repeat icon-large"></i>Update</a></li>
					</ul>
				</h1>				
			</nav>
		</section>
	</header>
	<section id="main" class="container">
		<section class="row">
			<article class="twelve">
				<div id="signup" class="centered-text tabs_content">
					<div>
					<h2><?php echo "$name"; ?></h2>
					<p>
						<?php echo "$description"; ?>
						<br />
						<strong>Category:</strong> <?php echo "$category"; ?>
					</p>
					</div>
					<div>
					<h2>Update task</h2>
					<fieldset>
						<form method="post" action="../app/update.php">
							<input type="text" name="name" value="<?php echo "$name"; ?>" />
							<br />
							<textarea value="" name="description"><?php echo "$description"; ?></textarea>
							<br />
							<select name="category">
								<option value="<?php echo "$category"; ?>"><?php echo "$display_category"; ?></option>
								<option value="inbox">Inbox</option>
								<option value="today">Today</option>
								<option value="next">Next</option>
								<option value="someday">Someday</option>
							</select>
							<br />
							<input type="text" id="datepicker" value="" name="duedate" placeholder="Due date" readonly="true" />
							<br />
							<select name="hour">
								<option value="">Hour</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select> 
							<select name="minute">
								<option value="">Minute</option>
								<option value="00">:00</option>
								<option value="05">:05</option>
								<option value="10">:10</option>
								<option value="15">:15</option>
								<option value="20">:20</option>
								<option value="25">:25</option>
								<option value="30">:30</option>
								<option value="35">:35</option>
								<option value="40">:40</option>
								<option value="45">:45</option>
								<option value="50">:50</option>
								<option value="55">:55</option>
							</select> 
							<select name="ampm">
								<option value="">am/pm</option>
								<option value="am">am</option>
								<option value="pm">pm</option>
							</select>
							<br />
							<input type="hidden" name="taskid" value="<?php echo "$id"; ?>" />
							<input type="submit" value="Update task" />
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
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<script>window.jQuery || document.write('<script src="../public/js/libs/jquery1.6.4.min.js">\x3C/script>')</script>
	<script>window.jQuery || document.write('<script src="../public/js/libs/jquery-ui-1.8.20.custom.min.js">\x3C/script>')</script>
	<script src="../public/js/plugins.js"></script>
	<script src="../public/js/scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("ul.tabs").jTabs({content: ".tabs_content"});
		});
		$(function() {
			$( "#datepicker" ).datepicker({ dateFormat: "D. MM d" });
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