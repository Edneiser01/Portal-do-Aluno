<h1> Aqui você vê as turmas da escola </h1>

<a href="{{ route('turma.create')}}"> Criar nova turma</a>

<table>
    <thead>
        <th>nome</th>
        <th>ano</th>
    </thead>
    <tbody>
        
       @foreach ($turmas as $item)
        <tr> 
            <td> {{ $item-> nome}} </td>      
            <td> {{ $item-> ano}} </td>
            <td>
                 <a href="{{route('turma.show', $item-> id )}}"> visualizar</a>
                 <a href="{{route('turma.edit', $item -> id )}}"> editar</a>
            </td>
         </tr>
        @endforeach 
    
    </tbody>
</table>

