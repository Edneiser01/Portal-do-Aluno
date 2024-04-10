<h1>Edite o nome da turma {{ $turmas-> id }} </h1>

<form action="{{route('turma.update', $turmas -> id )}}" method="POST">
@csrf()
@method('put')
<input type="text" name="is_admin" value="1" hidden>
<input type="text" placeholder="nome da turma" name="nome">
<input type="number" placeholder="ano da turma" name="ano">
<button type="submit">Enviar</button>

</form>