<?php 

    switch ($_REQUEST['acao']) {
        case 'cadastrar':
            $nome = $_POST['nome_editora'];

            $sql = "INSERT INTO editora 
                    (nome_editora)
                    VALUES ('{$nome}')";
            $res = $conn->query($sql);

            if ($res==true){
                print "<script>alert('cadastrou com sucesso');</script>";
                print "<script>location.href='?page=listar-editora';</script>";
            }else {
                print "<script>alert('Não cadastrou');</script>";
                print "<script>location.href='?page=listar-editora';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST['nome_editora'];
            $sql = "UPDATE editora SET nome_editora='{$nome}' WHERE id_editora=".$_REQUEST['id_editora'];
            $res = $conn->query($sql);
            if($res == true){
                print "<script>alert('Editou com sucesso!');</script>";
                print "<script>location.href='?page=listar-editora';</script>";
            }else{
                print "<script>alert('Falha na edição');</script>";
                print "<script>location.href='?page=listar-editora';</script>";
            }
            break;
        case 'excluir':
            $sql = "DELETE FROM editora WHERE id_editora=".$_REQUEST['id_editora'];           
            $res = $conn->query($sql);           
            if($res == true){
                print "<script>alert('Excluiu com sucesso!');</script>";

                print "<script>location.href='?page=listar-editora';</script>";
            }else{
                print "<script>alert('Não excluiu');</script>";
                print "<script>location.href='?page=listar-editora';</script>";
            }
            break;
    }
?>