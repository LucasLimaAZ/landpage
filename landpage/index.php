<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Land Page</title>
</head>
<body>
    <div class="col-lg-4">
        <form action="downloadEbook.php" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" class="form-control" required>
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control" required>
            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone" class="form-control" required>
            <input type="submit" value="Enviar" class="btn enviar">
        </form>
    </div>
</body>
</html>