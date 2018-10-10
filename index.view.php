<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<h1>Today's Task</h1>




<!-- ucwords is a funciton that will capitalize the first letter
	<ul>

		

		<?php foreach ($tasks as $taskTitle => $value) : ?>
			<li>
				<strong><?= ucwords($taskTitle); ?></strong> <?= $value; ?>
			</li>
		<?php endforeach; ?>
			
	</ul> -->


<ul>
	<li>
		<strong>Name: </strong> <?= $tasks['title']; ?>
	</li>
	<li>
		<strong>Status: </strong> <?= $tasks['complete'] ? 'Complete : 'Incomplete'; ?>
	</li>
</ul>



</body>
</html>

