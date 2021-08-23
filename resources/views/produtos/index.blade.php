@extends('modelo')
@section('title', 'Produtos')
@section('content')

<div class="container">
    <div class="row col-12 my-5">
        <h1 class="text-center text-light">Listagem dos Produtos</h1>
    </div>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Marca</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Descrição</th>
                <th scope="col">Estoque</th>
                <th scope="col">Preço</th>
                <th scope="col" colspan="2"></th>
            </tr>

        </thead>

        <tbody>
            @if($produtos->isEmpty())
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td colspan="2"></td>
            </tr>
            @else
            @foreach($produtos as $dados)
            <tr data-id="{{$dados->id}}">
                <td>{{$dados->nome}}</td>
                <td>{{$dados->categoria}}</td>
                <td>{{$dados->marca}}</td>
                <td>{{$dados->id_fornecedor}}</td>
                <td>{{$dados->descricao}}</td>
                <td>{{$dados->quantidade_estoque}}</td>
                <td>{{$dados->preco}}</td>
                <td><a href="" class="btn btn-success btn-custom">EDITAR</span></a>
                <td><a href="" class="btn btn-danger btn-custom">DELETE</span></a>
                @endforeach
                @endif
            </tr>
        </tbody>
    </table>

</div>
@endsection