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
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); //md5 não deixa a senha exposta no bd
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET 
                        nome = '{$nome}',
                        email = '{$email}',
                        senha = '{$senha}',
                        data_nascimento = '{$data_nasc}'
                    WHERE 
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true) {
                print"<script>alert('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar';</script>";
            } else {
                print"<script>alert('Não foi possível editar');</script>";
                print"<script>location.href='?page=listar';</script>";
            }

            break;

        case 'excluir':

            break;
    }

    ?>