@extends('painel.templates.templete')

@section('content')
<h1 class="title-pg">Busca de Automoveis</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{route('automoveis.index')}}" class="btn btn-dark" style="margin-bottom: 2px">Voltar</a>
        </div>
        <div class="col-sm">
            <table class="table table-striped table-bordered">
                <tr class="thead-dark">
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Tipo</th>
                    <th>Ano</th>
                    <th>Placa</th>
                </tr>
                <tr>
                    <td>
                        {{$automovel->modelo}}
                    </td>
                    <td>
                        {{$automovel->marca}}
                    </td>
                    <td>
                        {{$automovel->tipo}}
                    </td>
                    <td>
                        {{$automovel->ano}}
                    </td>
                    <td>
                        {{$automovel->placa}}
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
