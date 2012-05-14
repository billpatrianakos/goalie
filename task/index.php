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
			$name			= $todo['name'];
			$description 	= $todo['description'];
			$category 		= $todo['category'];
			
	}
	else {
		$name = "No task found";
		$id = "0";
		$description = "An error occurred or this task no longer exists. If you believe this is an error please Tweet at us (@ChooseClever)";
		$category = "Error";
	}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 
	<title>View or Update a task | Goalie</title>
	<meta name="description" content="Much more than just a todo list dressed up in an understated, unassuming package." />
	<meta name="author" content="Bill Patrianakos" />
	<link rel="author" href="../humans.txt" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="apple-touch-startup-image" href="/startup.png" />
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
<div id="wrapper">
	<header class="container">
		<section class="row gradient" id="header">
			<nav class="twelve">
				<h1 class="centered-text">
					<a class="bar-button left" href="../do_it/">Back</a>
					<i class="icon-check icon-large"></i> Goalie
					<ul class="tabs right">  
					    <li class="active"><a href="#"><i class="icon-eye-open icon-large"></i> View</a></li>
					    <li><a href="#"><i class="icon-repeat icon-large"></i>Update</a></li>
					</ul>
				</h1>				
			</nav>
		</section>
	</header>
	<section id="main-container" class="container">
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
								<option value="<?php echo "$category"; ?>"><?php echo "$category"; ?></option>
								<option value="inbox">Inbox</option>
								<option value="today">Today</option>
								<option value="next">Next</option>
								<option value="someday">Someday</option>
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
	<footer class="container">
		<section class="row">
			<article class="twelve">
				<p class="copyright">
					<a href="http://facebook.com/cleverwebdesign"><i class="icon-facebook-sign icon-large"></i></a> 
					<a href="http://twitter.com/chooseclever"><i class="icon-twitter-sign icon-large"></i></a> 
					<a href="http://github.com/billpatrianakos"><i class="icon-github-sign icon-large"></i></a>
					<br />
					<small>
						Goalie is copyright &copy; 2012 <a href="http://billpatrianakos.me">Bill Patrianakos</a>
					</small>
				</p>
			</article>
		</section>
	</footer>
</div>

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