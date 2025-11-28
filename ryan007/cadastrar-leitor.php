<h1>Cadastrar leitor</h1>
<form action="?page=salvar-leitor" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Nome
			<input type="text" name="nome_leitor" class="form-control">
		</label>
	</div>
	
	<div class="mb-3">
		<label>E-mail
			<input type="email" name="email_leitor" class="form-control">
		</label>
	</div>

	<div class="mb-3">
		<label>Telefone
			<input type="text" name="telefone_leitor" class="form-control">
		</label>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>