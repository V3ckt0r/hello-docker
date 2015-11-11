<?php $link = mysql_connect('localhost', 'root'); ?>


<html>
<head>
	<title>Hello world!</title>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo.png" />
	<h1><?php echo "Hello world!"; ?></h1>
	<p><a href="http://v3ckt0r.github.io/index2.html">Click me"</a>if you're brave. Or play a pointless <a href="http://v3ckt0r.github.io/canvas_cubes.html">game here</a>. hint - click the squares!</p>
	<?php if(!$link) { ?>
		<h2>Can't connect to local MySQL Server!</h2>
	<?php } else { ?>
		<h2>MySQL Server version: <?php echo mysql_get_server_info(); ?></h2>
	<?php } ?>


</body>
</html>
