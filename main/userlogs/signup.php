<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<style>
		body {
			background-color: #f1f1f1;
		}

		form {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			display: inline-block;
			margin: auto;
			padding: 20px;
			text-align: center;
			width: 400px;

			/* Center the form */
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		h1 {
			color: #333;
			text-align: center;
		}

		label {
			display: block;
			font-weight: bold;
			margin-bottom: 10px;
			text-align: left;
		}

		input[type="text"],
		input[type="email"],
		input[type="password"] {
			border-radius: 3px;
			border: 1px solid #ccc;
			display: block;
			font-size: 16px;
			margin-bottom: 20px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"] {
			background-color: #333;
			border-radius: 3px;
			border: none;
			color: #fff;
			cursor: pointer;
			font-size: 16px;
			padding: 10px;
			width: 100%;
		}

		input[type="submit"]:hover {
			background-color: #555;
		}
	</style>
</head>
<body>
	<h1>Signup</h1>
	<form action="register_handler.php" method="POST" >
		<label for="username">Username:</label>
		<input type="text" name="username" required>

		<label for="email">Email:</label>
		<input type="email" name="email" required>

		<label for="password">Password:</label>
		<input type="password" name="password" required>

		<input type="submit" name="signup" value="Signup">
	</form>

	<script>
		function validateForm() {
			// Get input field values
			var username = document.forms["signupForm"]["username"].value;
			var email = document.forms["signupForm"]["email"].value;
			var password = document.forms["signupForm"]["password"].value;

			// Check if input fields are empty
			if (username == "" || email == "" || password == "") {
				alert("Please fill in all fields");
				return false;
			}
		}
	</script>
</body>
</html>
