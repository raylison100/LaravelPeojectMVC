@extends('painel.templates.templete')

@section('content')
    <h1 class="title-pg">Lita de Automoveis</h1>
    <br>
    <form class="form" method="post" action="{{URL('/painel/automoveis/busca')}}">

       <div class="container">
          <div class="row">
              {!! csrf_field() !!}
             <div class="col-sm">
               <input type="text" name="search" placeholder="search: " class="form-control">
             </div>
             <div class="col-sm">
                 <button class="btn btn-secondary">Buscar</button>
             </div>
          </div>
       </div>
    </form>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="{{route('automoveis.create')}}" class="btn btn-primary" style="margin-bottom: 2px"><span class="glyphicon glyphicon-plus"></span>
                    Cadastrar</a>
                <table class="table table-striped table-bordered">
                    <tr class="thead-dark">
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Ano</th>
                        <th>Placa</th>
                    </tr>
                    @foreach($automovel as $auto)
                    <tr>
                        <td>
                            {{$auto->modelo}}
                        </td>
                        <td>
                            {{$auto->marca}}
                        </td>
                        <td>
                            {{$auto->tipo}}
                        </td>
                        <td>
                            {{$auto->ano}}
                        </td>
                        <td>
                            {{$auto->placa}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
