<x-layout title="Séries">
    <a href="{{route('Series.create')}}" class="btn btn-dark mb-1">Adicionar</a>
    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{$mensagemSucesso}}
        </div>
    @endisset
    <ul class="list-group">
        @foreach ($Series as $Series)
            <li class="list-group-item d-flex justify-content-between align-itens-center">{{$Series->nome}}
                <div class="d-flex">
                    <a href="{{route('Series.edit',$Series->id)}}" class="btn btn-primary btn-sm">E</a>
                    <form class="ms-2" action="{{ route('Series.destroy', $Series->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">X</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <script>
	    const Series = {{ Js::from($Series) }}
    </script>
</x-layout>