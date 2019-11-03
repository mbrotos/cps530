<html>
<body>

<?php

	$x = $_POST["xVal"];
	$y = $_POST["yVal"];
	if($x>=3 and $x<=12 and $y>=3 and $y<=12)
	{
		echo "<table>";

        for ($r =1; $r <= $x; $r++){

            echo'<tr>';

            for ($c = 1; $c <= $y; $c++)
                echo '<td>'.$c*$r.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'</td>';
           echo '</tr>';

        }

  		echo"</table>";
	} else {
		
		echo "Invalid input.....";
		echo "<a href='/lab05/lab05.html'>Go Back!</a>";
	}
	
?>

</body>
</html>