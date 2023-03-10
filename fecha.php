<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Practica 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Introduzca la fecha</label>
        <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fecha">
        <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
    </div>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $timestamp = strtotime($_POST['fecha']);
    $day = date('d', $timestamp);
    switch ($day) {
        case 1:
        case 3:
        case 5:
        case 12:
        {
            echo "<h2>Horario de mañana</h2>";
            break;
        }
        case 10:
        case 14:
        case 24:
        case 28:
        {
            echo "<h2>Horario de tarde</h2>";
            break;
        }
        case 2:
        case 88:
        case 15:
        {
            echo "<h2>No hay clase</h2>";
            break;
        }
        default:
        {
            echo "<h2>No hay nada definido</h2>";
            break;
        }
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


