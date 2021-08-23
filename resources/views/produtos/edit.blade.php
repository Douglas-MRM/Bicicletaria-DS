@extends('modelo')
@section('title', 'Produtos')
@section('content')

<div class="container">
    <div class="row col-12 my-5">
        <h1 class="text-center text-light">Atuilizar Produto</h1>
    </div>

    <form>
        <div class="form-group">
            <div class="mb-3">
                <label for="nome" class="form-label text-white">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label text-white">Marca</label>
                <input type="text" class="form-control" name="marca" id="marca">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary ">ATUALIZAR</button>
                <button type="reset" class="btn btn-danger">CANCELAR</button>
            </div>
            
        </div>
    </form>
</div>
<!-- Combo box categoria e Fornecedor! -->
@endsection