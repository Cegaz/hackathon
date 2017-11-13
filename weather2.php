<?php
require_once 'vendor/autoload.php';
if(isset($_GET['city'])) {

	require_once 'getMeteoByCity.php';
  $data = getMeteoByCity($_GET['city']);

 ?>
    <h1>La météo de votre week-end à <?php echo $data['name']; ?></h1>
    <span class="bof"><a href="index.php"><button>voir une autre ville</button></a></span>

    <div class='meteo_result'>

        <?php
        require_once 'getPicture.php';
        $img = getPicture($data['main']);
        ?>

        	<div class="image_p">
	        	<img class="picture" src="<?php echo $img; ?>">
	        	<p><span class="big"><?php echo $data['temp']; ?>°</span><br>
	            <span class="medium"><?php echo $data['description']; ?></span><br><br>
	            <?php echo $data['humidity']; ?>% d'humidité<br>
	            <?php echo $data['wind_speed']; ?> km/h de vent</p>
	         </div>


<?php
} else { ?>
<div class="surhome">
	<div class="home">
    <form action="" method="get">
      <p>Où partir ce week-end ?...</p>
      <input type="text" name="city">
      <button type="submit">go !</button>
    </form>
</div>
<div class="button">
    <form action="help.php" method="get">
    	<button type="submit">Je ne sais pas, aidez-moi à choisir !</button>
    </form>
  </div>
</div>
    <?php
} ?>