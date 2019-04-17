<!DOCTYPE html>
<html>

<head lang="en-US">
    <title>Security Alerter</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width-device-width, initial-scale=1.0" />
    <meta name="author" content="Reftu Paul Alexandru, Ruse Daniel Stefan, Popescu Flavius-Petru" />
    <meta name="description"
        content="The Web App Security Alerter is meant to serve as a guide to achieving better security inside and outside of the Internet, to protect user's private data across all domains and to instruct developers on how to engineer their own secure applications." />
    <!-- Icon obtained from: https://www.isw-online.de/praesident-trump-vs-privacy-shield/  -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>

<body>
    <?php 
        include("Header.php"); 
        include("Navbar.php");
    ?>

    <main class="rmain">
    <div class="register">
            <!-- https://fandi-conference.com/register-icon/ -->
            <img id="registerPhoto" src="assets/images/register.png" alt="Register Photo"> 
        <h1>Register</h1>
        <form action=/register> <div>
            <label>Username*:</label>
            <input type="text" required id="registerUsername" placeholder="Enter your username" />
    </div>
    <div>
        <label >Password*:</label>
        <input type="password" required class="registerPassword" placeholder="Enter your password" />
    </div>
    <div>
        <label>Repeat Password*:</label>
        <input type="password" required class="registerPassword" placeholder="Repeat password" />
    </div>
    <div>
        <label>E-mail*:</label>
        <input type="text" required id="registerEmail" placeholder="Enter your E-mail" />
    </div>
    <div>
        <label>Age:</label>
        <input type="number" id="registerAge" placeholder="Enter your age" />
    </div>
    <div>
        <label>Sex:</label>
        <input type="text" id="registerSex" placeholder="Enter your sex" />
    </div>
    <p id="required">All fields with * are required for register.</p>
    <button type="submit">Register</button>
    </form>
    </div>
</main>


    <?php
        include("Footer.php");
    ?>
</body>
</html>
