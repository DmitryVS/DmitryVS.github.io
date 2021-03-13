<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$name = 'Название сайта';
$author = 'Автор';
$projectName = 'Список проектов';
$projectsList = array('projectName1'=>'projectLink1','projectName2'=>'projectLink2','projectName3'=>'projectLink3');
?>
<h1><?= $name ?></h1>
<h2><?= $author ?></h2>
<h3><?= $projectName ?></h3>
<ul>
	<?php foreach ($projectsList as $key => $value): ?>
		<li><a href="<?= $value?>"><?= $key?></li>
	<?php endforeach ?>
</ul>
</body>
</html>