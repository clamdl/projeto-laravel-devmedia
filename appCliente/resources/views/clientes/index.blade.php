@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bem-Vindo</div>

                <div class="panel-body">
                    Sistema de gerenciamento de Clientes!
                    @foreach($clientes as $cliente)

                    <li>{{ $cliente->nome }}</li>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection