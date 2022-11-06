<?php

require_once '../connection/connection.php';

class UsuarioService {
    public function __construct() {
        $this->conn = new DbConnection;
    }

    public function login($email, $senha) {
        $query = "SELECT * FROM usuario WHERE email = ".$email." senha = ".$senha;
        $usuario = mysqli_query($this->conn->stablishDBConnection(), $query);

        $novo_usuario_logado = mysqli_fetch_array($usuario);
        if (is_null($novo_usuario_logado)) {
            header('Location: ../index.php');
        } else {
            session_start();
            $_SESSION["usuario"] = $novo_usuario_logado;
            echo $_SESSION[$novo_usuario_logado];
        }        

        echo "Email: ".$email." ,Senha: ".$senha;
    }
    
    public function logout() {
    
    }
    
    public function create($usuario) {
        $query = "INSERT INTO usuario (no_usuario, senha, email, dt_registro) 
        VALUES ('$usuario->getNoUsuario()', '$usuario->getSenha()', '$usuario->getEmail()', '$usuario->getDtRegistro()')";
        $retorno = null;

        try {
            mysqli_query($this->conn->stablishDBConnection(), $query);
            $retorno = true;
        } catch (\Throwable $th) {
            $returon = false;
            throw $th;
        }

        if ($retorno) {
            header('Location: ../views/home.php');
        }
    }
    
    public function edit($id, $usuario) {
        $query = "UPDATE usuario SET no_usuario = '$usuario->getNoUsuario()', 
        senha = '$usuario->getSenha()', dt_alteracao = '$usuario->getDtAlteracao()' 
        WHERE id_usuario = '$usuario->getIdUsuario()'";
        $retorno = null;

        try {
            $retorno = true;
        } catch (\Throwable $th) {
            $retorno = false;
            throw $th;
        }

        if ($retorno) {
            // retornar para alguma página
        }
    }
    
    public function destroy($id) {
        $query = "DELETE usuario WHERE id_usuario = '$id'";
    }

    public function perfil($id) {
        $query = "SELECT no_usuario, dt_registro, dt_alteracao FROM usuario WHERE id_usuario = '$id'";

    }
}

?>