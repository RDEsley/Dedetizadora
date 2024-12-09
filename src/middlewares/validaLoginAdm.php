<?php
include('../conexao/conexao.php');

if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['senha'])) {

    
    if (strlen($_POST['nome']) == 0) {
        echo "Preencha com sueu nome";
    } else if(strlen($_POST['email']) == 0) {
        echo "Preencha com seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM admins WHERE email = '$email' AND senha = '$senha' AND nome = '$nome' ";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: indexCad.php");

        } else {

            print "<script>alert('Falha ao logar! E-mail ou senha incorretos!');</script>";
       

        }

    }

}
?>