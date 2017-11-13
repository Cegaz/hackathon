<?php

function getMeteobyCity($city){

    $responseWeather = Unirest\Request::get('http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&units=metric&lang=fr&APPID=606cacb6613414904494ad93ffab0aaa');

    $parsed_json = json_decode($responseWeather->raw_body);
    $data = [];
    $data['longitud'] = $parsed_json->{'coord'}->{'lon'};
    $data['latitud'] = $parsed_json->{'coord'}->{'lat'};
    $data['main'] = $parsed_json->{'weather'}[0]->{'main'};
    $data['description'] = $parsed_json->{'weather'}[0]->{'description'};
    $data['temp'] = round($parsed_json->{'main'}->{'temp'});
    $data['pressure'] = $parsed_json->{'main'}->{'pressure'};
    $data['humidity'] = $parsed_json->{'main'}->{'humidity'};
    $data['temp_min'] = $parsed_json->{'main'}->{'temp_min'};
    $data['temp_max'] = $parsed_json->{'main'}->{'temp_max'};
    $data['wind_speed'] = round($parsed_json->{'wind'}->{'speed'}*3.6);
    $data['name'] = $parsed_json->{'name'};

    return $data;
}