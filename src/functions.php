<?php

		function displayDeities(array $deities) {
		    foreach ($deities as $deity) {
		        echo '<h2>' . $deity['name'] . '</h2>' 
                    . '<p>' . $deity['name'] . ' is a deity from ' . $deity['mythology'] . ' mythology,</p>'
                    . '<p>is associated with ' . $deity['association'] . ',</p>'
                    . '<p> and is usually portrayed holding ' . $deity['objects'] . '.</p>';
		    }
		}
		