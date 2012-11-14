<div class="output-wrapper rendered">
	<div class="output-label">php code</div>
<?php
require_once('geshi/geshi.php');

$ref = isset($_GET['ref']) ? $_GET['ref'] : '';
$path = "{$_SERVER['DOCUMENT_ROOT']}/phpref/code/snippets/$ref.php";
if(file_exists($path)) {
	$file = fopen($path,'r');
	$source = fread($file,filesize($path));
	$source = preg_replace("(\\n?<\?php\\n?)",'',$source);
	$source = preg_replace("(\\n?\?>\\n?)",'',$source);

	$lang = 'php';
	
	$geshi = new GeSHi("<?php\n".$source."\n?>", $lang);
	
	$geshi->set_header_type(GESHI_HEADER_DIV);
	$style = 'font-family:courier;padding:10px;';
	$geshi->set_overall_style($style);
	
	//$geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS,2);
	
	//$geshi->set_line_style('background-color: #f8f8f8;','background-color: #fff;');
	
	$geshi->set_tab_width(3);
	
	$geshi->enable_keyword_links(true);
	
	echo $geshi->parse_code(); 
	ob_start();
	eval($source);
	$output = ob_get_contents();
	ob_end_clean();
	
	$geshi->set_language('html4strict');
	$geshi->set_source($output);
	$style = 'font-family:courier;padding:10px;';
	$geshi->set_overall_style($style);
	$raw_output = htmlentities($output);
	?>
</div>
<div class="output-wrapper raw">
	<div class="output-label">raw output</div>
	<pre class="output"><?php echo $raw_output;?></pre>
</div>

<div class="output-wrapper rendered">
	<div class="output-label">rendered output</div>
	<pre class="output"><?php eval($source);?></pre>
</div>

<?php }?>
