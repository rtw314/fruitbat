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
	
	/*switch ($type) {
		case 'heading':
			echo '<h2>' . $object["text"] . '</h2><br>';
			break;
		case 'text':
			echo $object["label"] . ':<br><input type="text" name="' . 
					$object["name"] . '" validator="' . $object["validator"] . '">';
			break;
			
		case 'submit':
			echo '<input type="submit" value="' . $object["text"] . '">';
			break;
		case 'textarea':
			# code...
			break;
		default:
			echo '<p style="color: #f00;">This element (' . $type . ') is not supported</p>';
			break;
	}*/
	
	$handlers[in_array($type, $handlers) ? $type : "default"]($object);
}?>
</form>

<pre><?php echo var_dump($json_form); ?></pre>

</body>
</html>