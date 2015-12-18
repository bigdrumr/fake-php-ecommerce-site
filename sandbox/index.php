<?php 

$page 			= require_once('modules/Page_Controller.php');
$validation 	= require_once('modules/Validation_Controller.php');

$errors 		= array();
$message 		= '';

// LOGIN
if (isset($_POST['action'])) {
	$username 	= trim($_POST['username']);
	$password 	= $_POST['password'];
	$message 	= 'The form was submitted';

	// Validations

	foreach($_POST as $key => $value) {
		if (!not_empty(trim($_POST[$key]))) {
			$errors[$key] = 'Please enter your '.ucfirst($key).'.';
		};
	};

	if (empty($errors)) {
		if ($username == 'bigdrumr' && $password == 'password99') {
			redirect_to('templates/account.php');
		} else {
			// errors
		};
	};

} else {
	$username 	= 'Username';
	$password 	= 'Password';
	$message 	= 'Please Log In.';
}
?>

<?php include('templates/header.php'); ?>

<br>

<?= $message; ?><br>
<?= display_errors($errors); ?>

<form action="index.php" method="POST">
	<input name="action" value="test-form" type="hidden">
	<input name="username" type="text" value="<?= htmlspecialchars($username) ?>">
	<input name="password" type="password" value="<?= $password ?>">
	<input name="submit" type="submit" value="Submit">
</form>


<?php include('templates/footer.php'); ?>