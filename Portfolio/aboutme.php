<!DOCTYPE html>
<!-- File name: index.html
     Author: Mark Annandale
     Website name: Mark Annandale's Portfolio Website
     Description: This part of the site contains a short biography about myself.
-->
<html lang="en">
    <head>
        <title>Mark Annandale's Portfolio Website - About me</title>
        <link rel="stylesheet" href="style.css" media="screen">
    </head>
    <body>
        <!-- Web page title -->
        <header><img src="images/Logo.PNG" width="160" height="110"></header>
        <!-- Navbar with links -->
        <div id="nav">
            <nav>
                <ul>
                    <li><a href="index.html" title="Home">Home</a></li>
                    <li id="active"><a href="aboutme.html" title="About Me">About Me</a></li>
                    <li><a href="projects.html" title="Projects">Projects</a></li>
                    <li><a href="services.html" title="Services">Services</a></li>
                    <li><a href="https://github.com/Markannandale" title="GitHub">GitHub</a></li>
                    <li><a href="contactme.html" title="Contact Me">Contact Me</a></li>
                    <li><a href="login.php" title="Business Contacts">Business Contacts</a></li>
                </ul>
            </nav>
        </div>
        <!--short biography-->
        <div id="content">
        <h2>About</h2>
        <p><img src="images/profile.jpg" width="240" height="240"></p>
        <p>I am currently a second year student enrolled in the computer programming analyst program at Georgian College, which mainly focuses on application programming and web design/programming. I have published several webpages that I have created on the schools web design server for viewing, most of them having functional php coded features(i.e. login, database, etc.). I am a very creative individual and I always try to display my creativity in my work.</p>
        </div>
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
