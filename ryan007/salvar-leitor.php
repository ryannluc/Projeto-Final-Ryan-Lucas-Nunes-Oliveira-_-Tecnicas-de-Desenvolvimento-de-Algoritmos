<?php 

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_leitor'];
            $email = $_POST['email_leitor'];
            $telefone = $_POST['telefone_leitor'];

            $sql = "INSERT INTO leitor 
                (nome_leitor, email_leitor, telefone_leitor)
                VALUES ('{$nome}', '{$email}', '{$telefone}')";

            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar-leitor';</script>";
            }else {
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-leitor';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST['nome_leitor'];
            $email = $_POST['email_leitor'];
            $telefone = $_POST['telefone_leitor'];
            $sql = "UPDATE leitor SET nome_leitor='{$nome}', email_leitor='{$email}', telefone_leitor='{$telefone}' WHERE id_leitor=".$_REQUEST['id_leitor'];
            $res = $conn->query($sql);
            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-leitor';</script>";
            }else{
                print "<script>alert('Falha na edição');</script>";
                print "<script>location.href='?page=listar-leitor';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM leitor WHERE id_leitor=".$_REQUEST['id_leitor'];           
            $res = $conn->query($sql);           
            if($res == true){
                print "<script>alert('Excluiu com sucesso!');</script>";

                print "<script>location.href='?page=listar-leitor';</script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>location.href='?page=listar-leitor';</script>";
            }
            break;
    }
?>