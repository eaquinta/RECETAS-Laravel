@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1 class="text-center">Hola Mundo!</h1>
        <a class="btn btn-primary" href="{{ route('client.index') }}">Clientes</a>
    </div>
@endsection
