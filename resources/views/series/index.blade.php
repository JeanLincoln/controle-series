<x-layout title="Séries">
    <a href="{{route('series.create')}}" class="btn btn-dark mb-1">Adicionar</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
    @endisset
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-itens-center">{{$serie->nome}}
                <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </li>
        @endforeach
    </ul>

    <script>
	    const series = {{ Js::from($series) }}
    </script>
</x-layout>