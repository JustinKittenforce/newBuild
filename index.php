<!DOCTYPE html>
<html>
<head>
	<title>Who knows, but I hope it looks decent</title>
	<link href="https://fonts.googleapis.com/css?family=Wellfleet" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="stylesheet.css"/>

	<script type="text/javascript">
		function inDev() {
			alert("Still being worked on. Come check later for a better version! \r\n\r\n No Judgement Allowed! :)");
		}
	</script>
</head>
<body>

	<header>
		<h1>Kitten Approved Gaming: Appears to have turned Minecrafty-like</h1>
		<p>Let's be part of something fun?</p>
	</header>

	<nav>
		<ul>
			<li><a href="#" title="Seems like you're already here!&#013;&#013;That's a good thing! :D">Home</a></li><!--
			--><li><a href="https://forums.kittenapprovedgaming.com/" onclick="inDev()" title="Explore and join our forums!">Forums</a></li><!--
			--><li><a href="download/index.html" onclick="inDev()" title="Start here to join Minecraft with us!">Downloads</a></li><!--
			--><li>Status</li><!--
			--><li>About</li><!--
		--></ul>
	</nav>

	<div class="wrapper"> <!-- Let's grab everything into a box shall we? -->
		<div class="noticeBanner"> <!-- Under banner made in photoshop; will display high priority or maintenance notifications... similar to old status page -->
			<div class="noticeContainer" hidden>
				<h3>Notice! <br/> <small>I'll disappear magically at some point</small></h3>
				<div id="broadcast">
					<h4>Alert type:</h4>
					<p>Critical</p>
					<br/>
					<h4>Server:</h4>
					<p>HCK</p>
					<br/>
					<h4>Description:</h4>
					<p>Cat found the power cord amusing. Downtime < 5 minutes</p>
				</div> <!-- end broadcast -->
			</div><!-- end container -->
		</div><!-- end banner -->

		<section id="main"> <!-- will put main stuff here... clearly lol -->
			<div id="mainContainer"> <!-- Newest post first! -->

				<article class="default">
					<h2>Progress Update - Jan. 22, 2017 @ 03:02</h2>
						<p><strong>Server Glance is working!</strong> <em>(partially)</em></p>
						<p>Made a super simple script that'll check if the servers are online; but only works partially. :(</p>
						<p>I'll work on getting that fixed here soon! Now for other pages :3</p> 
				</article>

				<article class="default">
					<h2>Progress Update - Jan. 18, 2017 @ 23:40</h2>
						<p>I will from time to time post progress updates on whats new with the site or new servers that went up recently. I'll also put any issues here that may arise in a very noticeable alert banner</p>
						<p>Need to contact? DM me on <a href="https://www.twitter.com/JustinKitten4ce" target="_blank" title="Send Message on Twitter">Twitter</a> or send an email to: <a href="mailto:admin@kittenapprovedgaming.com" title="Email me! :D">admin@kittenapprovedgaming.com</a></p>
					
				</article>

				<article class="default">
					<h2>Introduction</h2>
						<p>Hi, I'm Justin! *waves*</p>
						<p>I'll start using this page as a front-end and eventually expand on to it. (here's to keeping my word!) </p> 
						<p>I plan to make this into a little community of gamers for all types, but let's focus on minecraft for starters. If you enjoy minecraft, casually or hardcore, and like modpacks or vanilla; Join us, let's be part of something fun?</p>
				</article>


			</div>
		</section>

		<aside id="quickLinks"> <!-- In a little box off to the left side probably will put "Most important or funny stuff" not sure yet -->
			<h3>Quick Links!</h3>
				<h4>Nothing to show here yet</h4>

				<!--<ol>
					<li></li>
				</ol> -->

		</aside>

		<aside id="serversGlance"> <!-- Bringing it back! It will work this time, I am determined! -->
			<h3>Here's a Server Glance</h3>
			<!-- I cast PHP! :D -->
			<?php require '_script/php/mc.php'; ?>
				<ul>
					<li>KITAN HCK - <?php print $hck; ?></li>
					<li>Rachel MC - <?php print $rii; ?></li>
					<li>Teamspeak 3 - <?php print $ts; ?></li>
				</ul>
		</aside>

		<aside id="twitter" hidden> <!-- My twitter feed :D -->
			<a href="https://twitter.com/justinkitten4ce" class="twitter-follow-button" data-size="large" data-lang="en" data-show-count="false">Follow @JustinKittenforce on Twitter</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

			<a class="twitter-timeline" data-lang="en" data-width="600" data-height="700" data-theme="light" data-link-color="#cc66ff" href="https://twitter.com/JustinKitten4ce"></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		</aside>

	<footer hidden> <!-- Self-explanatory... I hope, but probably just basic.. ultra basic. We will see -->
		<small>&copy; 2008-2017 Kitten Approved Gaming Network - Justin</small>
	</footer>

	</div><!-- end wrapper -->






</body>
</html>