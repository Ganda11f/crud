<?php
class UsuarioDAO
{
    public function create(Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO usuario(nome,sobrenome,idade,sexo)
        VALUES(:nome,:sobrenome,:idade,:sexo)";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":idade", $usuario->getIdade());
            $p_sql->bindValue(":sexo", $usuario->getSexo());
            
            return $p_sql->execute();
        }catch(Exception $e){
            print("Error ao inserir o usuário <br>".$e.'<br>');
        }
    }//fim da função create
    public function read(){
        try{
            $sql = "SELECT * FROM usuario order by nome asc"

        }catch(Exception $e){
            print();
        }
    }//fim da função read
}//fim da classe UsuarioDao
