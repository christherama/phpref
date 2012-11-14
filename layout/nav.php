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
		'while loops' => 'while&w=10'
	),
	'Data' => array(
		'forms' => 'forms',
		'files' => 'files'
	)
);
?>
<div id="navbar" class="navbar navbar-static affix-top desktop-only"  data-spy="affix" data-offset-top="0">
	<div class="navbar-inner">
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
</div>

<div id="nav-phone" class="navbar navbar-static affix-top phone-only" data-spy="affix" data-offset-top="0">
	<div class="btn-group pull-right">
		<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-th-list"></i> Menu</a>
		<ul class="dropdown-menu">
			<?php foreach($nav as $cat => $pages): ?><li>
				<li class="dropdown">
					<li class="nav-header"><?php echo $cat ?></li>
					<?php foreach($pages as $name => $id): ?>
						<li><a href="./?ref=<?php echo $id ?>"><?php echo $name ?></a></li>
					<?php endforeach ?>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</div>