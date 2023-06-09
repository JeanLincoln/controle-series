<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    <a href="{{route('series.create')}}" class="btn btn-dark mb-1">Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-itens-center">
                <a href="{{route('seasons.index', $serie->id)}}">{{$serie->nome}}</a>    
            
                <div class="d-flex">
                    <a href="{{route('series.edit',$serie->id)}}" class="btn btn-primary btn-sm">E</a>
                    <form class="ms-2" action="{{ route('series.destroy', $serie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <script>
	    const series = {{ Js::from($series) }}
    </script>
</x-layout>