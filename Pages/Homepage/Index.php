<?php
$day = date('l');

$colors = [
    'Saturday' => ['bg' => '#fecd3e', 'text' => '#fecd3e'],
    'Sunday'   => ['bg' => '#fecd3e', 'text' => '#fecd3e'],
];

if (isset($colors[$day])) {
    $bgColor = $colors[$day]['bg'];
    $textColor = $colors[$day]['text'];
} else {
    $bgColor = null;
    $textColor = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Home Page</title>
    <link rel="icon" type="image/ico" href="../../Fontsandimages/Illustraties/png/Sunny_socks_Yellow.png"/>
    <!-- Don't forget to change the name for the title of the page and the css link!-->
    <link rel="stylesheet" href="desktop_index.css" media="(min-width: 1115px)">
    <link rel="stylesheet" href="mobileportrait_index.css" media="(max-width: 800px)">
    <link rel="stylesheet" href="tabletlandscape_index.css" media="(min-width: 801px) and (max-width: 1115px)">
    <link rel="stylesheet" href="darktheme.css">
    <style>
    
    body
    {
        background-color: <?= $bgColor ?>;
        color: <?= $textColor ?>;
    }

    a
    {
        color: <?= $textColor ?>;
    }

    </style>
</head>
<body>
    <div class="content">
        <!-- Only change things in the header if you are going to add in more content to the top but than add it in to the css as well-->
        <header>
            <div id="headerlogo">
                <?php
                    $day = date('l');

                    $images = [
                        'Monday'    => '../../Fontsandimages/Logos/png/sunny_logos_orange.png',
                        'Tuesday'   => '../../Fontsandimages/Logos/png/sunny_logos_orange.png',
                        'Wednesday' => '../../Fontsandimages/Logos/png/sunny_logos_orange.png',
                        'Thursday'  => '../../Fontsandimages/Logos/png/sunny_logos_orange.png',
                        'Friday'    => '../../Fontsandimages/Logos/png/sunny_logos_orange.png',
                        'Saturday'  => '../../Fontsandimages/Logos/png/sunny_logos_yellow.png',
                        'Sunday'    => '../../Fontsandimages/Logos/png/sunny_logos_yellow.png'
                    ];

                    $imagePath = isset($images[$day]) ? $images[$day] : '../../Fontsandimages/Logos/png/default_logo.png';

                    echo "<img id='headerlogoimg' src='$imagePath' alt='$day Logo'>";
                ?>
            </div>
            <div class="dropdown">
                <button class="button"><img src="../../Fontsandimages/menu/menu.png" alt="menu"></button>
                <ul id="links">
                    <li><a href="../Products/Products.html">Products</a></li>
                    <li><a href="../Sustainability/Sustainability.html">Sustainability</a></li>
                    <li><a href="../Contact/Contact.php">Contact</a></li>
                    <li><a href="../About/About.html">About us</a></li>
                </ul>
            </div>
        </header>

        <!-- You can add in anything here and to the css part as well-->
        <main>
            <div id="mainlogo">
                <img src="../../Fontsandimages/Logos/png/sunny_logos_slogan_yellow.png" alt="Logo">
            </div>
            <div class="gridbox">
                <div>
                    <p>At Sunny Socks, our purpose is to create comfortable socks to warm people worldwide.
                        Big or small, old or young - <b>there is something for everyone.</b>
                    </p>
                    <p>
                        Our <b>new winter collection</b> aims to warm not just your feet, but your heart as well.
                        Made from <b>ethically sourced </b>cotton, it provides support for your feet during the coldest of days.
                    </p>
                </div>
                <div class="promoimage">
                    <img id="maincatalogus" src="../../Fontsandimages/catalogus/catalogus/Sunny_socks_yellow.jpg" alt="yellow socks">
                </div>
                <div class="secondtext">
                    <p>
                        We strongly believe that love is love. Sunny Socks supports love in every way, shape or form.
                    </p>
                    <p>
                        <b>The Pride Collection </b>demonstrates <b>unity</b> and <b>acceptance.</b> Our goal is to represent all of our customers,
                        and make everybody feel welcome in the Sunny community!
                    </p>
                    <p id="hidden">Click here to learn more about our <a href="../Pride/Pride.html"><b>Pride Initiative.</b></a></p>
                </div>
                <div class="pride">
                    <a href="../../Pages/Pride/Pride.html">
                        <img src="../../Fontsandimages/Pride/Pride.png" alt="Pride">
                    </a>
                </div>
            </div>
        </main>
        <!--Don't change things here-->
        <footer>
            <div class="footerleftalign">
                <p>7811 AP, Raadhuisplein 1, Emmen, Nederland</p>
            </div>
            <div class="icons">
                <p>Follow us:</p>
                <div>
                    <a href="https://www.facebook.com/"><img src="../../Fontsandimages/Social/Facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/"><img src="../../Fontsandimages/Social/Instagram.png" alt="Instagram"></a>
                    <a href="https://www.linkedin.com/"><img src="../../Fontsandimages/Social/linkedin.png" alt="Linkedin"></a>
                    <a href="https://x.com/"><img src="../../Fontsandimages/Social/Twitter.png" alt="Twitter"></a>
                </div> 
            </div>
            <div class="footerrightalign">
                <p>&#169;2025 Sunny Socks</p>
            </div>
        </footer>
    </div>

    <script src="../../Pages/Darkmode/darktheme.js"></script>
    

</body>
</html>