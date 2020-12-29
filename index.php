<?php require_once 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measure Distance</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="center">Measure Distance </h1>
    <form method="post" action="data_calculation.php" >
		<div class="input-group">
			<label>Start Point Latitude</label>
			<input type="text" name="start_latitude" value="">
		</div>
		<div class="input-group">
			<label>Start Point Longitude</label>
			<input type="text" name="start_longitude" value="">
        </div>
        <div class="input-group">
			End Point
		</div>
        <div class="input-group">
			<label>End Point Latitude</label>
			<input type="text" name="end_latitude" value="">
		</div>
		<div class="input-group">
			<label>End Point Longitude</label>
			<input type="text" name="end_longitude" value="">
        </div>
        <div class="input-group">
			
			<button type="submit" class="btn" value="submit">Submit</button>
        </div>
	</form> 

</body>
</html>