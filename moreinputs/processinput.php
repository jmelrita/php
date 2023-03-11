<html>
	<head>
		<title>Process Input</title>
	</head>
	<body>
		<?php
			$gender;
			$comment; 
			$civilstatus;
			if(isset($_GET["process"]))
			{
					//gets the value of the selected option
					$gender = $_GET["selectElement"];
					
					//gets the value of a textarea
					$comment = $_GET["textareaElement"];
					
					//check if the user has selected a civil status
					if(isset($_GET["radioElement"]))
					{
						//if the user has actually selected a civil status,
						//get the value of the selected civil status from the radio button
						$civilstatus = $_GET["radioElement"];
						
						//if the civil status is S, output Single, and beautiful...
						//if the civil status is M, output Married, Sana all...
						//if the civil status is W, output Widowed, no comment...
						//otherwise, output INVALID
						
						if($civilstatus == "S")
							echo "<p>Single, and beautiful...</p>";
						elseif($civilstatus == "M")
							echo "<p>Married, Sana all...</p>";
						elseif($civilstatus == "W")
							echo "<p>Widowed, no comment...</p>";
						else 
							echo "<p>INVALID</p>";						
					}
					else 
					{
						echo "<p>Please select your civil status.</p>";
						
					}
					
					
					//the value could either be M or F,
					//if the value of the gender is M, display Male
					//if the value of the gender is F, display Female
					//otherwise, display INVALID
					
					if($gender == "M")
						echo "<p>Male</p>";
					elseif($gender == "F")
						echo "<p>Female</p>";
					else
						echo "<p>INVALID</p>";
					
					echo "<br />";
					echo "<p>Your comment is ".$comment."</p>";
				
			}
		?>
	</body>
</html>