<pre>
<?php
print_r($_POST)
?>
</pre>

<?php 
if ($_POST['action'] == 'test-form') {
	echo 'The form was submitted';
}
?>