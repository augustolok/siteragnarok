<?php 
extension_loaded('mysqli')

	or die ("Mysqli extension not loaded. Please verify your PHP configuration.");



is_file("./config.php")

	or die("<a href=\"./install/install.php\">Run Installation Script</a>");



session_start();

include_once 'config.php'; // loads config variables

include_once 'query.php'; // imports queries

include_once 'functions.php';



$_SESSION[$CONFIG_name.'castles'] = readcastles();

$_SESSION[$CONFIG_name.'jobs'] = readjobs();



?>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>RagnaDream</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script type="text/javascript" language="javascript" src="ceres.js"></script>
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
<img src="images/menu.png" width="60%"  style = "padding-left:1px;"></img>
					<!-- Logo -->
						

					<!-- Nav -->
					<nav id="nav">
							<ul>
								<li ><a href="indexpg.php">Home</a></li>
								<li class="current"><a href="cadastro.php">Cadastro</a></li>
								<li><a href="info.php">Informação</a></li>
								
							</ul>
						</nav>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section class="box">
									<div id="login_div" style="padding-left: 15; padding-right: 5; padding-top: 10">

								</div>
									<script type="text/javascript">


			LINK_ajax('login.php', 'login_div');

			login_hide(2);

		</script>
								<!----- inicio do login --->
								
								<div id="main_menu" style="color:#FFFFFF; font-weight:bold"></div>

					<div id="load_div" style="visibility:hidden; background-color:#000000; color:#FFFFFF"><center><img src="images/loading.gif" alt="Loading..."></center></div>

					<div id="menu_load" style=" visibility:hidden;"></div>

			<tr valign=top>

				<td height="100%">

					<table border="0" >

						<tr >

							<td valign="top" bgcolor="#FFFFFF" colspan="2"  >

						

							</td>

							<td class="back_green" valign="top" >

								<div id="login_div" style="margin-right: 20%;">

								</div>

								<div id="new_div" >

								</div>

								<div id="status_div" >

								</div>

								<div id="selectlang_div" >

								</div>

							</td>

						</tr>

					</table>


		<script type="text/javascript">


			LINK_ajax('login.php', 'login_div');

			login_hide(2);

			server_status()

			LINK_ajax('selectlang.php', 'selectlang_div');

		</script>
								
								<!--- fim do login--->
									</section>
									

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<article class="box post">
										<!----> Content<a href="#" class="image featured"><img src="images/banner.jpg"  /></a> 
										<header>
											<h2> Login / Cadastro</h2>
										</header>
										<p>
											<div id="main_menu" style="color:#FFFFFF; font-weight:bold"></div>
											<div id="main_div" style="padding-left: 15; padding-right: 5; padding-top: 10">

								</div>

										</p>
										<p>
											Olá bem vindo, espero que  se divirta muito desde já agradeço obrigado pela visita.
										</p>
										
										
									</article>

							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<div class="row">
							<div class="col-8 col-12-medium">
								<section>
									<header>
										<h2>Blandit nisl adipiscing</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Jan <strong>27</strong></span>
											<h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
											<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
										</li>
										<li>
											<span class="date">Jan <strong>23</strong></span>
											<h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
											<p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
										</li>
										<li>
											<span class="date">Jan <strong>15</strong></span>
											<h3><a href="#">Magna tempus lorem feugiat</a></h3>
											<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>12</strong></span>
											<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
											<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>10</strong></span>
											<h3><a href="#">Blandit tempus aliquam?</a></h3>
											<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section>
									<header>
										<h2>What's this all about?</h2>
									</header>
									<a href="#" class="image featured"><img src="images/pic10.jpg" alt="" /></a>
									<p>
										This is <strong>Dopetrope</strong> a free, fully responsive HTML5 site template by
										<a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a> It's released for free under
										the <a href="http://html5up.net/license/">Creative Commons Attribution</a> license so feel free to use it for any personal or commercial project &ndash; just don't forget to credit us!
									</p>
									<footer>
										<ul class="actions">
											<li><a href="#" class="button">Find out more</a></li>
										</ul>
									</footer>
								</section>
							</div>
							<div class="col-4 col-6-medium col-12-small">
								<section>
									<header>
										<h2>Tempus consequat</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-6-medium col-12-small">
								<section>
									<header>
										<h2>Ipsum et phasellus</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>
							</div>
							<div class="col-4 col-12-medium">
								<section>
									<header>
										<h2>Vitae tempor lorem</h2>
									</header>
									<ul class="social">
										<li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
										<li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
										<li><a class="icon brands fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
										<li><a class="icon brands fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
										<li><a class="icon brands fa-linkedin-in" href="#"><span class="label">LinkedIn</span></a></li>
									</ul>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<p>
												Untitled Incorporated<br />
												1234 Somewhere Road Suite<br />
												Nashville, TN 00000-0000
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">someone@untitled.tld</a></p>
										</li>
										<li>
											<h3>Phone</h3>
											<p>(800) 000-0000</p>
										</li>
									</ul>
								</section>
							</div>
							<div class="col-12">

								<!-- Copyright -->
								<div id="copyright">
										<ul class="links">
											<li>&copy; RagnaDream.</li><li>Design: <a href="#">Augusto Perez</a></li>
										</ul>
									</div>

							</div>
						</div>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>