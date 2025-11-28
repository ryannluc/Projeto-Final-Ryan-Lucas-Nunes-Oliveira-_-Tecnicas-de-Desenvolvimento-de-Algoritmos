<h1>Editar bibliotecario</h1>
<?php
$id_bibliotecario = (int) $_REQUEST['id_bibliotecario']; 
$sql = "SELECT * FROM bibliotecario WHERE id_bibliotecario=" . $id_bibliotecario; 
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-bibliotecario" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_bibliotecario" value="<?php print $row->id_bibliotecario; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_bibliotecario" class="form-control" value="<?php print $row->nome_bibliotecario; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>E-mail
            <input type="email" name="email_bibliotecario" class="form-control" value="<?php print $row->email_bibliotecario; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Telefone
            <input type="text" name="telefone_bibliotecario" class="form-control" value="<?php print $row->telefone_bibliotecario; ?>">
        </label>
    </div>
    <div>
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>
