<h1>aqui vais criar uma nova turma</h1>

<form action="{{route('turma.store')}}" method="POST">
@csrf()
<input type="text" name="is_admin" value="1" hidden>
<input type="text" placeholder="nome da turma" name="nome">
<input type="number" placeholder="ano da turma" name="ano">
<button type="submit">Enviar</button>

</form>