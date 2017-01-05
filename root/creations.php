<?php
	include 'include/page_elements.php';
?>
<!doctype HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<link type="text/css" rel="stylesheet" href="skin_artwork.css"> <!--Same stylesheet as artwork.html-->
		<title>Better in 30 Days | Creations</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<div id="main">
			<?php
				insert_header();
				insert_sidebar();
			?>
			<div id="content">
				<h1>CREATIONS</h1>
				<div class="twocolumns"> <!--Left Column-->
					<img src="img/creations/box1.jpg">
					<img src="img/creations/box2.jpg">
				</div>
				<div class="twocolumns"> <!--Right Column-->
					<img src="img/creations/clock1.jpg">
					<img src="img/creations/clock2.jpg">
				</div>
			</div>
		</div>
	</body>
</html>