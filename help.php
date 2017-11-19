<!DOCTYPE html>
<html>
<head>
    <title>Météo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700|Quicksand" rel="stylesheet">
</head>

<body style="background-image:url('img/Clear.jpg')">

<?php
require_once 'vendor/autoload.php';
require_once 'getMeteoById.php';
require_once 'getRandomId.php';

$randomDestinations = getRandomId();
?>

<div class="fourMeteos">

<?php
for($i = 0; $i < 4; $i++) {
	$data = getMeteoById($randomDestinations[$i]);
?>

    <div class='meteo_result_4'>

        <?php
        require_once 'getPicture.php';
        $img = getPicture($data['main']);
        ?>

        	<div class="image_p">
    			<h2><?php echo $data['name']; ?></h2>
	        	<img class="picture" src="<?php echo $img; ?>">
	        	<p><span class="big"><?php echo $data['temp']; ?>°</span><br>
	            <span class="medium"><?php echo $data['description']; ?></span><br><br>
	            <?php echo $data['humidity']; ?>% d'humidité<br>
	            <?php echo $data['wind_speed']; ?> km/h de vent</p>
	         </div>
    </div>
<?php } ?>
    <span class="button button2"><a href="help.php"><button>+ de choix svp !</button></a></span>
    <span class="button button3"><a href="index.php"><button>retour</button></a></span>
</div>
</body>
</html>