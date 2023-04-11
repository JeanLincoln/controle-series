<x-layout title="Episódios">
    <form method="POST">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-itens-center">
                    Episódio: {{$episode->number}} 
                    <input type="checkbox" name="episodes[]" value="{{ $episode->id }}" />
                </li>
            @endforeach
        </ul>
        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>
</x-layout>