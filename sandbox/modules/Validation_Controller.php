<?php // FORM VALIDATION

// Input has a value
function not_empty($value) {
	return isset($value) && $value !== '';
};

// Input value string has reached max length
function has_max_length($value, $max_length) {
	return strlen($value) <= $max_length;
};

// Input value is in the request array
function is_in_array($value, $array) {
	return in_array($value, $array);
};

function display_errors($errors=array()) {
	$output = '';
	if (!empty ($errors)) {
		$output .= '<div class=\"error-wrapper\">';
		$output .= 'Please fix the following errors: <br>';
		$output .= '<ul>';
		foreach ($errors as $key => $error) {
			$output .= '<li>'.$error.'</li>';
		};
		$output .= '</ul>';
		$output .= '</div>';
	}
	return $output;
}
?>