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
          <li><a href="index.html"  title="To Portfolio Page">Portfolio</a></li>
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
          <li><a href="index.html">Portfolio</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#bottom">Contact</a></li>
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

            </section>
            <section class="codepen">
            </section>
        </article>
      </header>

      <main role="main">
        <article>
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
                }
                mail($to,$subject,$message);
                echo "Message has been sent! I will get back to you soon.";
                ?>
        </article>
      </main>

      <footer>
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
