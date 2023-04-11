<x-layout title="Login">
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button class="btn btn-primary mt-2 mb-2">Entrar</button>
    </form>
</x-layout>