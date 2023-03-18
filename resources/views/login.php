<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
	<style type="text/css">
		body {
			background-color: #202123;
			color: #fff;
			font-family: Arial, sans-serif;
		}
		form {
			margin: 0 auto;
			max-width: 500px;
			margin-top: 100px;
		}
		h1 {
			text-align: center;
			margin-bottom: 30px;
		}
		label {
			display: block;
			margin-bottom: 10px;
		}
		input[type="text"], input[type="password"] {
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px;
			margin-bottom: 20px;
			width: 100%;
			max-width: 400px;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #0d7fd6;
			color: #000;
			border: none;
			border-radius: 5px;
			padding: 10px;
			cursor: pointer;
			width: 100%;
			max-width: 400px;
			box-sizing: border-box;
		}
		input[type="submit"]:hover {
			background-color: #17629c;
			color: #fff;
		}
	</style>
</head>
<body>
	<form action="" method="post">
		<h1>Login</h1>
        <div style="text-align: center;">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" name="submit" value="Login">
            <label style="margin-top:10px">Or <a href="/register">Register</a></label>
        </div>
	</form>
</body>
</html>
