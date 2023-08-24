<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $dt_nasc = $_POST["dt_nasc"];//puxando variaveis do formulario
        
        
        $sql = "INSERT INTO usuario (nome,email,senha,dt_nasc)
        VALUES ('{$nome}','{$email}','{$senha}','{$dt_nasc}')";//inserindo no sql

        $res = $con->query($sql);//resultado
        break;
    case 'editar':
        # code...
        break;
        case 'excluir':
            # code...
            break;
    default:
        # code...
        break;
}?>