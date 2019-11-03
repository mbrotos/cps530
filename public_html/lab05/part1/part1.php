<html>
<head>
<meta charset="utf-8">
<title>Adam Sorrenti</title>
</head>

<body>
	<h1>Multiplication Table:</h1>
	<form action="table.php" method="post">
		Choose an Row and Col between 3 and 12.<br>
		Row: <input type="text" name="xVal"><br>
		Col: <input type="text" name="yVal"><br>
		<input type="submit">
	</form>
	
	<p>
		<?php include(__DIR__."/counter/counter.php");?>
	</p>
</body>
</html>
