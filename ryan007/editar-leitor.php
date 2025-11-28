<h1>Editar leitor</h1>
<?php
$id_leitor = (int) $_REQUEST['id_leitor']; 
$sql = "SELECT * FROM leitor WHERE id_leitor=" . $id_leitor; 
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-leitor" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_leitor" value="<?php print $row->id_leitor; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_leitor" class="form-control" value="<?php print $row->nome_leitor; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_leitor" class="form-control" value="<?php print $row->email_leitor; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Telefone
            <input type="text" name="telefone_leitor" class="form-control" value="<?php print $row->telefone_leitor; ?>">
        </label>
    </div>
    <div>
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>
