<!DOCTYPE html>
<html>
<head>
    <title>Sebastian Setla Photography | Rates</title>
    <link href="css/common.css" rel="stylesheet">
    <link href="css/rates.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dynalight" rel="stylesheet">
    <script src="js/rates.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h1>Rates</h1>
        N/A
        <p>Photoshop services</p>
        <input id="opacityrange" type="range" value="0" max="100" min="0">
        <div id="editcontainer">
            <?php
                $dirname = "images/beforeAfter/*.jpg";
                $images = glob($dirname, GLOB_BRACE);
            
                $edited = $images[0];
                $unedited = $images[1];
            
                echo "<img src=\"" .$unedited. "\" alt=\"Image before being edited\">";
            
                echo "<img src=\"" .$edited. "\" alt=\"Image after being edited\" id = \"editedImage\">";
            ?>
        </div>
    </div>
</body>
</html>