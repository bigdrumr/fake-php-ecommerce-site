<?php

// PAGE REDIRECT
function redirect_to($new_location) {
	header('Location: ' . $new_location);
	exit;
}

?>