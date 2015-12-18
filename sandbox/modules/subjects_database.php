<?php 
// SUBJECTS DATABASE 

// db credentials
$dbhost 			= 'localhost';
$dbuser 			= 'dev';
$dbpw				= 'devtest99';
$dbname				= 'fake_ecommerce_site';

// 1. CONNECT TO THE DB
$dbconnection		= mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);

// test db connection
if (mysqli_connect_errno()) {
	die(									// End connection attempt
		"Databasse Connection Failed: ". 	// 1 Connection Error Message
		mysqli_connect_error().				// 2 Connection Error
		" (".								// 3 Concat string
			mysqli_connect_errno().			// 4 Connection Error Number
		")"									// 5 Concat string
	);										// 6 Close die method

}

// 2. QUERY THE DB
$query 				 = "SELECT * ";							// ASSEMBLE the query by concat'ing 
$query 				.= "FROM pages";						// separate values for the variable. (It's modular, and possibly conditional.)
$result 			 = mysqli_query($dbconnection, $query);

// test for query error
if ( ! $result ) {
	die("Database connection failed.");
}
?>



<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

		<?php 
		// 3. USE RETURNED DATA
		// While mysqli_fetch_row can perform on $result, assign its return value to $row.
		// Each value ($row) is a row of the db that's returned from the query.
		// We can't iterate through each row with foreach, because this is not a PHP array.
		// The while loop allows us to single out each item in the mysql result index. 
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<pre>'; var_dump($row); echo '</pre>';						// Spit out the contents of $row as a php array (just for testing purposes).
			echo '<hr>';
		}

		// 4. RELEASE THE DATA FROM DB (we no longer need th db feed)
		mysqli_free_result($result);

		?>
		<div>

		</div>


		<form action="subjects_database.php" method="post">

		</form>

	</body>
</html>





<?php // 5. DISCONNECT FROM DB
mysqli_close($dbconnection);
?>