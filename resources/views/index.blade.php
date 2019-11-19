<h1>Lista</h1>
<ul>

@foreach ($cadastros as $user)
    <li>
        Nome: {{ $user->name }} - <a href="{{route('products.edit',$user->id)}}">Editar</a>
        Descrição: {{ $user->descrition }} <br><br><br>
        <img src="{{ url('storage/'.$user->piciture) }}"/>
    </li>
@endforeach
</ul>
