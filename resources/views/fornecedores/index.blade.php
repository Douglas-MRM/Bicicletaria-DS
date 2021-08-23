@extends('modelo')
@section('title', 'Fornecedores')
@section('content')
<div class="container">
    <div class="row col-12 my-5">
        <h1 class="text-center text-light">Listagem dos Fornecedores</h1>
    </div>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Descrição</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>

        <tbody>
            @if($fornecedores->isEmpty())
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td colspan="2"></td>
            </tr>
            @else
            @foreach($fornecedores as $dados)
            <tr data-id="{{$dados->id}}">
                <td>{{$dados->nomeFantasia}}</td>
                <td>{{$dados->cnpj}}</td>
                <td>{{$dados->estado}}</td>
                <td>{{$dados->cidade}}</td>
                <td>{{$dados->telefone}}</td>
                <td>{{$dados->endereco}}</td>
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