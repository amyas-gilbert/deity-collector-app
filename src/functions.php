<?php

function displayDeity(array $deity): string 
{
	if (array_key_exists('name', $deity) 
    && array_key_exists('mythology', $deity) 
    && array_key_exists('association', $deity) 
    && array_key_exists('objects', $deity)) {
		return '<h2>' . $deity['name'] . '</h2>' 
        . '<p>Mythology: ' . $deity['mythology'] . '</p>'
        . '<p>Associated with: ' . $deity['association'] . '</p>'
        . '<p>Objects carried: ' . $deity['objects'] . '</p>';
        } else { 
        	throw new Exception('One or more array keys are missing or incorrect'); 
        }
}
