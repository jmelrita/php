<html>
	<head>
		<title>Checkbox Sample</title>
	</head>
	<body>
		<form method="GET" action="getdishes.php">
			<p>Choose your favorite dishes:</p>
			<p><input type="checkbox" name="dishes[]" value="Friend Chicken" /> Friend Chicken</p>
			<p><input type="checkbox" name="dishes[]" value="Spaghetti" /> Sphagetti</p>
			<p><input type="checkbox" name="dishes[]" value="Shanghai Rolls" /> Shanghai Rolls</p>
			<p><input type="checkbox" name="dishes[]" value="Pancit" /> Pancit</p>
			<br />
			<br />
			<p>Choose your favorite desert:</p>
			<p><input type="checkbox" name="deserts[]" value="Fruit Salad" /> Fruit Salad</p>
			<p><input type="checkbox" name="deserts[]" value="Mango Float" /> Mango Float</p>
			<p><input type="checkbox" name="deserts[]" value="Leche Flan" /> Leche Flan</p>
			<p><input type="checkbox" name="deserts[]" value="Ice Cream" /> Ice Cream</p>
			<br />
			<br />			
			<button type="submit" name="getdishes">Get Dishes</button>
		</form>
	</body>
</html>