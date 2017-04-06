<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Briana Crandall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css">
    <link rel="stylesheet" href="css/mini.css">

  </head>

  <body>
      <nav role="navigation">
        <ul class="desktop">
          <li class="active"><a href="index.html"  title="To Portfolio Page">Portfolio</a></li>
          <li><a href="about.php"  title="To About Page">About</a></li>
          <li><a href="#bottom" title="Scroll down to contact form">Contact</a></li>
          <li>
            <a href="https://github.com/BrianaCran" target="_blank" title="To github profile"><i class="fa fa-github" aria-hidden="true"></i></a>
            <a href="https://twitter.com/briana_crandall" target="_blank"  title="To twitter profile"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/briana-crandall-6714259a" target="_blank"  title="To linkedin profile"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </li>
        </ul>
        <ul class="mobile dropDown">
          <h2 class="dropBtn">Menu</h2>
          <div class="dropContent">
          <li class="active"><a href="index.html" title="To Portfolio Page">Portfolio</a></li>
          <li><a href="about.php" title="To About Page">About</a></li>
          <li><a href="#bottom" title="Scroll down to contact form">Contact</a></li>
          <li class="mediaLinks">
            <a href="https://github.com/BrianaCran" target="_blank" title="To github profile"><i class="fa fa-github" aria-hidden="true"></i></a>
            <a href="https://twitter.com/briana_crandall" target="_blank"  title="To twitter profile"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/briana-crandall-6714259a" target="_blank"  title="To linkedin profile"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </li>
          </div>
        </ul>
      </nav>

      <header>
        <article>
            <section class="leftSide">
                <img src="images/pftgBG.png" alt="Prey for the Gods Project Front Page Image">
            </section>
            <section class="rightSide">
              <h1>Prey for the Gods</h1>
              <p>Prey for the Gods is a game currently being developed by a gaming studio comprised of only three developers. They have gotten past the first hurrdle of
                 acquiring funding and put together a quick website. This website is good enough to convey information to those looking for it, but because of time constraints
                 faced by the developers it lacks in the quality that most gamers are used to seeing and the organization of information could be presented in a better way.
             </p>
            </section>
        </article>
      </header>

      <main role="main">
          <!--Final Project Prey For The Gods -->
            <article>
               <section class="listSection">
                 <h1>The Process</h1>
                 <p>
                   With this project I knew there were a important factors to take in before I could start to redesign the content of the website. I wanted to give the feeling
                   of familiarity for those already comfortable with the site, but bring about a freshness to attract and gain new potential gamers. I acheived this by keeping the color scheme
                   as it was because it fit the theme of the game well. I created a few additional graphical content keeping within the color scheme and using one contrasting color. The border texture was done
                   in illustrator and the background in photoshop. The rest of the site could use content already available that just could be spread around more. Other than that just taking
                   the time to pay attention to small details would make this redesign an improvement over the old one.
                </p>
                 <ul>
                    <h3>Process</h3>
                    <li>Sketching</li>
                    <li>Wireframes</li>
                    <li>Mockups</li>
                    <li>Html, Css, Jquery</li>
                 </ul>
                 <ul>
                   <h3>Materials Used</h3>
                   <li>Sketching Supplies</li>
                   <li>Illustrator</li>
                   <li>Photoshop</li>
                   <li>Atom</li>
               </ul>
               <ul>
                 <h3>If you wish to view the Wireframes and Mockups</h3>
                 <a href="documents/pftgWireframes.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Wireframes</a>
                 <a href="documents/pftgMockups.pdf" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Mockups</a>
               </ul>
              <ul>
                <h3>If you wish to view the site or the github repository:</h3>
                <a href="https://github.com/BrianaCran/PreyfortheGods" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Code</a>
                <a href="https://brianacran.github.io/PreyfortheGods/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> Live Site</a>
               </ul>
                  <img src="images/ptfgHome.jpg" class="samples">
                  <img src="images/ptfgPress.jpg" class="samples">
                  <img src="images/ptfgFAQ.jpg" class="samples">

                  <img src="images/ptfgSupport.jpg" class="samples">
                  <img src="images/ptfgM.jpg" class="samples">
                  <img src="images/ptfgM2.jpg" class="samples">
              </section>
        </article>
        <?php
            // define variables and set to empty values
            $name = $email = $subject = $message = "";
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $to = "mail@brianamcrandall.com";
            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["name"])) {
                $nameErr = "Name is required";
              } else {
                $name = test_input($_POST["name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                  $nameErr = "Only letters and white space allowed";
                }
              }

              if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }

              if (empty($_POST["subject"])) {
                $subject = "";
              } else {
                $subject = test_input($_POST["subject"]);
              }

              if (empty($_POST["message"])) {
                $message = "";
              } else {
                $message = test_input($_POST["message"]);
              }

            mail($to,$subject,$message);
            echo "<h2> &nbsp &nbsp &nbsp Message has been sent! I will get back to you soon.</h2><br/>";
          }
            ?>
      </main>

      <footer id="bottom">
        <section class="footerLeft">
          <h2>Contact Briana Crandall:</h2>
          <p>
            (919)-356-2477
          </p>
          <p>
            briana.marie.crandall@gmail.com
          </p>
          <p>&#169; 2016 Briana Crandall</p>
        </section>

        <section class="footerRight">
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="Name">
                  <p>Name</p>
                  <input type="text" name="name" size="30" required <?php echo $nameErr;?>>
                </label>
                <label for="email">
                  <p>Email</p>
                  <input type="text" name="email" size="30" required <?php echo $emailErr;?>>
                </label>
                <label for="Subject of email">
                  <p>Subject</p>
                  <input type="text" name="subject" size="40" <?php echo $subjectErr;?>>
                </label>
                <label for="message">
                  <p>Message</p>
                  <textarea name="message" rows="6" cols="39" required<?php echo $messageErr;?>></textarea>
                </label>
                <br>
                <input type="submit" value="Send" class="btn">
              </form>
        </section>
      </footer>

  </body>
</html>
