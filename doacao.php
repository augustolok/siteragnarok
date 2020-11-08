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
		<script>

			function enviaPagseguro(){
			$.post('pagar.php',{
				qtdinformado: $('#qtd').val(),
				id: '<?php echo $_SESSION['Ragnarokuserid'];?>'
			},function(data){
			$('#code').val(data);
			$('#comprar').submit();
			})
			}
			function mudarvalor(){
				let valor = $('#qtd').val();
				let resultado = parseFloat(valor)*100;
				$('#cash').val(resultado);
			}

		</script>
		<style>
		.midiasocial{
			margin-left: 30%;
		}
		</style>

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
								<li><a href="index.php">Home</a></li>
								<li ><a href="cadastro.php">Cadastro</a></li>
								<li><a href="info.php">Informação</a></li>
								<li ><a href="download.php">Download</a></li>
								<li ><a href="/forum">Forum</a></li>
								
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

			login_hide(1);

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

								login_hide(1);

								server_status();
								hidecadastro();

							</script>
								
								<!--- fim do login--->
									</section>
									

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<article class="box post">
									<p>
									
										<?php   if (!empty($_SESSION['Ragnarokuserid'])) {
										?>
										fazer Doação
									<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
									<h1>Lembrando que você esta comprando Cash.</h1>
									<h4>Cash uma modea virtual que  você poderá  troca por item,comida e item visual dentro do game!</h4> <Br></Br> <h5>poderá pedir reembosol somente se não gastar o cash! Caso deseje reembolsar entrar contato  com Ragnadream pelo discord.</h5>
										
										<br>
										<div class="row">
											<div  class="col-12 mt-2">
												<p>digite  valor
												<input type="number" name="qtdinformado" id="qtd" value="" onchange="mudarvalor()"/>
											</div>
											<div class="col-12 mt-1">
												total cash
												<input type="number" id="cash"  value="" readonly>
											</div>
											<div class="col-12 col-sm-6">	
											<button onclick="enviaPagseguro()" >Comprar</button>
											</div>
											</p>
										</div>
										<h5>Cash será liberado automaticamente caso não ocorra entrar em contato pelo discord.</h5>
										<div>
										<form id="comprar" action="https://pagseguro.uol.com.br/v2/checkout/payment.html" method="post" onsubmit="PagSeguroLightbox(this); return false;">

										<input type="hidden" name="code" id="code" value="" />

										</form>
										<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>

										<!--<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>-->
										<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
										<!-- FINAL produção <script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script> -->
										<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
												

										<?php	
										} else {?>
											precisa estar logado.
										<?php		
										}?>

											<div id="main_menu" style="color:#FFFFFF; font-weight:bold"></div>
											<div id="main_div" style="padding-left: 15; padding-right: 5; padding-top: 10"></div>

							

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
										<h2>Notícias</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Maio <strong>1</strong></span>
											<h3><a href="https://ragnadreamro.online/forum/index.php?/topic/4-vote-point-por-cash/">Inauguração</a></h3>
											<p>Começa uma nova jornada.</p>
										</li>
										<li>
											<span class="date">Maio <strong>1</strong></span>
											<h3><a href="https://ragnadreamro.online/forum/index.php?/topic/8-pack-guild/">Pack Guild</a></h3>
											<p>Começa uma nova jornada.</p>
										</li>
										<li>
											<span class="date">Maio <strong>2</strong></span>
											<h3><a href="https://ragnadreamro.online/forum/index.php?/topic/7-os-pioneiros/">Evento Os pioneiros</a></h3>
											<p>Começa uma nova jornada.</p>
										</li>
										<li>
											<span class="date">Maio <strong>15</strong></span>
											<h3><a href="https://ragnadreamro.online/forum/index.php?/topic/10-renova%C3%A7%C3%A3o-da-f%C3%A9/">Nova Quest Renovação da fé</a></h3>
											<p>Começa uma nova jornada.</p>
										</li>
										<li>
											<span class="date">Maio <strong>17</strong></span>
											<h3><a href="https://ragnadreamro.online/forum/index.php?/topic/11-grupo-eden/">Grupo Eden</a></h3>
											<p>agora pode upar fazendo quest caça ou entrega item até 99/70</p>
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
											<li><a href="#" class="button">jogue Ragnadream</a></li>
										</ul>
									</footer>
								</section>
							</div>
							
							
							<div class="col-8 col-12-medium justify-center midiasocial" > 
								<section>
									<header>
										<h2>Suporte?</h2>
									</header>
									<ul class="social">
										<li><a class="icon brands fa-facebook-f" href="https://discord.gg/cM3vxeG"><span class="label">Facebook</span></a></li>
										<li><a class="icon brands fa-twitter" href="https://discord.gg/cM3vxeG"><span class="label">Twitter</span></a></li>
										<li><a class="icon brands fa-discord" href="https://discord.gg/cM3vxeG"><span class="label">Discord</span></a></li>
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