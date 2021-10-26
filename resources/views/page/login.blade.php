<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/image/logo/deedthrone.jpg">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Project Tracking | Login</title>
</head>
<body>

    <div class="info">
        
    </div>
    <div class="container">
        <h1>Login</h1>
        <hr>
        <form action="home" method="post">

        <!-- USERNAME -->
            <div class="field">
                <i class='bx bxs-user bx-sm'></i>
                    <span class="tooltip"></span>
                <input type="text" placeholder="Username" name="username" require>
            <hr>
            </div>
        <!-- PASSWORD -->
            <div class="field">
                <i class='bx bxs-lock-alt bx-sm' ></i>
                    <span class="tooltip"></span>
                <input type="password" placeholder="Password" name="password" require>
            <hr>

        <!-- FORGOT YOUR PASSWORD -->
            <div class="lupaPass">
                <a href="">Forgot your password?</a>
            </div>

            <input type="submit" value="Login">  
        </form>
    </div>
</body>
</html>