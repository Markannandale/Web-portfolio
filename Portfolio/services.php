<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mark Annandale's Portfolio Website - Services</title>
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
                    <li id="active"><a href="services.html" title="Services">Services</a></li>
                    <li><a href="https://github.com/Markannandale" title="GitHub">GitHub</a></li>
                    <li><a href="contactme.html" title="Contact Me">Contact Me</a></li>
                    <li><a href="login.php" title="Business Contacts">Business Contacts</a></li>
                </ul>
            </nav>
        </div>
        <!--Short description of the services I offer-->
        <div id="content">
            <p><img src="images/Capture.PNG" width="240" height="147"></p>
            <p>I possess strong web design skills, as well as html/css/php programming skills, so I can program functional webpages. I am also well versed in application programming, mainly the java programming environment. Additionally, I possess strong skills in database querying, and can troubleshoot most microsoft office applications.</p>
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