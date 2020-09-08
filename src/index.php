<?php

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "contents";
}

$file = "scoe/" . $page . ".php";

// I heard '..' is dangerous!
assert("strpos('$file', '..') === false") or die("Code Break Attempt!");

// TODO: Make this look nice
assert("file_exists('$file')") or die("That file doesn't exist!");

?>
<!DOCTYPE html>
<html>
	<head>
	<title> Web | CTF Challenges </title>
</head>


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
		    	<div class="navbar-header">
		    		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            	<span class="sr-only">Toggle navigation</span>
		            	<span class="icon-bar"></span>
		          	</button>
		          	<a class="navbar-brand" href="#">Assertions</a>
		        </div>
		        <div id="navbar" class="collapse navbar-collapse">
		          	<ul class="nav navbar-nav">
		            	<li <?php if ($page == "contents") { ?>class="active"<?php } ?>><a href="?page=contents">Contents</a></li>
						<!--<li <?php if ($page == "flag") { ?>class="active"<?php } ?>><a href="?page=flag">CTF Secrets</a></li> -->
		          	</ul>
		        </div>
		    </div>
		</nav>
			<h1>Web Challenge 4 Assertions</h1>
		<div class="container" style="margin-top: 50px">
			<?php
				require_once $file;
			?>
			
		</div>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" />
	</body>
</html>