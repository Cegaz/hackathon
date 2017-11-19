<?php

function getRandomId() {
	$id = [];

	//ini_set('memory_limit', '-1');
	for ($i = 0; $i < 4; $i++) {
	  $json = file_get_contents('city.list.min.json');
	  $parsed_json = json_decode($json);
		$rand = rand(0, count($parsed_json));
	  $id[] = $parsed_json[$rand]->{'id'};
	}
	
	return $id;
}