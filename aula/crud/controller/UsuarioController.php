<?php 
include_once"/xampp/htdocs/aula/crud/conexao/Conexao.php";
include_once"/xampp/htdocs/aula/crud/model/usuario.php";
include_once"../dao/usuarioDAO.php";

//instanciar classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//passar os posts - daods
$d = filter_input_array(INPUT_POST);

//SE FOR GRAVADO COM SUCESSO 
if (isset($_POST['cadastrar'])){
    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setIdade($d['idade']);
    $usuario->setSexo($d['sexo']);
    
    $usuariodao->create($usuario);
header("Location: ../../");
}
//SE A REQUISIÇÃO FOR EDITAR
elseif(isset($_POST['editar'])){

    $usuario->setNome($d['nome']);
    $usuario->setSobrenome($d['sobrenome']);
    $usuario->setIdade($d['idade']);
    $usuario->setSexo($d['sexo']);
  
    $usuariodao->update($usuario);
    header("Location: ../../");
}
//SE FOR DELETAR
elseif(isset($_GET['del'])){
    $usuario->setId($_GET['del']);
    $usuariodao->delete($usuario);

    header("Location: ../../");
}else{
    header("Location: ../../");
}

?>