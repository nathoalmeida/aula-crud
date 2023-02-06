<?php
    switch($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); //md5 não deixa a senha exposta no bd
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true) {
                print"<script>alert('Cadastro realizado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                print"<script>alert('Erro no cadastro');</script>";
                print"<script>location.href='?page=listar';</script>";
            }
            break;
        
        case 'editar':

            break;

        case 'excluir':

            break;
    }

    ?>