<?php session_start();

//$correu = $_SESSION['correu'];
//$nom = $_SESSION['nom'];
//$apiKey = '51f1e9c7761c4ccfb95aadfd5e04041a';
//$newsUrl = 'https://newsapi.org/v2/top-headlines?country=us&apiKey='.$apiKey;
//$newsJson = file_get_contents($newsUrl);
//$newsArray = json_decode($newsJson, true);
//$articles = $newsArray['articles'];

///Arreglar abajo

$apiKey = '51f1e9c7761c4ccfb95aadfd5e04041a';
$country = 'us';
$newsUrl = 'https://newsapi.org/v2/top-headlines?country=' . $country . '&apiKey=' . $apiKey;
$headers = array(
  'User-Agent: YourApp/1.0'
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_URL, $newsUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$newsJson = curl_exec($ch);
curl_close($ch);

if ($newsJson === false) {
    echo "Error al obtener noticias: " . curl_error($ch);
} else {
    $newsArray = json_decode($newsJson, true);
    $articles = $newsArray['articles'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Noticias recientes</title>
    <link rel="stylesheet" type="text/css" href="./estilo.css">
</head>
<body>
    <header>      
	  <div id="user-preview">
        <p>Bienvenido, <?php echo $nom; ?></p>
        <p><?php echo $correu; ?></p>
      </div>       
      <h1>Noticias recientes</h1>
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
	<?php 
   foreach ($articles as $article) : 
  ?>
		<section>
			<h2><?php echo $article['title']; ?></h2>
			<p><?php echo $article['description']; ?></p>
			<a href="<?php echo $article['url']; ?>" target="_blank">Leer más</a>
   </section>
  <?php endforeach; ?>
   </main>
</body>
</html>