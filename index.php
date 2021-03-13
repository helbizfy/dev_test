<?php include("validate.php"); ?>


<html lang="lv ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/511e81d08a.js" crossorigin="anonymous"></script>
    <script id="js" src="script.js"></script>
    <title>MAGEBIT_Web Developer Test</title>
</head>

<body>

    <div class="main-container">
        <div class="flexbox-col-1">
            <nav class="navbar">
                <div class="logo">
                    <div><img class="img-pinapple" src="Images/Union.png"></div>
                    <div><img class="img-txt" src="Images/pineapple.png"></div>
                </div>
                <div class="nav-links">
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">How it Works</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div class="newsletter" id="newsletter" oninput="validateEmail(email)">
                <div class="headings-nl">
                    <h1>Subscribe to newsletter</h1>
                    <h2>Subscribe to our newsletter and get 10% discount on pineapple glasses.</h2>
                </div>
                <form method="POST" action="">
                    <div class="subscribe-nl">
                        <input type="email" name="email" id="email" placeholder="Type your email adress here...">
                        <input type="submit" name="submit" value="" class="submit-email" id="submit-email"></input>
                    </div>
                    <div class="error">
                        <span id="error"><?php echo htmlspecialchars($error); ?></span>
                    </div>
                    <div class="terms">
                        <input type="checkbox" id="terms" name="terms">
                        <label for="terms">I agree to <b><u>terms of service</u></b></label>
                    </div>
                </form>

                <div class="hl"></div>
            </div>
            <div class="subscribed" id="subscribed">
                <div class="headings-nl">
                    <img src="Images/win.svg" alt="">
                    <h1>Thanks for subcribing</h1>
                    <h2>You have successfully subscribed to our email listing. Check your email for the discount
                        code.
                    </h2>
                </div>
                <div class="hl"></div>
            </div>
            <footer>
                <div class="footer-content">
                    <ul class="socials">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>
        <div class="flexbox-col-2">
            <div class="bg-image"></div>
        </div>
    </div>

</body>

</html>