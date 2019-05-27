<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="container">
        <form action="process.php" method="post">
            <p>
                <label>User Name: </label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label>Password: </label>
                <input type="password" name="password" id="password">
            </p>
            <input type="submit" id="btn" value="Login">
        </form>
    </div>
</body>
</html>