@extends('modelo')
@section('title', 'Estoque')
@section('content')
<div class="container">
    <div class="row col-12 my-5">
        <h1 class="text-center text-light">Listagem do Estoque</h1>
    </div>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Valor</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>

        <tbody>
            @if($estoque->isEmpty())
            <tr>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td colspan="2"></td>
            </tr>
            @else
            @foreach($estoque as $dados)
            <tr data-id="{{$dados->id}}">
                <td>{{$dados->produtos->nome}}</td>
                <td>{{$dados->quantidade}}</td>
                <td>{{$dados->valor_unitario}}</td>
                <td><a href="" class="btn btn-success btn-custom">UP</span></a>
                <td><a href="" class="btn btn-danger btn-custom">DOWN</span></a>
            @endforeach
            @endif
            </tr>
        </tbody>
    </table>

</div>
@endsection