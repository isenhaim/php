<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
    <body class="text-center">
        <form action="/module/reg_app.php" method="POST">
            <center><h4 class="mt-5">Регистрация</h4></center>   
            <div>
                <label for="fn" class="col-sm-10 col-form-label">Фамилия
                    <input type="text" class="form-control" id="fn" name="fn">
                </label>

                <label for="ln" class="col-sm-10 col-form-label">Имя
                    <input type="text" class="form-control" id="ln" name="ln">
                </label>
                <label for="mn" class="col-sm-10 col-form-label">Отчество
                    <input type="text" class="form-control" id="mn" name="mn">
                </label>

                <label for="place_birth" class="col-sm-10 col-form-label">Место рождения
                    <input type="text" class="form-control" id="place_birth" name="place_birth">
                </label>

                <label for="date_birth" class="col-sm-10 col-form-label">Дата рождения
                    <input type="date" class="form-control" id="date_birth" name="date_birth">
                </label>

                <label for="email" class="col-sm-10 col-form-label">E-mail
                    <input type="email" class="form-control" id="email" name="email">
                </label>

                <label for="phone" class="col-sm-10 col-form-label">Телефон
                    <input type="phone" class="form-control" id="phone" name="phone">
                </label>

                <label for="about" class="col-sm-10 col-form-label">О себе
                    <textarea class="form-control" id="about" rows="3" name="about"></textarea>
                </label>
            <div>
            <center><button type="submit" class="btn btn-success">Сохранить</button></center>
        </form> 
    </body>
</html>