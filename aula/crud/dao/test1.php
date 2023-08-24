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
            $sql = "SELECT * FROM usuario order by nome asc";
            $result = Conexao::getConexao()->query($sql);
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach($lista as $l){
                $f_lista[] = $this->listaUsuario($l);
            }
            return $f_lista;
        }catch(Expeption $e){
            print "Erro ao buscar usuário <br>".$e."<br>";
        }
        }
        public function update(Usuario $usuario){
            $try{
                $sql = "UPDATE usuario SET
                nome =:nome,
                sobrenome =:sobrenome,
                idade =:idade,
                sexo =:sexo
                
                WHERE id =:id"
            }
        }
        $id = $_GET["id"];
        include_once 'conexao.php';
    
        $sql = "delete from cliente where idcliente = ".$id;
    
        if(mysql_query($sql,$con)){
            $msg = "Deletado com sucesso!";
        }else{
            $msg = "Erro ao deletar!";
        }
        mysql_close($con);
        }
    }//fim da classe
