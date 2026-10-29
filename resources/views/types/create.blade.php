@extends('layouts.app')

@section('content')
<div class="card" style="max-width: 600px; margin: 0 auto;">
    <h2>Cadastrar Novo Tipo</h2>

    <form action="{{ route('types.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome do Tipo (Ex: Rio, Mar)</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="Ex: Rio">
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Salvar Tipo</button>
    </form>
</div>
@endsection