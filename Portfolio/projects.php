<!DOCTYPE html>
<!-- File name: index.html
     Author: Mark Annandale
     Website name: Mark Annandale's Portfolio Website
     Description: This part of the site contains links to pages on the site containing info on the displayed projects.
-->
<html lang="en">
    <head>
        <title>Mark Annandale's Portfolio Website - projects</title>
        <link rel="stylesheet" href="style.css" media="screen">
    </head>
    <body>
        <header><img src="images/Logo.PNG" width="160" height="110"></header>
        <div id="nav">
            <nav>
                <ul>
                    <li><a href="index.html" title="Home">Home</a></li>
                    <li><a href="aboutme.html" title="About Me">About Me</a></li>
                    <li id="active"><a href="projects.html" title="Projects">Projects</a></li>
                    <li><a href="services.html" title="Services">Services</a></li>
                    <li><a href="https://github.com/Markannandale" title="GitHub">GitHub</a></li>
                    <li><a href="contactme.html" title="Contact Me">Contact Me</a></li>
                    <li><a href="login.php" title="Business Contacts">Business Contacts</a></li>
                </ul>
            </nav>
        </div>
        <!--project screenshots with links-->
        <div id="projects">
            <h2>Projects</h2>
            <p>To see the projects in more detail, click on the images below.</p>
            <div id="images">
                <a href="http://webdesign4.georgianc.on.ca/~200217996/Assignment1/report.php"><img src="images/Capture2.PNG" width="240" height="147"></a>
                <a href="http://webdesign4.georgianc.on.ca/~200217996/Assignment2/viewcharacter.php"><img src="images/Capture3.PNG" width="240" height="147"></a>
                <a href="project1.html"><img src="images/Capture4.PNG" width="240" height="147"></a>
                <a href="project2.html"><img src="images/Capture.PNG" width="240" height="147"></a>
            </div>
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
