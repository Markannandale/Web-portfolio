<!DOCTYPE html>
<!-- File name: index.html
     Author: Mark Annandale
     Website name: Mark Annandale's Portfolio Website
     Description: This is the home page for my site. It contains a welcom statement, a 'keep connected panel, a 'call to action button, and links to my featured work.
-->
<html lang="en">
    <head>
        <title>Mark Annandale's Portfolio Website</title>
        <link rel="stylesheet" href="style.css" media="screen">
        <style>
    /* Prevents slides from flashing */
    #slides {
      display:none;
    }
  </style>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="jquery.slides.min.js"></script>
<!--javascript for slider-->
  <script>
    $(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 528
      });
    });
  </script>
    </head>
    <body>
        <!-- Web page title -->
        <header><img src="images/Logo.PNG" width="160" height="110"></header>
        <!-- Navbar with links -->
        <div id="nav">
            <nav>
                <ul>
                    <li id="active"><a href="index.html" title="Home">Home</a></li>
                    <li><a href="aboutme.html" title="About Me">About Me</a></li>
                    <li><a href="projects.html" title="Projects">Projects</a></li>
                    <li><a href="services.html" title="Services">Services</a></li>
                    <li><a href="https://github.com/Markannandale" title="GitHub">GitHub</a></li>
                    <li><a href="contactme.html" title="Contact Me">Contact Me</a></li>
                    <li><a href="login.php" title="Business Contacts">Business Contacts</a></li>
                </ul>
            </nav>
        </div>
        <!-- Welcome statement and mission statement -->
        <div id="content">
            <h2>Welcome to my site</h2>
            <h3>My skills lie in web developing and application programming</h3>
            <p>I'm training myself to use these skills in order to eventually become a game designer or web programmer. To me, the web environment just seems like such an exciting place to work. I'm a very creative person, and I wish to try and spread my creativity to others in the best way possible. Also, I just love the felling of looking at something and being able to say "I did that".</p>
        </div>
        <!-- An alternate link to the projects page -->
        <div id="callToAction">
            <a href="projects.html" title="More Projects">View More Work</a>
        </div>
        <!-- Links to my featured work -->
        <div id="slides">
            <a href="project2.html"><img src="images/Capture.PNG" width="240" height="147"></a>
            <a href="http://webdesign4.georgianc.on.ca/~200217996/Assignment1/report.php"><img src="images/Capture2.PNG" width="240" height="147"></a>
            <a href="http://webdesign4.georgianc.on.ca/~200217996/Assignment2/viewcharacter.php"><img src="images/Capture3.PNG" width="240" height="147"></a>
        </div>
        <!-- Links to social sites I use -->
            <aside id="connected">
                <h5>Keep Connected</h5>
                <ul>
                    <li><a href="https://www.facebook.com/mark.annandale.92">FaceBook</a></li>
                    <li><a href="http://www.linkedin.com">LinkedIn</a></li>
                </ul>
            </aside>
        <!-- Site footer -->
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
