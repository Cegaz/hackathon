<!DOCTYPE html>
<html>
<head>
    <title>Météo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Exo:400,700|Quicksand" rel="stylesheet">
</head>

<?php
require_once 'weather2.php';

if(isset($data['main'])){
    $img = $data['main'] . '.jpg';
} else {
    $img = 'voyage.jpg';
}

?>

<body style="background-image:url('<?php echo 'img/' . $img; ?>')">

<?php
if (isset($data)) {
// These code snippets use an open-source library. http://unirest.io/php
$response = Unirest\Request::get("https://webcamstravel.p.mashape.com/webcams/list/nearby=" . $data['latitud'] . "," . $data['longitud'] . ",10,0?lang=en&show=webcams%3Aimage%2Clocation",
    array(
        "X-Mashape-Key" => "udJBvGfeWYmshReTa0Lp1NHt4yKjp1AMYyyjsnx0ClHBSOElYG"
    )
);
$response->code;        // HTTP Status code
$response->headers;     // Headers
$response->body;        // Parsed body
$response->raw_body;    // Unparsed body

$json = $response->raw_body;
$jsonDecode = json_decode($json);
$nbWebcams = count($jsonDecode->{'result'}->{'webcams'});


$i = 0;

if ($nbWebcams > 0) {
$idWebcam = $jsonDecode->{'result'}->{'webcams'}[$i]->{'id'};
$placeWebcam = $jsonDecode->{'result'}->{'webcams'}[$i]->{'title'};
$statusWebcam = $jsonDecode->{'result'}->{'webcams'}[$i]->{'status'};
?>
<br/>
<div class="webcame">
    <div class="webcame2">
        <a name="lkr-timelapse-player"
           data-id="<?php echo $idWebcam; ?>"
           data-play="day"
           href="https://lookr.com/<?php echo $idWebcam; ?>"
           target="_blank">
            Nom de la ville
        </a>
    </div>
    <br/>
    <?php
    echo "<p class='blanc'>" . "Lieu : " . $placeWebcam . "</p>";

    for ($i = 0; $i < $nbWebcams && $i < 4; $i++) {
        $idWebcam = $jsonDecode->{'result'}->{'webcams'}[$i]->{'id'};
        echo "<div class='element_menu'> <p class='titleCam'><img src='img/webcam.jpg'> " . $jsonDecode->{'result'}->{'webcams'}[$i]->{'title'} . "</p>" .
            "<p class=camHide>         <a name=\"lkr-timelapse-player\"
               data-id=\"$idWebcam\"
               data-play=\"day\"
               href=\"https://lookr.com/$idWebcam\"
               target=\"_blank\">
                Nom de la ville
            </a></p></div>";
    }
    echo '</div>';

    }
    }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script async type="text/javascript" src="script.js"></script>

</body>
</html>