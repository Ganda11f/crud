<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar-light bg-light menu">

        <div class="container">
            <a class="navbar-brand" href="#">
                CRUD PHP
            </a>

            <form action="#" class="forms row g-3">
                <div class="col-md-3">
                    <label for="nome"> Nome:</label>
                    <input class="form-control" type="text" name="nome" value="" required>
                </div>

                <div class="col-md-2">
                    <label for="sobrenome"> Sobrenome:</label>
                    <input class="form-control" type="text" name="sobrenome" value="" required>
                </div>

                <div class="col-md-2">
                    <label for="idade"> Idade:</label>
                    <input class="form-control" type="date" name="idade" value="" required>
                </div>

                <div class="col-md-3">
                    <label for="sexo"> Sexo:
                        <select class="form-control" name="sexo" id="sexo">
                            <option value="masc">M</option>
                            <option value="fem">F</option>
                        </select>
                    </label>
                </div>
                <div class="col-md-2">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary" name="envio">Enviar</button>
                </div>
            </form>
        </div>
    </nav>
</body>

</html>