<?php 

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_bibliotecario'];
            $email = $_POST['email_bibliotecario'];
            $telefone = $_POST['telefone_bibliotecario'];

            $sql = "INSERT INTO bibliotecario 
                (nome_bibliotecario, email_bibliotecario, telefone_bibliotecario)
                VALUES ('{$nome}', '{$email}', '{$telefone}')";

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar-bibliotecario';</script>";
            }else {
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-bibliotecario';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST['nome_bibliotecario'];
            $email = $_POST['email_bibliotecario'];
            $telefone = $_POST['telefone_bibliotecario'];
            $sql = "UPDATE bibliotecario SET nome_bibliotecario='{$nome}', email_bibliotecario='{$email}', telefone_bibliotecario='{$telefone}' WHERE id_bibliotecario=".$_REQUEST['id_bibliotecario'];
            $res = $conn->query($sql);
            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-bibliotecario';</script>";
            }else{
                print "<script>alert('Falha na edição');</script>";
                print "<script>location.href='?page=listar-bibliotecario';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM bibliotecario WHERE id_bibliotecario=".$_REQUEST['id_bibliotecario'];           
            $res = $conn->query($sql);           
            if($res == true){
                print "<script>alert('Excluiu com sucesso!');</script>";

                print "<script>location.href='?page=listar-bibliotecario';</script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>location.href='?page=listar-bibliotecario';</script>";
            }
            break;
    }
?>