@extends('layout.principal')

@section('conteudo')
    <h1>Novo produto</h1>

    <form action="">
        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Valor</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Quantidade</label>
            <input type="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
@stop