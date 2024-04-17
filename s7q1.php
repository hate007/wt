<?php
$xmlFile = "movie.xml";
$doc = new DOMDocument();
$doc->load($xmlFile);
$movies = $doc->getElementsByTagName("movie");

foreach ($movies as $movie) {
    $title = $movie->getElementsByTagName("movieTitle")->item(0)->nodeValue;
    $actor = $movie->getElementsByTagName("actorName")->item(0)->nodeValue;
    echo "Movie Title: $title, Actor Name: $actor\n";
    echo "<br>";
}
?>
