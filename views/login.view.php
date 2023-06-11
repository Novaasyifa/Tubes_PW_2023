<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <!--css-->
    <link rel="stylesheet" href="css/login.css" />

</head>

<body>

    <div class="container">
        <div class="login">
            <form action="index.php" method="post">
                <h1>Log In</h1>
                <ul>
                    <li>
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password">
                    </li>
                    <li>
                        <button type="submit" name="login">Login</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>

    <!--My Javascript-->
    <script src="js/script.js"></script>
</body>

</html>