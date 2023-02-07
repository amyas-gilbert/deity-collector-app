<?php

		function displayDeities(array $deities): string {
		    foreach ($deities as $deity) {
		        echo '<h2>' . $deity['name'] . '</h2>' 
                    . '<p>comes from ' . $deity['mythology'] . ' mythology</p>'
                    . '<p>, is associated with ' . $deity['association'] . '</p>'
                    . '<p>, and is usually seen holding ' . $deity['objects'] . '.</p>';
		    }
		}
		