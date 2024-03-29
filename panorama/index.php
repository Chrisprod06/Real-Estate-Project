<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Virtual Tour| APM Smart Houses</title>
		<style>
		html,body {
			height: 100%;
		}
		.pano {
			width: 100%;
			height: 100%;
			margin: 0 auto;
			cursor: move;
		}
		.pano .controls {
			position: relative;
			top: 40%;
		}
		.pano .controls a {
			position: absolute;
			display: inline-block;
			text-decoration: none;
			color: #eee;
			font-size: 3em;
			width: 20px;
			height: 20px;
		}
		.pano .controls a.left {
			left: 10px;
		}
		.pano .controls a.right {
			right: 10px;
		}
		.pano.moving .controls a {
			opacity: 0.4;
			color: #eee;
		}
		</style>
	</head>
	<body>
		<div id="myPano" class="pano">
			<div class="controls">
				<a href="#" class="left">&laquo;</a>
				<a href="#" class="right">&raquo;</a>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="jquery.pano.js"></script>
		<?php

		echo '<script>
		/* jshint jquery: true */
		jQuery(function($){
			$("#myPano").pano({
				img: "../'.$_GET['path'].'"
			});
		});
		</script>';
		?>
		
	</body>
</html>
