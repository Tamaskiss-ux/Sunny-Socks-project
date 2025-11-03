<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Contact</title>
    <link rel="icon" type="image/ico" href="../../Fontsandimages/Illustraties/png/Sunny_socks_Yellow.png">
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
    <div class="content">
        <header>
            <div id="headerlogo">
                 <a href="../Homepage/Index.html">
                 <img id="headerlogoimg" src="../../Fontsandimages/Logos/png/sunny_logos_orange.png" alt="Logos Orange">
                 </a>
            </div>
            <div id="links">
                <div><a href="../Products/Products.html">Products</a></div>
                <div><a href="../Sustainability/Sustainability.html">Sustainability</a></div>
                <div><a href="../Contact/Contact.html">Contact</a></div>
                <div><a href="../About/About.html">About us</a></div>
            </div>
        </header>

        <main>
            <div class="gridbox">
                <div class="contacttext">
                    <h1>Contact us for inquiries</h1>
                    <p>Have any question? You can email us directly isung this template bellow.</p>
                    <p>If you are reaching out regarding an order, please provide your order number, and the email adress ised as checkout, to enable us to help you faster.</p>
                </div>
                <div class="addinform">
                    <div class="add-grid">
                        <h2 class="add-header">Additional Contact Information</h2>
                        <img class="img-left" src="../Contact/img/Img1.png" alt=""> 
                        <img class="img-right" src="../Contact/img/img3.png" alt="">
                        <img class="img-bottom-l" src="../Contact/img/img2.png" alt="">
                        <img class="img-bottom-r" src="../Contact/img/img4.png" alt="">
                    </div>
                </div>
                <div class="form">
                    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                        <label class="fname" for="fnme">First Name:</label>
                        <input class="fname" type="text" id="fnme" name="fname">
                        <label class="lastname" for="lname">Last Name:</label>
                        <input class="lastname" type="text" id="lname" name="lname">
                        <label class="email" for="email">Email:</label>
                        <input class="email" type="text" id="email" name="email"> 
                        <label class="subj" for="subject">Subject:</label>
                        <input class="subj" type="text" id="subject" name="subject">
                        <label class="ordnum" for="ordernumber">Order Number:</label>
                        <input class="ordnum" type="text" id="ordernumber" name="ordernumber">
                        <label class="addcomm" for="addcomments">Additional Comments:</label>
                        <input class="commtext" type="text" id="addcomments" name="addcomments">
                    </form>
                </div>
            </div>
        </main>

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
                <div> <p>&#169;2025 Sunny Socks</p>
            </div>
        </footer>
    </div>
</body>
</html>