<?php
	include '../include/page_elements.php';
	include '../include/database.php';
    include '../include/session.php';
?>
<!doctype HTML>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="../style/stylesheet.css">
        <link type="text/css" rel="stylesheet" href="../style/skin_index.css">
		<title>Better in 30 Days</title>
	</head>
    <body>
        <?php
            insert_header();
        ?>
        <div id="posts">
            <?php
                $provided_id = $_GET["id"];

                $blog_data = mysqli_query($db, "SELECT * FROM pto_tracker.blog WHERE id = '$provided_id';")
            			or die("Query failed");
                    
                $row = mysqli_fetch_array($blog_data);
                $title = $row['title'];
                $text = $row['text'];
                $img = $row['image'];

                echo
                '<div class="entry">
                    <h1>'.$title.'</h1>
                    <p>'.$text.'</p>
                    <img class="wideimage" src="../'.$img.'">
                </div>';

                mysqli_close($db);
            ?>
        </div>
        <div id="edit">
            <h1>Edit Post</h1><br>
            <p>Leave any input blank to keep current entry</p><br>
            <div id="new_post">
                <?php
                echo
                '<form method="post" action="submitedit.php?id='.$provided_id.'">';
                ?>
                    Title:
                    <input type="text" name="title" id="title_input"><br>
                    Text:
                    <input type="text" name="text" id="text_input"><br>
                    Image URL:
                    <input type="text" name="image" id="image_input"><br>
                    <input type="submit" name="submit"><br>
                </form>
            </div>
            <a href="manage.php">Back to manage posts</a><br>
        </div>
    </body>
</html>