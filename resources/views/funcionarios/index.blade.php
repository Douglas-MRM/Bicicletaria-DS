@extends('modelo')
@section('title', 'Funcionários')
@section('content')
<div class="container">
    <div class="row col-12 my-5">
        <h1 class="text-center text-light">Listagem dos Funcionários</h1>
    </div>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cargo</th>
                <th scope="col">Telefone</th>
                <th scope="col">Descriçao</th>
                <th scope="col" colspan="2"></th>
            </tr>

        </thead>

        <tbody>
            @if($funcionarios->isEmpty())
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td colspan="2"></td>
            </tr>
            @else
            @foreach($funcionarios as $dados)
            <tr data-id="{{$dados->id}}">
                <td>{{$dados->nome}}</td>
                <td>{{$dados->email}}</td>
                <td>{{$dados->endereco}}</td>
                <td>{{$dados->cargo}}</td>
                <td>{{$dados->telefone}}</td>
                <td>{{$dados->descricao}}</td>
                <td><a href="" class="btn btn-success btn-custom">EDITAR</span></a>
                <td><a href="" class="btn btn-danger btn-custom">DELETE</span></a>
                @endforeach
                @endif
            </tr>
        </tbody>
    </table>

</div>
@endsection