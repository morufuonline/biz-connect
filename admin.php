<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
        <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Biz-connect.jpeg">
    <link rel="icon" type="image/png" sizes="16x16" href="Biz-connect.jpegs">
    <link rel="manifest" href="site.webmanifest">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
        }

        .signup-form {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
        }

        .signup-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #0056b3;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="signup-form">
        <h2>Login An Admin Account</h2>
        <form action="#" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="User Name" required="required">
            </div> 
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </form>
        <p class="text-center">Dont  have an account? <a href="signup.php">Signup here</a></p>
        Forgotten Your Password ?  <a href="adminforgotpassword.php" class="text-center">Reset Your Password </a>
    </div>
</body>
</html>
