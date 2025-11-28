<h1>Listar leitor</h1>
<?php
$sql = "SELECT * FROM leitor";
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
        print "<td>".$row->id_leitor."</td>";
        print "<td>".$row->nome_leitor."</td>";
        print "<td>".$row->email_leitor."</td>";
        print "<td>".$row->telefone_leitor."</td>";
        print "<td>
        <button class='btn btn-success'
        onclick=\"location.href='?page=editar-leitor&id_leitor={$row->id_leitor}';\" >Editar</button>
        <button class='btn btn-danger' onclick=\"if(
        confirm('Tem certeza que deseja excluir?')){
        location.href='?page=salvar-leitor&acao=excluir&id_leitor={$row->id_leitor}';
        }else{false;}\">Excluir</button>
       </td>";
        print "</tr>";
    }
    print "</table>";  
} else{
    print "<p> Nao encontrou resultado</p>";
}
?>