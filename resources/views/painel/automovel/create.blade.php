@extends('painel.templates.templete')

@section('content')

<h1 class="title-pg">Cadastro de Automovel</h1>
<br>
@if( isset($errors))
<div class="alert alert-danger">
    @foreach ( $errors as $error)
        @foreach ( $error as $err)
            <p>{{$err}}</p>
        @endforeach
    @endforeach
</div>
@endif

<form class="form" method="post" action="{{route('automoveis.store')}}">

    {!! csrf_field() !!}
    <div class="form-group">
        <input type="text" name="modelo" placeholder="Modelo: " class="form-control">
    </div>

    <div class="form-group">
        <input type="text" name="marca" placeholder="Marca: " class="form-control">
    </div>

    <div class="form-group">
        <input type="text" name="tipo" placeholder="Tipo: " class="form-control">
    </div>

    <div class="form-group">
        <input type="text" name="ano" placeholder="Ano: " class="form-control">
    </div>

    <div class="form-group">
        <input type="text" name="placa" placeholder="Placa: " class="form-control">
    </div>

    <button class="btn btn-primary">Enviar</button>

</form>
@endsection
