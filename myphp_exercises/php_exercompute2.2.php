<html>
	<head>
		<title>Exercise 2.2</title>
	</head>
	<body>
    <div style="border:1px solid black;display:inline-block;padding:10px">
		<?php	
         $one=$_GET["one"];
         $two=$_GET["two"];
        
			if( isset($_GET["addition"]) )
			{
                $add=$one+$two;
                echo "<h1>PHP Exercise 2.2</h1>	";
                echo "Num1 <input value='$one'><br><br>";
                echo "Num2 <input value='$two'><br>";
                echo "<p style='font-weight:bold';>Add</p>";
				echo "<p>Result: <input value='$add'></p>";		
			}
            if( isset($_GET["subtract"]) )
			{
             
                $sub=$one-$two;
                echo "<h1>PHP Exercise 2.2</h1>	";
                echo "Num1 <input value='$one'><br><br>";
                echo "Num2 <input value='$two'><br>";
                echo "<p style='font-weight:bold';>Subtract</p>";
				echo "<p>Result: <input value='$sub'/></p>";	
                	
			}
            if( isset($_GET["multiply"]) )
			{
               
                $mul=$one*$two;
                echo "<h1>PHP Exercise 2.2</h1>	";
                echo "Num1 <input value='$one'/><br><br>";
                echo "Num2 <input value='$two'/><br>";
                echo "<p style='font-weight:bold';>Multiply</p>";
				echo "<p>Result: <input value='$mul'/></p>";		

			}
            if( isset($_GET["divide"]) )
			{
            
                $div=$one/$two;
                echo "<h1>PHP Exercise 2.2</h1>	";
                echo "Num1 <input value='$one'><br><br>";
                echo "Num2 <input value='$two'><br>";
                echo "<p style='font-weight:bold';>Divide</p>";
				echo "<p>Result: <input value='$div'/></p>";		

			}
			
			
		?>
        </div>
	</body>
</html>