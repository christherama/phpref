<?php
// Get today's date (for the query string nav URL)
$dayName = date('D');
$month = date('M');
$dayNum = date('j');
$year = date('Y');

// Nav menu items
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
<div id="navbar" class="navbar navbar-static affix-top"  data-spy="affix" data-offset-top="0">
	<div class="navbar-inner">
		<div class="container">
			<a href="<?php echo $ROOT; ?>" class="brand">PHP Reference</a>
			<ul class="nav" role="navigation">
			<?php foreach($nav as $cat => $pages): ?><li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $cat ?></a>
					<ul class="dropdown-menu">
					<?php foreach($pages as $name => $id): 
						// Construct standard or nice URLs
						if($URL_REWRITING) { // variable set in index.php
							$url = "$ROOT/code/$id";
						} else {
							$url = "$ROOT/?p=code&ref=$id";
						}
						?>
						<li><a href="<?php echo $url ?>"><?php echo $name ?></a></li>
					<?php endforeach ?>
					</ul>
				</li>
			<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>