<?php session_start();

 $correu = $_SESSION['correu'];
 $nom = $_SESSION['nom'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Don't belive your lying eyes</title>
    <link rel="stylesheet" type="text/css" href="./estilo.css">
  </head>
  <body>
    <header>
      <div id="user-preview">
        <p>Bienvenido, <?php echo $nom; ?></p>
        <p><?php echo $correu; ?></p>
      </div> 
      <h1>Don't believe your lying eyes</h1>
      <nav>
        <ul>
          <li><a href="logeado.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="./login.html">Log in</a></li>
          <li><a href="./registre.html">Create Account</a></li>
          <li><a href="noticias.php">Recent News</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="welcome">
        <h2>Welcome</h2>
        <p>Are you tired of reading boring, unbiased news stories that present both sides of an issue? Do you long for the good old days when journalists openly supported one political party over the other? Well, you're in luck! Our news site is here to provide you with all the sensational headlines and slanted reporting you could ever want. We don't believe in facts or fairness; we believe in clicks and controversy. So join us on this wild ride through the twisted world of modern media, where truth is optional and outrage is king. And remember, if you're not outraged, you're not paying attention!</p>
      </section>
      <section id="about">
        <h2>About Us</h2>
        <p>Welcome to our news site, where we take pride in being the very embodiment of everything that's wrong with modern journalism. We promise to bring you the truth, the whole truth, and nothing but the truth... as long as it aligns with our political biases, of course.</p>
        <p>Our team of 'reporters' works tirelessly to spin the facts in whatever direction generates the most clicks, because let's face it, ratings are more important than accuracy these days. We believe in the power of a good headline to stir up controversy and attract attention, even if it means sacrificing journalistic integrity in the process. And with our cutting-edge technology and data-driven approach, we're able to deliver personalized news that confirms your existing biases and validates your worst fears.</p>
        <p>But here's the catch: in order to see our actual news content, you'll need to sign in. Why? Because we want to make sure that only the most dedicated and loyal readers get access to our most sensational stories. Plus, it gives us a chance to collect all sorts of juicy data on your browsing habits, which we can then use to serve you even more targeted ads. So go ahead, create an account and sign in. It's the only way to get the full experience of our carefully curated content. Thanks for stopping by, and remember, don't believe everything you read... except for us, of course.</p>
      </section>
      <section id="contact">
        <h2>Contact us</h2>
        <p>If you ever want to contact us to join our eternal crusade against good journalism and facts, fill out our form below:</p>
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