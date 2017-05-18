<!DOCTYPE html>
<html>
<head>
    <title>Sebastian Setla Photography | Gallery</title>
    <link href="css/common.css" rel="stylesheet">
    <link href="css/gallery.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dynalight" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/gallery.js"></script>
</head>
<body>
    <div id="logoDiv">
        <h1>Sebastian Setla Photography</h1>
    </div>
    <div id="navBar">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutme.php">About Me</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="rates.php">Rates</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Gallery</h1>
        <ul id="subgallery">
            <li>
                <a href="gallery.php?category=categoryA">Category A</a> 
            </li>
            |
            <li>
                <a href="gallery.php?category=categoryB">Category B</a>
            </li>
            |
            <li>
                <a href="gallery.php?category=categoryC">Category C</a>
            </li>
        </ul>
        <?php
            $sub = "";
            if (isset($_GET['category'])) {
                $sub = $_GET['category'];
            } else {
                $sub = "categoryA";
            }
            $dirname = "images/" .$sub. "/*.jpg";
            $images = glob($dirname, GLOB_BRACE);
            
            foreach($images as $image) {
                echo "<img src = \"" .$image. "\">";
            }
        ?>
    </div>
    <div id="fadeoutBG">
    </div>
    <div id="popup"></div>
</body>
</html>