<h1>Cadastrar bibliotecario</h1>
<form action="?page=salvar-bibliotecario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_bibliotecario" class="form-control">
		</label>
	</div>
	
	<div class="mb-3">
		<label>E-mail
			<input type="email" name="email_bibliotecario" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Telefone
			<input type="text" name="telefone_bibliotecario" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
