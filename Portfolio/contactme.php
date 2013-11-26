<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mark Annandale's Portfolio Website - Contact info</title>
        <link rel="stylesheet" href="style.css" media="screen">
    </head>
    <body>
        <header><img src="images/Logo.PNG" width="160" height="110"></header>
        <div id="nav">
            <nav>
                <ul>
                    <li><a href="index.html" title="Home">Home</a></li>
                    <li><a href="aboutme.html" title="About Me">About Me</a></li>
                    <li><a href="projects.html" title="Projects">Projects</a></li>
                    <li><a href="services.html" title="Services">Services</a></li>
                    <li><a href="https://github.com/Markannandale" title="GitHub">GitHub</a></li>
                    <li id="active"><a href="contactme.html" title="Contact Me">Contact Me</a></li>
                    <li><a href="login.php" title="Business Contacts">Business Contacts</a></li>
                </ul>
            </nav>
        </div>
        <!--Personal Contact info-->
        <div id="contact">
            <ul>
                <li>Phone: (705) 252-7976</li>
                <li>email: markannandale@rogers.com</li>
            </ul>
        </div>
        <!--Links to social networking sites I use-->
        <aside id="connected2">
            <h5>Keep Connected</h5>
            <ul>
                <li><a href="https://www.facebook.com/mark.annandale.92">FaceBook</a></li>
                <li><a href="http://www.linkedin.com">LinkedIn</a></li>
            </ul>
        </aside>
        <footer>
            <p class="footer">Copyright &copy;2013 Creative Index Studios, Inc.</p>
        </footer>
        <?php
            $iphone = strpos($_SERVER[HTTP_USER_AGENT], "iPhone");
            $android = strpos($_SERVER[HTTP_SERVER_AGENT], "Android");
            $blackberry = strpos($_SERVER[HTTP_USER_AGENT], "Blackberry");
            
            if (($iphone == TRUE) or ($android == TRUE) or ($blackberry == TRUE)) {
                if ($_GET["view"] != "full")
                {
                    header("Location: http://webdesign4.georgianc.on.ca/~200217996/PortfolioMobile/index.html");
                }
            }
        ?>
    </body>
</html>