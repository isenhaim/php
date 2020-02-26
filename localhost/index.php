
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
    </head>
    <?php session_start(); ?>
    <body class="text-center">
        <div class="vertical-center-row">
            <form class="form-signin" action="module/auth.php" method="POST"> 
                <!-- <img class="mb-4" src="/" alt="" width="72" height="72"> -->
                <center><h1 class="h3 mb-3 font-weight-normal">Авторизация</h1></center>
                <input type="login" name="login" class="form-control" placeholder="Имя пользователя">
                <input type="password" name="password" class="form-control" placeholder="Пароль" autocomplete="off">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
            </form>    
        </div>
    </body>
</html>


