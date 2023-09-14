<?php
include_once "/xampp/htdocs/aula/crud/conexao/Conexao.php";
include_once "/xampp/htdocs/aula/crud/model/usuario.php";
include_once "../dao/usuarioDAO.php";

//instanciar classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP com MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar-light bg-light menu">

        <div class="container">
            <a class="navbar-brand" href="#">
                CRUD PHP
            </a>

            <form action="../controller/UsuarioController.php" class="forms row g-3">
                <div class="col-md-3">
                    <label for="nome"> Nome:</label>
                    <input class="form-control" type="text" name="nome" value="" auto focus required>
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
    <hr>
    <div class="table-responsive">
        <table class="table table-sm table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuariodao->read() as $usuario): ?>
                <tr>
                    <td><?= $usuario->getId() ?></td>
                    <td><?= $usuario->getNome() ?></td>
                    <td><?= $usuario->getSobrenome() ?></td>
                    <td><?= $usuario->getSexo() ?></td>
                    <td class="text-center">
                        <button class="btn btn-warning btn-sm" data-toggle="model" data-target="#editar">

                        </button>
                    </td>
                </tr>


                <!-- Modal -->
                <div class="modal fade" id="editar" <?= $usuario->getId() ?> tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="../controller/UsuarioController.php" method="POST">
                                    <div class="row">
                                        <form action="../controller/UsuarioController.php" class="forms row g-3">
                                            <div class="col-md-3">
                                                <label for="nome"> Nome:</label>
                                                <input class="form-control" type="text" name="nome" value="<?= $usuario->getNome() ?>" auto focus required>
                                            </div>

                                            <div class="col-md-2">
                                                <label for="sobrenome"> Sobrenome:</label>
                                                <input class="form-control" type="text" name="sobrenome" value="<?= $usuario->getSobrenome() ?>" required>
                                            </div>

                                            <div class="col-md-2">
                                                <label for="idade"> Idade:</label>
                                                <input class="form-control" type="date" name="idade" value="<?= $usuario->getIdade() ?>" required>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="sexo"> Sexo:
                                                    <select class="form-control" name="sexo" id="sexo">
                                                        <?php if ($usuario->getSexo() == 'F') : ?>
                                                            <option value="masc">M</option>
                                                            <option value="fem">F</option>
                                                        <?php else : ?>
                                                            <option value="masc">M</option>
                                                            <option value="fem">F</option>
                                                        <?php endif ?>
                                                    </select>
                                                </label>
                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div>
                                                                <br>
                                                                <input type="hidden" name="id" value="<?= $usuario->getId()?>"/>
                                                                <button type="submit" class="btn btn-primary" name="editar">Cadastrar</button>
                                                            </div>
                                                        </div>
                                            <div class="col-md-2">
                                                <label>&nbsp;</label>
                                                <button type="submit" class="btn btn-primary" name="envio">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>

                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>
