<?php
 
$dataPoints = array(
	array("label"=> "Food + Drinks", "y"=> 590),
	array("label"=> "Activities and Entertainments", "y"=> 261),
	array("label"=> "Health and Fitness", "y"=> 158),
	array("label"=> "Shopping & Misc", "y"=> 72),
	array("label"=> "Transportation", "y"=> 191),
	array("label"=> "Rent", "y"=> 573),
	array("label"=> "Travel Insurance", "y"=> 126)
);
	
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Solid State by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="Ballina.php">PDDPS</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="Ballina.php">Ballina</a></li>
							<li><a href="menaxhimiPerdoruesve.php">Perdoruesit</a></li>
							<li><a href="Profilet e te diplomuarve.php">Te Diplomuarit</a></li>
							<li><a href="Profilet e Institucioneve.php">Institucionet</a></li>
							<li><a href="#">Raportet</a></li>
							<li><a href="index.php" class="button primary">Ç'kycu</a></li>
						</ul>
					</nav>
				</header>
					<!-- <header id="header" class="alt">
						<h1><a href="index.html">Solid State</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header> -->

				<!-- Menu -->
					<!-- <nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="index.html">Home</a></li>
								<li><a href="generic.html">Generic</a></li>
								<li><a href="elements.html">Elements</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Sign Up</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav> -->

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Platforma Digjitale e te Diplomuarve sipas Programeve Studimore (PDDPS)</h2>
							<p>Another free + fully responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
						</div>
					</section>

				<!-- Wrapper -->
				<section id="wrapper">
							<script>
								window.onload = function () {
								
								var chart = new CanvasJS.Chart("chartContainer", {
									animationEnabled: true,
									exportEnabled: true,
									title:{
										text: ""
									},
									subtitles: [{
										text: ""
									}],
									data: [{
										type: "pie",
										showInLegend: "true",
										legendText: "{label}",
										indexLabelFontSize: 10,
										indexLabel: "{label} - #percent%",
										yValueFormatString: "฿#,##0",
										dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
									}]
								});
								chart.render();
								
								}
							</script>

						<!-- One -->
							<section id="one" class="wrapper spotlight style1" style="box-shadow: #fff;">
								<div class="inner" style="width: 100%; padding-left: 0%; background-color: #fff; box-shadow: #fff;">
									
									<div class="content">
										<div id="chartContainer" style="height: 470px; width: 100%;"></div>
										<script src="canvasjs.min.js"></script>
									</div>
								</div>
							</section>

						

						<!-- Four -->
							

					

						<!-- Two -->
							

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
							<h2 style="text-align: center;">Menaxhimi i te dhenave</h2>
								<div class="inner" style="text-align: center;">
								<a href="Regjistrohu.php" class="button" >Modifiko te dhenat</a> 
								</div>
							</section>

				</section>

				<!-- Footer -->
				<section id="footer">
						<div class="inner">
							<h2 class="major">Kontakti</h2>
							<p>Kjo eshte forma e kontaktit ku ju mund te na kontaktoni per cfardo parregullsie ose pytje qe keni</p>
							<form method="post" action="#">
								<div class="fields">
									<div class="field">
										<label for="email">Emaili</label>
										<input type="email" name="email" id="email" />
									</div>
									<div class="field">
										<label for="name">Subijekti</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="message">Mesazhi</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" class="primary" value="Dergo" /></li>
								</ul>
							</form>
							<ul class="contact">
								<li class="icon solid fa-home">
									Untitled Inc<br />
									1234 Somewhere Road Suite #2894<br />
									Nashville, TN 00000-0000
								</li>
								<li class="icon solid fa-phone">(000) 000-0000</li>
								<li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
								<li class="icon brands fa-twitter"><a href="#">twitter.com/untitled-tld</a></li>
								<li class="icon brands fa-facebook-f"><a href="#">facebook.com/untitled-tld</a></li>
								<li class="icon brands fa-instagram"><a href="#">instagram.com/untitled-tld</a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled Inc. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>