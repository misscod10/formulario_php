<!DOCTYPE html>
<?php session_start();

 $correu = $_SESSION['correu'];
 $nom = $_SESSION['nom'];

?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>My Friend Subscription</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <div id="user-preview">
        <p>Bienvenido, <?php echo $nom; ?></p>
        <p><?php echo $correu; ?></p>
      </div>       
      <h1>Welcome to My Friend Subscription Application</h1>
      <nav>
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="./form.html">Contact</a></li>
          <li><a href="./login.html">Log in</a></li>
          <li><a href="./registre.html">Create Account</a></li>
        </ul>
      </nav>
    </header>
    <main>
      </section>
      <section id="welcome">
        <h2>Congratulations!</h2>
        <p>Congratulations! You have been selected as a suitable candidate for being my friend. You are one of only 5 million people selected for this great purpose, do not resist.</p>
        <br>
        <p>Remember that rejecting, forgeting, or any type of faliure to reply to the form  linked in the menu above "<b>contact</b>" or the button at the end of the page is punishable by death.        Also, if your replying any other response that doesn't correspond with our sociatal norm or my specifications is also punishable by death as well.</p><br>
        <p>Now, I hope to see you on my next great supper at the "<b>MCDonals</b>" or however you primates call the great hamburger birthing place.</p>
      </section>
      <section id="about">
        <h2>Who am I?</h2>
        <p>Hello, my name is <b>Pishium the III</b>, the head Lobster of the great <b>Blue Lobsta Emporium</b>. Some of the highlights of my reign are:</p>
        <ul>
          <li>"I once conquered an entire galaxy just to rename every planet after my favorite type of cheese."</li><br>
          <li>"I genetically engineered a race of sentient space broccoli and forced them to fight in my armies."</li><br>
          <li>"I built a giant statue of myself on the surface of a planet, just so I could blow it up with a laser for fun."</li><br>
          <li>"I convinced an entire alien species to worship me as their god by performing magic tricks with technology they didn't understand."</li><br>
          <li>"I once destroyed an entire fleet of enemy ships by sending them a virus disguised as a cute kitten video."</li><br>
        </ul> 
      </section>
      <div class="button-container">
      <a href="form.html" class="button">Go to Form</a>
	    </div>
    </main>
    <footer>
      <p>&copy; 2023 My Website. All rights reserved.</p>
    </footer>
  </body>
</html>