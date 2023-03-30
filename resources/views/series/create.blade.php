<x-layout title="Nova Série">
     <form action="{{route('series.store')}}" method="post">
     @csrf
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
           value="{{old('nome')}}">
     </div>
     <div class="col-3 mb-3">
        <label for="seasonsQty" class="form-label">N° Temporadas:</label>
        <input 
           type="text" 
           id="seasonsQty" 
           name="seasonsQty" 
           class="form-control" 
           placeholder="Digite o N° de temporadas" 
           value="{{old('seasonsQty')}}">
     </div>
     <div class="col-3 mb-3">
        <label for="episodesPerSeason" class="form-label">Eps / Temporada:</label>
        <input 
           type="text" 
           id="episodesPerSeason" 
           name="episodesPerSeason" 
           class="form-control" 
           placeholder="Digite o N° de episodios por temporada" 
           value="{{old('episodesPerSeason')}}">
     </div>
     </div>
     <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>