<?php
$page = isset($_GET['p']) ? $_GET['p'] : 'home';
require_once("pages/$page.php");