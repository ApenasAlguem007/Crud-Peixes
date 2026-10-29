@extends('layouts.app')

@section('content')
<div class="card" style="max-width: 600px; margin: 0 auto;">
    <h2>Editar Tipo</h2>

    <form action="{{ route('types.update', $type->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome do Tipo</label>
            <input type="text" id="name" name="name" required value="{{ old('name', $type->name) }}">
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Atualizar Tipo</button>
    </form>
</div>
@endsection