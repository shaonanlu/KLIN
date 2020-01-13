<?php	
	require_once __DIR__."/html_head.php";
	require_once __DIR__."/html_body.php";
	
	class page_index
	{	
		private $page_head;
		private $page_body;
		private $page_title;	
		function run()
		{
            $this -> page_title = "物件導向後的PHP網頁";
            $head = new html_head();
            $head -> make_head ( $this -> page_title );
            $body = new html_body();
            $body -> make_body ();
		}
	}
