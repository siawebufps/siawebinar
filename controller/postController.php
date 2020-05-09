<?php
class PostController 
{
	function index(){
		require_once 'views/layout/header.php';
		require_once 'views/post/index.php';
		require_once 'views/layout/footer.php';
	}
}
?>