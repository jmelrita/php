<html>
	<head>
		<title>Get Dishes</title>
	</head>
	<body>
	<?php
	
		//declare an empty array variable
		$mydishes = array();
		$mydeserts = array();
		
		if(isset($_GET["getdishes"]))
		{
			//check if the user has
			//selected at least 1 dish
			if(isset($_GET["dishes"]))
			{
				//get the SELECTED / CHECKED dishes
				$mydishes = $_GET["dishes"];
				
				//output the selected dishes
				for($i=0; $i<count($mydishes); $i++)
				{
					echo "<p>" . $mydishes[$i]. "</p>";
					
				}
				
			}
			else 
			{
				
				echo "<p>Sorry, please select at least 1 dish.</p>";
			}
			
			
			//check if the user has
			//selected at least 1 desert
			if(isset($_GET["deserts"]))
			{
				//get the SELECTED / CHECKED deserts
				$mydeserts = $_GET["deserts"];
				
				//output the selected deserts
				for($i=0; $i<count($mydeserts); $i++)
				{
					echo "<p>" . $mydeserts[$i]. "</p>";
					
				}
				
			}
			else 
			{
				
				echo "<p>Sorry, please select at least 1 desert.</p>";
			}			
			
		}
	
	
	?>
	</body>
</html>