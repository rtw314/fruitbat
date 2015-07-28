<?php
require_once 'form.php'; //Contains the variable $json_form which will render the website
?>
<!DOCTYPE html>
<html>
<body>

<?php
foreach ($json_form as $key => $value) {
	createElement($key, $value);
}
?>

</body>
</html>