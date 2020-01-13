<?php
	session_start();
	require_once __DIR__."/b/page_index.php";
	$homepage = new page_index();
	$homepage->run();
