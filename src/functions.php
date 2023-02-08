<?php

function displayDeity(array $deity): string 
{
	if (array_key_exists('name', $deity) 
	 && array_key_exists('mythology', $deity) 
   	 && array_key_exists('association', $deity) 
   	 && array_key_exists('objects', $deity)) {
		return '<h2>' . $deity['name'] . '</h2>' 
        . '<p>' . $deity['name'] . ' is a deity from ' . $deity['mythology'] . ' mythology,</p>'
        . '<p>is associated with ' . $deity['association'] . ',</p>'
        . '<p> and is usually portrayed holding ' . $deity['objects'] . '.</p>';
	} else { 
		throw new Exception('One or more array keys are missing or incorrect'); 
	}
}
