<?php
    include '../include/page_elements.php';
	include '../include/database.php';
    include '../include/session.php';
?>
<!doctype HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../style/stylesheet.css">
		<title>Better in 30 Days</title>
	</head>
    <body>
        <?php
            insert_header();
        ?>
        <a href="manage.php">Back to manage posts</a><br>
        <?php
            $edit_title = $_POST['title'];
            $edit_text = $_POST['text'];
            $edit_img = $_POST['image'];

            settype($title, 'string');
            settype($text, 'string');
            settype($img, 'string');

            $provided_id = $_GET["id"];

            $blog_data = mysqli_query($db, "SELECT * FROM pto_tracker.blog WHERE id = '$provided_id';")
                    or die("Query failed");
                
            $row = mysqli_fetch_array($blog_data);
            $title = $row['title'];
            $text = $row['text'];
            $img = $row['image'];

            if (strlen($edit_title) == 0)
                $edit_title = $title;
            if (strlen($edit_text) == 0)
                $edit_text = $text;
            if (strlen($edit_img) == 0)
                $edit_img = $img;

            $update_post = "UPDATE blog SET title='$edit_title', text='$edit_text', image='$edit_img' WHERE id = '$provided_id'";
            $result = mysqli_query($db, $update_post); // returns if successful or not

            if ($result) {
                echo '<p>Edit Successful!</p>';
            } else {
                echo '<p>Error! Edit failed!';
            }

            mysqli_close($db);
        ?>
    </body>
</html>