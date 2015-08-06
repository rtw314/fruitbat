<?php
require_once 'form.php'; //Contains the variable $json_form which will render the website
require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<body>

<form>
<?php
for ($i=0; $i < count($json_form); $i++) { 
	$object = $json_form[$i]; // Assigns the current array element to the $object variable
	$type = $object["type"]; // The type of HTML element contained within the object
	
	// Handles the construction of the web page according to the objects given in the array
	
	$handlers[in_array($type, $handlers) ? $type : "default"]($object);
}?>
</form>

<pre><?php echo var_dump($json_form); ?></pre>

</body>
</html>
