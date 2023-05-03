<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #5bb6a2;
        }

        .container {
            width: 100%;
            display: flex;
            max-width: 850px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .registrasi {
            width: 400px;
        }

        form {
            width: 250px;
            margin: 60px auto;
        }

        h1 {
            margin: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            padding: 5px;
        }

        input {
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #666;
        }

        button {
            border: none;
            outline: none;
            padding: 8px;
            width: 252px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
            background: #5bb6a2;
        }

        button:hover {
            background: #7efde1;
        }

        @media (max-width: 758px) {
            .container {
                flex-wrap: wrap;
                width: 100%;
                max-width: 750px;
                margin-left: 20px;
                margin-right: 20px;
            }

            form {
                width: 300px;
                margin: 20px auto;

            }

            .registrasi {
                width: 400px;
                padding: 20px;
            }

            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="registrasi">
        <form action="">
            <h1>Registrasi</h1>
            <ul>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <label for="email">E-mail :</label>
                <input type="text" name="email" id="email">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2">
                <br>
                <button type="submit" name="register">Sign Up</button>
             </ul>
        </form>
    </div>
</div>
</body>
</html>