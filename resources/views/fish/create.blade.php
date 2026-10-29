@extends('layouts.app')

@section('content')
<div class="card" style="max-width: 600px; margin: 0 auto;">
    <h2>Cadastrar Novo Peixe</h2>

    <form action="{{ route('fish.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Nome do Peixe</label>
            <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="Ex: Tucunaré">
        </div>

        <div class="form-group">
            <label for="color">Cor</label>
            <input type="text" id="color" name="color" required value="{{ old('color') }}" placeholder="Ex: Amarelo e verde">
        </div>

        <div class="form-group">
            <label for="type_id">Tipo de Ambiente</label>
            <select id="type_id" name="type_id" required>
                <option value="">Selecione o tipo</option>
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 1rem;">Salvar Peixe</button>
    </form>
</div>
@endsection