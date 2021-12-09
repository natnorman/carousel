
<!DOCTYPE html>
<html>
	<head>
		<title>Carousel Demo</title>
		<meta name="robots" content="noindex" />
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<style type="text/css">
    
        @import "css/normalize.css";
        @import "css/core.css";
		</style>


	</head>
    <body>


    <?php

// $url= "https://simplejsoncms.com/api/5n6fohzdykr";
$url= "carouselItems.json";
$JSON = file_get_contents($url);
$tripsData = json_decode($JSON, true);

// print_r($tripsData);

$i = 0;
$Count = 0;


echo "<h3>" . $tripsData["title"] . "</h3>";
// echo "<p>" . $tripsData["subtitle"] . "</p>";

echo "<div class='carouselOuter small'>";
echo "<div class='row results'>";

foreach($tripsData["tripCards"] as $component){
	// echo "<a class='linkWrapper' href='" . $component["link"] . "' target='new'>";
	echo "<div class='card tripHero' style='background-image: url(https://source.unsplash.com/800x600/?" . $component["destination"] . ")'>";
	echo "<div class='tripInfo'><h2>" . $component["tripTitle"] . "</h2>";
	echo "<h4>" . $component["travelDate"] . "</h4></div>";
	echo "</div>";
	// echo "</a>";
	}
echo "</div>";
echo "</div>";



echo "<h3>" . $tripsData["title"] . "</h3>";
// echo "<p>" . $tripsData["subtitle"] . "</p>";

echo "<div class='carouselOuter medium'>";
echo "<div class='row results'>";

foreach($tripsData["tripCards"] as $component){
	// echo "<a class='linkWrapper' href='" . $component["link"] . "' target='new'>";
	echo "<div class='card tripHero' style='background-image: url(https://source.unsplash.com/800x600/?" . $component["destination"] . ")'>";
	echo "<div class='tripInfo'><h2>" . $component["tripTitle"] . "</h2>";
	echo "<h4>" . $component["travelDate"] . "</h4></div>";
	echo "</div>";
	// echo "</a>";
	}
echo "</div>";
echo "</div>";



echo "<h3>" . $tripsData["title"] . "</h3>";
// echo "<p>" . $tripsData["subtitle"] . "</p>";

echo "<div class='carouselOuter large'>";
echo "<div class='row results'>";

foreach($tripsData["tripCards"] as $component){
	// echo "<a class='linkWrapper' href='" . $component["link"] . "' target='new'>";
	echo "<div class='card tripHero' style='background-image: url(https://source.unsplash.com/800x600/?" . $component["destination"] . ")'>";
	echo "<div class='tripInfo'><h2>" . $component["tripTitle"] . "</h2>";
	echo "<h4>" . $component["travelDate"] . "</h4></div>";
	echo "</div>";
	// echo "</a>";
	}
echo "</div>";
echo "</div>";



echo "<h3>" . $tripsData["title"] . "</h3>";
// echo "<p>" . $tripsData["subtitle"] . "</p>";

echo "<div class='carouselOuter medium slim'>";
echo "<div class='row results'>";

foreach($tripsData["tripCards"] as $component){
	// echo "<a class='linkWrapper' href='" . $component["link"] . "' target='new'>";
	echo "<div class='card tripHero' style='background-image: url(https://source.unsplash.com/800x600/?" . $component["destination"] . ")'>";
	echo "<div class='tripInfo'><h2>" . $component["tripTitle"] . "</h2>";
	echo "<h4>" . $component["travelDate"] . "</h4></div>";
	echo "</div>";
	// echo "</a>";
	}
echo "</div>";
echo "</div>";

?>



</body>
</html>