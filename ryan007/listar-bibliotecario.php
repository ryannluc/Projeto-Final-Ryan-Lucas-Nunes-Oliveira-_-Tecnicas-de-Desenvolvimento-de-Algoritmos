<h1>Listar bibliotecario</h1>
<?php
$sql = "SELECT * FROM bibliotecario";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Email</th>";
    print "<th>Telefone</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while( $row = $res->fetch_object() ){       
        print "<tr>";      
        print "<td>".$row->id_bibliotecario."</td>";
        print "<td>".$row->nome_bibliotecario."</td>";
        print "<td>".$row->email_bibliotecario."</td>";
        print "<td>".$row->telefone_bibliotecario."</td>";
        print "<td>
        <button class='btn btn-success'
        onclick=\"location.href='?page=editar-bibliotecario&id_bibliotecario={$row->id_bibliotecario}';\" >Editar</button>
        <button class='btn btn-danger' onclick=\"if(
        confirm('Tem certeza que deseja excluir?')){
        location.href='?page=salvar-bibliotecario&acao=excluir&id_bibliotecario={$row->id_bibliotecario}';
        }else{false;}\">Excluir</button>
       </td>";
        print "</tr>";
    }
    print "</table>";  
} else{
    print "<p> Nao encontrou resultado</p>";
}
?>