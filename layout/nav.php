<?php
$dayName = date('D');
$month = date('M');
$dayNum = date('j');
$year = date('Y');

$nav = array(
	'Basics' => array(
		'Variables' => 'variables',
		'Query String' => "qs&day=$dayName&month=$month&dayNum=$dayNum&year=$year",
		'Standard Arrays' => 'arrays',
		'Associative Arrays' => 'assoc'
	),
	'Decision Structures' => array(
		'if statements' => 'if',
		'if-else statements' => 'else',
		'if-elseif-else statements' => 'elseif'
	),
	'Repetition' => array(
		'for loops' => 'for',
		'while loops' => 'while',
		'do-while loops' => 'do'
	)
);
?>
<div class="navbar-inner desktop-only">
	<div class="container">
		<a href="./" class="brand">PHP Reference</a>
		<ul class="nav" role="navigation">
		<?php foreach($nav as $cat => $pages): ?><li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $cat ?></a>
				<ul class="dropdown-menu">
				<?php foreach($pages as $name => $id): ?>
					<li><a href="./?ref=<?php echo $id ?>"><?php echo $name ?></a></li>
				<?php endforeach ?>
				</ul>
			</li>
		<?php endforeach ?>
		</ul>
		<!--<a class="pull-right" href="http://www.php.net/manual/en/" target="_blank"><img src="img/php-icon.png" alt="PHP logo" /></a>-->
	</div>
</div>