<?php


$person = [
	'age' => 31,
	'hair' => 'brown',
	'favColor' => 'blue',
	'career' => 'developer'
];



$person['name'] = 'Brian';




//var_dump is something you can call to dump the value of anything and everything - it'll simply display the key/values in the browser.
// var_dump($person);


//die function, it'll stop executing code, you can var dump, then die, or die then var dump as the last bit of code.
// die(var_dump($person));




//removing in an array
// unset($person['career']);



$tasks = [
	'hours' => 1,
	'pay' => 100,
	'title' => 'clean room',
	'complete' => false,
	'assigned_to' => 'bbaccs'
];


require 'index.view.php';