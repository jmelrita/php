<html>
	<head>
		<title>Additional Input Forms</title>
	</head>
	<body>
		<form method="GET" action="processinput.php">
			<p>Select Gender:</p>
			<select name="selectElement">
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select>
			<br />
			<textarea name="textareaElement" cols="50" maxlength="100" required ></textarea>
			<br />
			<p>Select your civil status:</p>
			<p><input type="radio" name="radioElement" value="S" required /> Single </p>
			<p><input type="radio" name="radioElement" value="M" required /> Married </p>
			<p><input type="radio" name="radioElement" value="W" required /> Widowed </p>
			<button type="submit" name="process">Process Input</button>
		</form>
	</body>
</html>