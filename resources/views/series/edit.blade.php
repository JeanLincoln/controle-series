<x-layout title="Editar Serie {!! $series->nome !!}">
     <form action="{{route('series.update', $series->id)}}" method="post">
     @csrf
     @method('PUT')
     <div class="row mb-3">
     <div class="col-6 mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input 
           autofocus
           type="text" 
           id="nome" 
           name="nome" 
           class="form-control" 
           placeholder="Digite o nome da série" 
           @isset($series->nome)value="{{$series->nome}}"@endisset>
     </div>
     <div class="col-3 mb-3">
        <label for="seasonsQty" class="form-label">N° Temporadas:</label>
        <input 
           type="text" 
           id="seasonsQty" 
           name="seasonsQty" 
           class="form-control" 
           placeholder="Digite o N° de temporadas" 
           @isset($series->seasonsQty)value="{{$series->seasonsQty}}"@endisset>
     </div>
     <div class="col-3 mb-3">
        <label for="episodesPerSeason" class="form-label">Eps / Temporada:</label>
        <input 
           type="text" 
           id="episodesPerSeason" 
           name="episodesPerSeason" 
           class="form-control" 
           placeholder="Digite o N° de episodios por temporada" 
           @isset($series->episodesPerSeason)value="{{$series->episodesPerSeason}}"@endisset>
     </div>
     </div>
     <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>