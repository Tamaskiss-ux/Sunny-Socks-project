<?php
    $errors = [];
    $fname = $lname = $email = $subject = $ordernumber = $addcomments = "";
    $successMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["fname"])) {
            $errors["fname"] = "Please enter your First Name.";
        } else {
            $fname = htmlspecialchars(trim($_POST["fname"]));
        }

        if (empty($_POST["lname"])) {
            $errors["lname"] = "Please enter your Last Name.";
        } else {
            $lname = htmlspecialchars(trim($_POST["lname"]));
        }

        if (empty($_POST["email"])) {
            $errors["email"] = "Please enter your Email.";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format.";
        } else {
            $email = htmlspecialchars(trim($_POST["email"]));
        }

        if (empty($_POST["subject"])) {
            $errors["subject"] = "Subject is required.";
        } else {
            $subject = htmlspecialchars(trim($_POST["subject"]));
        }

        if (empty($_POST["ordernumber"])) {
            $errors["ordernumber"] = "Order number is required.";
        } else {
            $ordernumber = htmlspecialchars(trim($_POST["ordernumber"]));
        }

        if (empty($_POST["addcomments"])) {
            $errors["addcomments"] = "Additional comments are required.";
        } else {
            $addcomments = htmlspecialchars(trim($_POST["addcomments"]));
        }

        if (empty($errors)) {
            $successMessage = "Thank you, $fname $lname. Your message has been received.";
        // } else {
        //     foreach ($errors as $error) {
        //         echo "<p style='color:red;'>$error</p>";
        //     }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny | Contact</title>
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
    <div class="content">
        <!--header part-->
        <header>
            <div id="headerlogo">
                <a href="../Homepage/Index.php">
                    <img id="headerlogoimg" src="../../Fontsandimages/Logos/png/sunny_logos_blue.png" alt="Logos Orange">
                </a>
            </div>
            <div class="dropdown">
                <button class="button"><img src="../../Fontsandimages/menu/menu.png" alt="menu"></button>
                <ul id="links">
                    <li><a href="../Products/Products.html">Products</a></li>
                    <li><a href="../Sustainability/Sustainability.html">Sustainability</a></li>
                    <li id="Orange">Contact</li>
                    <li><a href="../About/About.html">About us</a></li>
                </ul>
            </div>
        </header>
        <!--header part-->

        <!-- main part -->
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
                        <label class="fname" for="fname">First Name:</label>
                        <input class="fname" type="text" id="fname" name="fname">
                        <span class="error"><?php echo $errors["fname"] ?? ""; ?></span>

                        <label class="lastname" for="lname">Last Name:</label>
                        <input class="lastname" type="text" id="lname" name="lname">
                        <span class="error"><?php echo $errors["lname"] ?? ""; ?></span>

                        <label class="email" for="email">Email:</label>
                        <input class="email" type="text" id="email" name="email"> 
                        <span class="error"><?php echo $errors["email"] ?? ""; ?></span>

                        <label class="subj" for="subject">Subject:</label>
                        <input class="subj" type="text" id="subject" name="subject">
                        <span class="error"><?php echo $errors["subject"] ?? ""; ?></span>

                        <label class="ordnum" for="ordernumber">Order Number:</label>
                        <input class="ordnum" type="text" id="ordernumber" name="ordernumber">
                        <span class="error"><?php echo $errors["ordernumber"] ?? ""; ?></span>

                        <label class="addcomm" for="addcomments">Additional Comments:</label>
                        <textarea class="commtext" id="addcomments" name="addcomments"></textarea>
                        <span class="error"><?php echo $errors["addcomments"] ?? ""; ?></span>
                        
                        <div class="submitbutton">
                            <input class="submitbtn" type="submit" value="Submit">
                            <span class="success"><?php echo $successMessage; ?></span>
                        </div>
                </div>
            </div>
            <div id="forofor">
                <a href="../404 page/404 page.html">Click here for the 404 page</a>
            </div>
        </main>
        <!-- main part -->

        <!--footer part-->
        <footer>
            <div class="footerleftalign">
                <p>7811 AP, Raadhuisplein 1, Emmen, Nederland</p>
            </div>
            <div class="icons">
                <p>Follow us:</p>
                <div>
                <a href="https://www.facebook.com/"><img src="../../Fontsandimages/Social/Facebook.png" alt="Facebook"></a>                <a href="https://www.instagram.com/"><img src="../../Fontsandimages/Social/Instagram.png" alt="Instagram"></a>
                <a href="https://www.linkedin.com/"><img src="../../Fontsandimages/Social/linkedin.png" alt="Linkedin"></a>
                <a href="https://x.com/"><img src="../../Fontsandimages/Social/Twitter.png" alt="Twitter"></a>
                </div> 
            </div>
                <div> <p>&#169;2025 Sunny Socks</p>
            </div>
        </footer>
        <!--footer part-->

    </div>
</body>
</html>