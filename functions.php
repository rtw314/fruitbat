<?php
/*public static function CreateElement($key, $value)
{

}*/

/*********************************************************
 * Contains an array of functions that are associated to
 * the respective types of HTML elements that the form is
 * to generate. For example, if the type is "text" the
 * handler will use the function associated with "text"
 * to create a respective textbox element. Each function
 * returns a string containing the created element.
 ********************************************************/
$handlers = array(

	// Input types
	"text"=>function ($object) 
	{
		$element = "";
		$element .= $object["label"] . ':<br><input type="text" name="' . $object["name"] . '" validator="' . $object["validator"] . '">';
		return $element;
	},
	"submit"=>function ($object)
	{
		$element = "";
		$element .= '<input type="submit" value="' . $object["text"] . '">';
		return $element;
	},

	// Other types
	"heading"=>function ($object) 
	{
		$element = "";
		$element .= '<h2';
		//TODO: add handlers for attributes for the element
		$element .= '>' . $object["text"] . '</h2><br>';
		return $element;
	},
	"default"=>function ($object)
	{
		$element = "";
		$element .= '<p style="color: #f00;">This element (' . $type . ') is not supported</p>';
		return $element;
	}
);

?>
