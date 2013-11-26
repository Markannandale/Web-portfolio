<!DOCTYPE html>
<html>
    <head>
        <title>Mark Annandale's Portfolio Website - Retro Project Micro Site</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
        <div id="project">
            <!--Info on the selected project-->
            <h2>Retro Project Micro Site</h2>
            <p><img src="images/Capture4.PNG" width="240" height="147"></p>
            <p>This was my final project for my Web Authoring Fundamentals class. For this project, we had to choose a project that has been around for a while and create a small website about it. This was meant to test our understanding of web authoring principles. Since this focused purely on linking pages and site structuring, only the most basic elements of a working site are present, but all of those elements function as they should.</p>
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
