<?php
include("inc/config.php");

$Status = ServerStatus();
  function ServerStatus() {
        Global $Srv_Host, $Srv_Login, $Srv_Char, $Srv_Map, $Str_Online, $Str_Offline;
        // Disable Error Reporting (for this function)
        error_reporting(0);
        
        $Status = array();
        $LoginServer = fsockopen($Srv_Host, $Srv_Login, $errno, $errstr, 1);
        $CharServer = fsockopen($Srv_Host, $Srv_Char, $errno, $errstr, 1);
        $MapServer = fsockopen($Srv_Host, $Srv_Map, $errno, $errstr, 1);
        if(!$LoginServer){ $Status[0]= $Str_Offline;  } else { $Status[0] = $Str_Online; };
        if(!$CharServer){ $Status[1] = $Str_Offline;  } else { $Status[1] = $Str_Online; };
        if(!$MapServer){ $Status[2] = $Str_Offline;  } else { $Status[2] = $Str_Online; };
        return $Status;
    }
    
    /*
     * Online Player count (Return Array of Player Count as integer)
     */
	 
    function PlayerCount() {
		$servername = "localhost";
$dbname = "rlcpr1f7_ragnarok";
$username = "rlcpr1f7";
$password = "fyeytyl73q";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) as total FROM `char` WHERE online = '1'";
$result = $conn->query($sql);
$rsultado = $result->fetch_assoc();

$conn->close();
   $playeronline = $rsultado;
    return $playeronline;
    }
	$resultado = PlayerCount();
/*

 * HTML Content (Edit what you wont)
 */
// Start HTML ?>




<!DOCTYPE HTML>
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
		<style>
		@media only screen and (min-width: 600px) {
		 .box footer ul.actions 
		 {
			margin-bottom: 0;
			margin-left:250px;
		 }
		 .midiasocial{
		 padding-left:38%;
		 
		}
		}
		@media only screen and (max-width: 599px) {
			.zero{
		padding-top:0;
		padding-left:10px;
		margin-right:30%;
		}
		
		}
		.zero{
		padding-top:0;
		padding-left:10px;
		}
		ul {
    list-style-type: none;
}
		
		
		</style>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
		
					<!-- Logo
						<h1><a href="index.html">Dopetrope</a></h1>
 -->

  <div class="blue-square" style="padding-left:33%;">
		<ul class="row ">
			<li class=" zero"><?php echo $Str_Loginsrv;?> <?php echo  $Status[0];  ?> </li> 
			<li class=" zero"><?php echo $Str_Charsrv?>  <?php echo$Status[1]; ?> </li>
			<li class=" zero"><?php echo $Str_Mapsrv?>  <?php echo$Status[2]; ?> </li>
			<li class=" zero"><?php echo $Str_onlinepl?>  <?php echo$resultado['total']; ?> </li>
		</ul>
		</div>



					<!-- Nav -->
					<nav id="nav">
							<ul>
								<li class="current"><a href="indexpg.php">Home</a></li>
								<li ><a href="cadastro.php">Cadastro</a></li>
								<li><a href="info.php">Informação</a></li>
								
							</ul>
						</nav>
						

					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Um novo começo</h2>
								<p> RagnaDream</p>
							</header>
						</section>

					<!-- Intro -->
						<section id="intro" class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<section class="first">
										<img src="images/lkmine.png" width="80%" height="90%"></img>
										<header>
											<h2>Rate:15x~30x</h2>
										</header>
										<p><strong> Drops:10x</strong>
										<br>
										Carta: 6x
										</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="middle">
										<img src="images/minmago.png" width="70%" height="70%"></img>
										<header>
											<h2>Pack inicial</h2>
										</header>
										<p>Todos os novos players irão receber como ajuda nesse novo mudo, que lhe aguarda repleto de desafio! </p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="last">
										<img src="images/mincreator.png" width="70%" height="70%"></img>
										<header>
											<h2>Commandos</h2>
										</header>
										<p>@go<br>
										@autotrade
										</p>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="#" class="button large">Pack Inicial</a></li>
									<li><a href="#" class="button alt large">Ler Mais</a></li>
								</ul>
							</footer>
						</section>

				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>Top Rank</h2>
										</header>
										<div class="row">
											<div class="col-6 col-8-medium col-12-small">
												<section class="box">
													<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
													<header>
														<h3>Ipsum feugiat et dolor</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button alt">PVP</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="col-6 col-8-medium col-12-small d-flex align-items-center justify-content-center">
												<section class="box">
													<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
													<header>
														<h3>Sed etiam lorem nulla</h3>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
													<footer>
														<ul class="actions justify-center">
															<li><a href="#" class="button alt">GVG</a></li>
														</ul>
													</footer>
												</section>
											</div>
										</div>
									</section>

							</div>
							<div class="col-12">

								<!-- Blog -->
									

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
										<h2>Quem somos nós?</h2>
									</header>
									<a href="#" class="image featured"><img src="images/pic10.jpg" alt="" /></a>
									<p>
										Apenas mais uma fã de  <strong>Ragnarok</strong> com o objetivo de divertir
										 upando, fazendo a comunidade se encangar mais.
										</p>
									<footer>
										<ul class="actions">
											<li><a href="#" class="button">Find out more</a></li>
										</ul>
									</footer>
								</section>
							</div>
							
							
							<div class="col-8 col-12-medium justify-center midiasocial" > 
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
								
								</section>
							</div>
							<div class="col-12 justify-center">

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
<?php // End HTML


/*
 * Functions (Script by EaScriptable.de.vu)
 * Non Licensed (do what you want)
 */

    /*
     * Server Status (Return Array of Login,Char,Map State)
     */
  
?>