@extends('modelo')
@section('title', 'Serviços')
@section('content')
<div class="container">
    <div class="row col-12 my-5">
        <h1 class="text-center text-light">Listagem dos Serviços</h1>
    </div>
    <table class="table text-white">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Tempo</th>
                <th scope="col">Mão de Obra</th>
                <th scope="col">Total</th>
                <th scope="col">Descriçao</th>
                <th scope="col" colspan="2"></th>
            </tr>

        </thead>

        <tbody>
            @if($servicos->isEmpty())
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
            @foreach($servicos as $dados)
            <tr data-id="{{$dados->id}}">
                <td>{{$dados->nome}}</td>
                <td>{{$dados->tipo}}</td>
                <td>{{$dados->tempo}}</td>
                <td>{{$dados->valor_mao_obra}}</td>
                <td>{{$dados->valor_total}}</td>
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