<?php
/*public static function CreateElement($key, $value)
{

}*/

$handlers = array(

	// Input types
	"text"=>function ($object) 
	{
		echo $object["label"] . ':<br><input type="text" name="' .			$object["name"] . '" validator="' . $object["validator"] . '">';
	},
	"submit"=>function ($object)
	{
		echo '<input type="submit" value="' . $object["text"] . '">';
	},

	// Other types
	"heading"=>function ($object) 
	{
		echo '<h2>' . $object["text"] . '</h2><br>';
	},
	"default"=>function ($object)
	{
		echo '<p style="color: #f00;">This element (' . $type . ') is not supported</p>';
	}
);

//echo '<input type=' 
?>

