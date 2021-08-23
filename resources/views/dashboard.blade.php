@extends('modelo')
@section('title', 'Dashboard')
@section('css', '/css/dashboard.css')
@section('content')
<div class="buttons">
    <div class="rowone">
        <a id="one" class="btn btn-primary" href="#"><p><img src="img/agenda.png"></p>AGENDA</a>
        <a id="one" class="btn btn-primary" href="{{route('clientes.index')}}"><p><img src="img/cliente.png"></p>CLIENTES</a>
        <a id="one" class="btn btn-primary" href="#"><p><img src="img/compra.png"></p>COMPRA</a>
        <a id="one" class="btn btn-primary" href="#"><p><img src="img/usuario.png"></p>USUÁRIOS</a>
    </div>

    <div class="rowtwo">
        <a id="two" class="btn btn-primary" href="{{route('fornecedores.index')}}"><p><img src="img/fornecedor.png"></p>FORNECEDORES</a>
        <a id="two" class="btn btn-primary" href="#"><p><img src="img/venda.png"></p>VENDA</a>
        <a id="two" class="btn btn-primary" href="{{route('produtos.index')}}"><p><img src="img/produto.png"></p>PRODUTOS</a>
        <a id="two" class="btn btn-primary" href="{{route('funcionarios.index')}}"><p><img src="img/funcionario.png"></p>FUNCIONÁRIOS</a>
    </div>

    <div class="rowthree">
        <a id="three" class="btn btn-primary" href="{{route('servicos.index')}}"><p><img src="img/servico.png"></p>SERVIÇOS</a>
        <a id="three" class="btn btn-primary" href="{{route('estoque.index')}}"><p><img src="img/estoque.png"></p>ESTOQUE</a>
    </div>
</div>
@endsection