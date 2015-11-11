<?php $link = mysql_connect('localhost', 'root'); ?>
<?php $query = sprintf("SELECT table_schema "Data Base Name", sum( data_length + index_length ) / 1024 / 1024 "Database size in MB", sum( data_free )/1024 / 104 "Free Space in MB" FROM information_schema.TABLES GROUP BY table_schema;"); ?>

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
	<?php if(!$link) { ?>
		<h2>Can't connect to local MySQL Server!</h2>
	<?php } else { ?>
		<h2>MySQL Server version: <?php echo mysql_get_server_info(); ?></h2>
	<?php } ?>
	<?php
		if (!$query) {
			die("Something went wrong ;-)");
		}

		//result
		$result = mysql_query($query);
	?>
		<h2>Here is the disk space of mysql databases /br <?php print $result; ?></h2>
</body>
</html>
