<?php

//an instance of a class is an object.


//If a todo is your app, think about the small components of your app. A todo list needs....a Task, Comment and User etc.


//task what do you need for a task? Well a description would be one thing, and if it's complete or not would be another.



class Task {

	protected $description;

	protected $completed = false;

	public function __construct($description) 

	{

		//Automatically trigger on instantiation....how do we do that? ...with the $task = new Task
		$this->description = $description;

	}

	{

		public function isComplete()

	}


}

$task = new Task('Go to the store');

require 'index.view.php';