<html>
	<head>
		<title><?=$page_title?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>

		<?php foreach($result as $row):?>
			<h3 id="color">Registry Confirmation</h3>
			<p>name of attendee: <?=$row->name?></p>
			<p>Number of attendees: <?=$row->number?></p>
			<p>Attending: 
			<?=$row->attending?></p>
		<?php endforeach;?>
		<script>
				
		</script>
	</body>
</html>