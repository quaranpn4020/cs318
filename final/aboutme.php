<!DOCTYPE html>
<html>
<head>
    <title>Sebastian Setla Photography | About Me</title>
    <link href="css/common.css" rel="stylesheet">
    <link href="css/aboutme.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dynalight" rel="stylesheet">
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
        <h1>About Me</h1>
        <?php
            $dirname = "images/picturesOfSeb/*.jpg";
            $images = glob($dirname, GLOB_BRACE);
        
            foreach($images as $image) {
                echo "<img src = \"" .$image. "\">";
            }
        ?>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi magna eros, dictum in dictum at, tempus sit amet lectus. Phasellus ante lorem, suscipit commodo dapibus laoreet, dictum sed augue. Morbi at luctus arcu. Ut tristique laoreet quam, sit amet tempus erat cursus at. Nam imperdiet vestibulum lectus quis placerat. Suspendisse potenti. Nulla dictum vestibulum mauris pretium dapibus. Sed id neque finibus, pharetra neque vel, facilisis tellus. Nulla ut sagittis augue. Morbi scelerisque felis ac est auctor hendrerit. Cras mollis turpis ut dui mattis, eu ultricies velit consectetur. Nam ut leo feugiat, molestie tortor vel, vehicula mauris. Nullam eget mauris nisl. Suspendisse id aliquam nisi. Nulla ut bibendum nulla.</p>

        <p>Donec at convallis nibh. Vivamus vitae commodo nisl. Vestibulum in tempus enim, sed ultrices neque. Nullam pellentesque metus vitae eros pharetra, id facilisis magna ultrices. Sed eu est sed dui venenatis blandit eu non ipsum. Duis sed dolor a massa ultricies placerat eget ut ligula. Duis pulvinar, velit eget auctor finibus, lectus risus suscipit est, ac blandit magna lacus at leo. Sed id nibh efficitur, commodo nisl sit amet, cursus erat. Aliquam nec tincidunt purus. Sed quis leo eget arcu congue varius eu vel dui. Ut sapien urna, convallis nec ipsum eu, bibendum vestibulum libero.</p>

        <p>Aenean ut venenatis eros. Ut aliquam, urna et scelerisque ornare, justo sapien dictum purus, sed congue arcu enim et velit. Aliquam pellentesque ipsum arcu, quis tempor orci vulputate quis. Suspendisse porta ultrices mauris vel commodo. Nulla consectetur ante nunc, non pellentesque massa fringilla quis. Suspendisse auctor nec felis sed iaculis. Praesent molestie mi velit, vitae tristique erat sagittis eget. Vivamus convallis, leo quis tincidunt cursus, ligula nulla faucibus turpis, nec aliquam felis arcu accumsan diam. Cras id malesuada ante, ut faucibus eros. Pellentesque erat nisi, fermentum ut pharetra nec, ornare et neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. In pharetra nulla a nisl euismod, a pulvinar nulla eleifend. Maecenas erat sapien, lobortis sed orci quis, tincidunt cursus metus. Nam interdum, risus et tristique dignissim, ligula lacus consectetur massa, sed venenatis mauris tortor laoreet risus. Sed et pharetra libero. Phasellus lectus justo, lobortis sit amet efficitur vel, dapibus at eros.</p>

    </div>
</body>
</html>