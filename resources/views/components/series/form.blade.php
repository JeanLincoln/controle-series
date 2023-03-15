    <form action="{{$action}}" method="post">
     @csrf
     @method($method)
     <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input 
           type="text" 
           id="nome" 
           name="nome" 
           class="form-control" 
           placeholder="Digite o nome da série" 
           @isset($nome)value="{{$nome}}"@endisset>
     </div>
     <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>