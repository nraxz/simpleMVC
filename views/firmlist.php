<html>
<head></head>

<body>

<table>
	<tr><td>Name</td><td>Type</td><td>Description</td></tr>
	<?php 

		foreach ($firms as $name => $firm)
		{
			echo '<tr><td><a href="index.php?firm='.$firm->name.'">'.$firm->name.'</a></td><td>'.$firm->type.'</td><td>'.$firm->description.'</td></tr>';
		}

	?>
</table>

</body>
</html>