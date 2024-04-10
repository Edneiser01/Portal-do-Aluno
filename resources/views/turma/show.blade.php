<h1>conteudo da turma {{$turmas -> id}}</h1>

<ul>
    <li>nome :{{ $turmas -> nome}}</li>
    <li> ano: {{ $turmas -> ano}}</li>
</ul>

<form action="{{route('turma.destroy', $turmas -> id) }}" method="POST">
    @csrf()
    @method('delete')
    <button type="submit"> deletar </button>
</form>