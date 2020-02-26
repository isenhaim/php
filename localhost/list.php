<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список заявок</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    include 'module/db.php';

    $mysqli = db_connect();

    $attr = $_GET['attr'];
    $ptrn = $_GET['pattern'];

    if (empty($_GET['pattern'])) {
        $query = "SELECT id, fn, ln, mn, place_birth, date_birth, email, phone, about FROM application";
    } else {
        $query = "SELECT id, fn, ln, mn, place_birth, date_birth, email, phone, about FROM application WHERE $attr LIKE '%$ptrn%'";
    }

    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php if (!empty($_SESSION)) : ?>
<body>
    <div class="text-center mt-5 mb-5">
        <h4>Список заявок</h4>
    </div>
    <div>
        <table class="table table-dark example-container">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Фамилия</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Отчество</th>
                    <th scope="col">Место рождения</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Телефон</th>
                    <th scope="col" colspan="3">О себе</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($rows as $row) {
                        $id = $row['id'];
                        $fn = $row['fn'];
                        $ln = $row['ln'];
                        $mn = $row['mn'];
                        $place_birth = $row['place_birth'];
                        $date_birth = $row['date_birth'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $about = $row['about'];

                        echo "<tr>";
                        echo "<td>$id</td>";
                        echo "<td>$fn</td>";
                        echo "<td>$ln</td>";
                        echo "<td>$mn</td>";
                        echo "<td>$place_birth</td>";
                        echo "<td>$date_birth</td>";
                        echo "<td>$email</td>";
                        echo "<td>$phone</td>";
                        echo "<td>$about</td>";

                        echo "<td>
                                <form action=\"/edit.php\" method=\"POST\">
                                    <button type=\"submit\" class=\"btn btn-light btn-sm nm\" name=\"id\" value=\"$id\">Изменить</button>
                                </form>  
                              </td>";

                        echo "<td>
                                <form action=\"module/del_app.php\" method=\"POST\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm nm\" name=\"del\" value=\"$id\">Удалить</button>
                                </form>
                              </td>";
                        echo "</tr>";
                    }
                ?>
                <tr class="text-center">
                    <form action="" method="get">
                        <td colspan="4">
                            <select class="form-control form-control-sm" name="attr">
                                <option value="id">ID</option>
                                <option value="fn">Фамилия</option>
                                <option value="ln">Имя</option>
                                <option value="mn">Отчество</option>
                                <option value="place_birth">Место рождения</option>
                                <option value="date_birth">Дата рождения</option>
                                <option value="email">E-mail</option>
                                <option value="phone">Телефон</option>
                                <option value="about">О себе</option>
                            </select>
                        </td>
                        <td colspan="5">
                            <input class="form-control form-control-sm" type="text" name="pattern" />
                        </td>
                        <td colspan="2">
                            <button type="submit" class="btn btn-info btn-sm nm mt-2" value="">Фильтровать</button>
                        </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
<?php endif; ?>
</body>
</html>
