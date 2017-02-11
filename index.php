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
			--><li class="dropdown">
					<a href="#">Social</a>
					<div class="dropdown-content">
						<a href="#">Twitter</a>
						<a href="#">Tumblr</a>
						<a href="#">Some other social media</a>
					</div>
				</li><!--
			--><li>About</li><!--
		--></ul>
	</nav>

	<div class="wrapper"> <!-- Let's grab everything into a box shall we? -->

		<section id="main"> <!-- will put main stuff here... clearly lol -->
			<div id="mainContainer"> <!-- Newest post first! -->
				<article class="default">
					<h2>Also presented by the <a href="https://forums.kittenapprovedgaming.com/" title="Socialize yourself :3" target="_blank">Forums!</a> - Feb. 2, 2017 @ 15:47</h2>
						<p>So I went ahead and installed a forum we can use and it has some starter categories just to get us going.</p>
						<p>I made it a couple weeks ago but was not liking how it turned out so I ended up re-doing it and hopefully it doesn't bug out as the last installation did.</p>
						<p>You can view the forums here: <a href="https://forums.kittenapprovedgaming.com/" title="Socialize yourself :3" target="_blank">https://forums.kittenapprovedgaming.com/</a> or navigate from the navigation list of course lol</p>
				</article>

				<article class="default">
					<h2>I present.... The <a href="download/index.html" title="Let's download stuffs!" target="_blank">Downloads Page</a>! - Jan. 23, 2017 @ 03:50</h2>
						<p>I have crafted a <a href="download/index.html" title="Let's download stuffs!" target="_blank">Downloads</a> page! Woo :D</p>
						<p>Nothing fancy or anything. Just basic information on how to access servers and any added stuff that maybe needed for connecting.</p>
						<p>Yes, it is tacky. It's simple though, and might get the job done? lol</p>
				</article>

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

		<div class="noticeBanner" hidden> <!-- Under banner made in photoshop; will display high priority or maintenance notifications... similar to old status page -->
			<div class="noticeContainer">
				<h3>Sorry to bother, but this is important!</h3>
				<p id="desc">Looks like one (or more) servers are reporting a problem!</p>
					<div id="broadcast">
						<h4><span class="crit">Alert type:</span></h4>
						<p><span class="crit">Critical - Possibly OFFLINE!</span></p>
						<br/>
						<h4><span class="server">Server:</span></h4>
						<p><span class="server">??unknown-TEST -- This server has failed a status check!</span></p>
						<br/>
						<h4><span class="description">Description:</span></h4>
						<p><span class="description">Cat found the power cord amusing. Downtime < 5 minutes</span></p>
					</div> <!-- end broadcast -->
			</div><!-- end container -->
		</div><!-- end banner -->

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

	

	</div><!-- end wrapper -->


	<div id="footer"> <!-- Self-explanatory... I hope, but probably just basic.. ultra basic. We will see -->
		<small>&copy; 2008-2017 Kitten Approved Gaming Network - Justin</small>
	</footer>



</body>
</html>