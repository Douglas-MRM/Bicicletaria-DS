@extends('modelo')
@section('title', 'Clientes')
@section('content')
<div class="container">
    <div class="row col-12 my-5">
        <h1 class="text-center text-light">Listagem dos Clientes</h1>
    </div>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
                <th scope="col">Sexo</th>
                <th scope="col" colspan="2"></th>
            </tr>

        </thead>

        <tbody>
            @if($clientes->isEmpty())
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td colspan="2"></td>
            </tr>
            @else
            @foreach($clientes as $dados)
            <tr data-id="{{$dados->id}}">
                <td>{{$dados->nome}}</td>
                <td>{{$dados->data_nascimento}}</td>
                <td>{{$dados->email}}</td>
                <td>{{$dados->endereco}}</td>
                <td>{{$dados->sexo}}</td>
                <td><a href="" class="btn btn-success btn-custom">EDITAR</span></a>
                <td><a href="" class="btn btn-danger btn-custom">DELETE</span></a>
                @endforeach
                @endif
            </tr>
        </tbody>
    </table>

</div>
@endsection