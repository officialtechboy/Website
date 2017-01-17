<?php
// File to contain functions that need to be used throughout the project for whatever reason

function getParent($id, $parents){

	for($i = 0; $i < count($parents); $i++){
		if ($parents[$i]['id'] == $id){
			return $i;
		}
	}

	return -1;
}

function is_active($current){
	return $_SERVER['REQUEST_URI'] == $current['url'] || $current['url'] == "#";
}
?>