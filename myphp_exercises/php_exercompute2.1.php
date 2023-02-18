<html>
	<head>
		<title>Exercise 2.1</title>
	</head>
	<body>
		<?php	
			if( isset($_GET["btnCompute"]) )
			{
				$y1 = $_GET["Y1"];
				$y2 = $_GET["Y2"];
				$x1 = $_GET["X1"];
				$x2	= $_GET["X2"];	
				
				$r = ($y2 - $y1 )/ ($x2 - $x1);
				echo "<div style='border:1px solid black;display:inline-block;padding:10px'>";		
				echo "<h1>PHP Exercise 2.1</h1>	
						<p>Y2
						<input value='$y2'/> Y1
						<input value='$y1'/><br/></br> X2 
						<input value='$x2'/> X1
						<input value='$x1'/>";
				echo "<br><br></br><p>Slope: ".$r."</p>";		
			}
			
			
		?>
	</body>
</html>