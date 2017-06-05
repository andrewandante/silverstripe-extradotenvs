<?php

foreach (glob(BASE_PATH . '/.env.*') as $file) {
	try {
		(new \Dotenv\Dotenv(dirname($file), basename($file)))->overload();
	} catch (Exception $e) {
		// Do nothing.
	}
}
