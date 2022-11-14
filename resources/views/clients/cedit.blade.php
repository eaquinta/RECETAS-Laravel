@extends('theme.base');

@section('content')
    <div class="container py-5 text-center">
        <h1>Crear Cliente</h1>
            <form action="{{ route('client.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" placeholder="Nombre Cliente" value="{{ old('name') }}">
                    <p class="form-text">Escriba el nombre del cliente</p>
                    @error('name')
                        <p class="form-text text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="due" class="form-label">Saldo</label>
                    <input type="number" class="form-control" name="due" placeholder="Saldo del Cliente" step="0.01" value="{{ old('due') }}">
                    <p class="form-text">Escriba el saldo del cliente</p>
                    @error('due')
                        <p class="form-text text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label">Comentario</label>
                    <textarea class="form-control" name="comments" cols="30" rows="4">{{ old('comments') }}</textarea>
                    <p class="form-text">Escriba algunos Comentarios</p>
                </div>

                <button class="btn btn-primary" type="submit">Guradar</button>
            </form>
    </div>
@endsection
