<h1>Listar editora</h1>
<?php
$sql = "SELECT * FROM editora";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Ações</th>";
    print "</tr>";
    
    while( $row = $res->fetch_object() ){     
        print "<tr>";     
        print "<td>".$row->id_editora."</td>";
        print "<td>".$row->nome_editora."</td>";
        print "<td>
                <button class='btn btn-success'
                onclick=\"location.href='?page=editar-editora&id_editora={$row->id_editora}';\" >Editar</button>
                <button class='btn btn-danger' onclick=\"if(
                confirm('Tem certeza que deseja excluir?')){
                location.href='?page=salvar-editora&acao=excluir&id_editora={$row->id_editora}';
                }else{false;}\">Excluir</button>
               </td>";
        print "</tr>";
    }
    print "</table>";   
} else{
    print "<p> Nao encontrou resultado</p>";
}
?>