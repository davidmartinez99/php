<!DOCTYPE html>
<html><head><title>if else</title>

<style>
.r1 { background-color: #66FFFF;
		color: #0000FF;
	}

.r2 { background-color:#0000FF;
		color: #66FFFF;
	}
</style>
</head>
<body>
	<center>
<h1>
if else php example
</h1>


<h1><?php
echo "<h1>";
	for ($i = 0; $i < 100; $i++){
		if($i % 2==0 ){
				echo"<div class=\"r1\" >";
			}else{
			echo"<div class=\"r2\" >";
		}
		
		echo "* * * * * * * * $i * * * * * * * *<br />";
		echo "</div>";
		
	}
?>
</h1>
</center>
</body>
</html>
