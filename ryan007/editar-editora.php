<h1>Editar editora</h1>
<?php
$id_editora = (int) $_REQUEST['id_editora']; 
$sql = "SELECT * FROM editora WHERE id_editora=" . $id_editora; 
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-editora" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_editora" value="<?php print $row->id_editora; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_editora" class="form-control" value="<?php print $row->nome_editora; ?>">
        </label>
        </div>
    <div>
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>