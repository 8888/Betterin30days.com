<?php
    include 'include/page_elements.php';
	include 'include/database.php';
    include 'include/session.php';
?>
<!doctype HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="stylesheet.css">
		<title>Better in 30 Days</title>
	</head>
    <body>
        <?php
            insert_header();
        ?>
        <a href="manage.php">BACK</a><br>
        <?php
            $title = $_POST['title'];
            $text = $_POST['text'];
            $img = $_POST['image'];

            settype($title, 'string');
            settype($text, 'string');
            settype($img, 'string');

            $insert_new_post = "INSERT INTO blog (title, text, image) VALUES ('$title', '$text', '$img')";
            $result = mysqli_query($db, $insert_new_post); // returns if successful or not

            if ($result) {
                echo '<p>Add Successful!</p>';
            } else {
                echo '<p>Error! Add failed!';
            }

            mysqli_close($db);
        ?>
    </body>
</html>