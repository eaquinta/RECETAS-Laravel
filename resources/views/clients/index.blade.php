@extends('theme.base');
@section('content')
    <div class="container">
        <h1>Listado de Clientes</h1>
        <div class="table-responsive">
            <a class="btn btn-primary" href="{{ route('client.create') }}">Crear</a>
            @if (Session::has('mensaje'))
                <div class="alert alert-info">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
            <table class="table table-striped
            table-hover
            table-borderless
            table-primary
            align-middle">
                <thead class="table-light">
                    <caption>Table Name</caption>
                    <tr>
                        <th>Nombre</th>
                        <th>Saldo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse ($clients as $row)
                            <tr class="table-primary" >
                                <td scope="row">{{ $row->name }}</td>
                                <td>{{ $row->due }}</td>
                                <td>Item</td>
                            </tr>
                        @empty
                            <tr>
                                <td>No rows</td>
                            </tr>
                        @endforelse

                    </tbody>
                    <tfoot>

                    </tfoot>
            </table>
        </div>
        <div class="text-center">
            {{ $clients->links() }}
        </div>

    </div>
@endsection
