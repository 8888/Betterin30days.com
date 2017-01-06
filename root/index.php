<?php
	include 'include/page_elements.php';
	include 'include/database.php';
?>
<!doctype HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="style/stylesheet.css">
		<link type="text/css" rel="stylesheet" href="style/skin_index.css">
		<title>Better in 30 Days</title>
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
				<?php
					$blog_data = mysqli_query($db, "SELECT * FROM pto_tracker.blog ORDER BY id DESC;")
            			or die("Query failed");
					
					while ($row = mysqli_fetch_array($blog_data)) {
						$title = $row['title'];
						$text = $row['text'];
						$img = $row['image'];

						echo
						'<div class="entry">
							<h1>'.$title.'</h1>
							<p>'.$text.'</p>
							<img class="wideimage" src="'.$img.'">
						</div>';
					}
					mysqli_close($db);
				?>
			</div>
		</div>
	</body>
</html>