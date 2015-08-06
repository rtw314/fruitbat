<?php
$formString = '[
	{
		"type":"heading",
		"text":"This is a Heading"
	},
	{
		"type":"text",
		"name":"text1",
		"label":"Phone Number",
		"validator":"phone"
	},
	{
		"type":"text",
		"name":"text2",
		"label":"Name",
		"validator":"none"
	},
	{
		"type":"submit",
		"text":"Send It"
	}
]';
$json_form = json_decode($formString, true);
?>
