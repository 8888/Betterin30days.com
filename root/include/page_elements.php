<?php
function insert_header () {
    echo
    '<div id="header"><img src="../img/logos/header_logo.jpg"></div>';
}

function insert_sidebar () {
    echo
    '<div id="sideBar">
        <div id="artLinks">
            <a href="artwork.php">ARTWORK</a><br>
            <a class="subset" href="artwork.php">SET 3</a><br>
            <a class="subset" href="artworkset2.php">SET 2</a><br>
            <a class="subset" href="artworkset1.php">SET 1</a><br>
            <a href="clothing.php">CLOTHING</a><br>
            <a href="music.php">MUSIC</a><br>
            <a href="creations.php">CREATIONS</a><br>
        </div>
        <div id="otherLinks">
            <a href="about.php">ABOUT</a><br>
            <a href="contact.php">CONTACT</a><br>
            <a href="index.php">HOME</a><br>
        </div>
        <div id="socialLinks">
            <img src="img/logos/instagram.png"><a href="https://instagram.com/betterin30days/">INSTAGRAM</a><br>
            <img src="img/logos/soundcloud.png"><a href="https://soundcloud.com/rant-music">SOUNDCLOUD</a><br>
        </div>
    </div>';
    }
?>