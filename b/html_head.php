<?php

	class html_head
	{
	
	private $page_title;
	
		function make_head($title)
		{
			$this->page_title= $title;
            header("Content-Type:text/html; charset=utf-8");
			echo <<<first
<!DOCTYPE html>\n
<html>\n
<head>\n
<meta http-equiv=\"Content-Type\" content=\"text/html\" />\n
<meta charset=\"UTF-8\" />\n
<title>$this->page_title</title>\n
</head>\n
first;
		}
	}
