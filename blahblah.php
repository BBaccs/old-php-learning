<?


//to do application need's todo's, comments and users

//so the classes are singular and will be - todo, comment, user

//if a function is defined in a class it's called a 'method'



class Task {

	public function __construct($a, $b, $c)

	{
		//Automatically triggered on instantiation
	}
}


$task = new Task('a', 'b', 'c');







require 'index.view.php';





//array of tasks

$tasks = [
	new Task('Go to the gym'),
	new Task('Finish watching this screencast'),
	new Task('Make topgold reservations'),
	new Task('Wish maddie a happy bday via SC to Jen and Jake')
];

dd($tasks);



<?php if ($task->completed){
	<strike><?= $task->description; ?></strike>
<?php endif; ?>
}

$tasks[0]->complete();