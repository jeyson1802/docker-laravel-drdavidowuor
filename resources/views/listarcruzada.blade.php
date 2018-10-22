@extends('layouts.app')

@section('title', 'Listado Cruzada')

@section('content')

    <div id="page-banner-area" class="page-banner-area">        
    </div><!-- Page Banner end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                    <div class="pull-left"><h3>Lista Inscritos Cruzada</h3></div>
                    <div class="pull-right">
                        <div class="btn-group">
                        <a href="{{ route('cruzada.exportar') }}" class="btn btn-primary" >Exportar - $cruzadas->count() <span class="glyphicon glyphicon-save"></span></a>
                        </div>
                    </div>
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th>Facebook</th>
                        <th>País</th>
                        <th>Iglesia</th>
                        <th>Oración</th>
                        <th>Noticias</th>
                        <th>Eliminar</th>
                        </thead>
                        <tbody>
                        @if($cruzadas->count())  
                        @foreach($cruzadas as $cruzada)  
                        <tr>
                            <td>{{$cruzada->nombres}}</td>
                            <td>{{$cruzada->apellidos}}</td>
                            <td>{{$cruzada->correo}}</td>
                            <td>{{$cruzada->celular}}</td>
                            <td>{{$cruzada->facebook}}</td>
                            <td>{{$cruzada->pais}}</td>
                            <td>{{$cruzada->iglesia}}</td>
                            <td>{{$cruzada->oracion}}</td>
                            <td>{{$cruzada->noticias}}</td>  
                            <td>                          
                            <form action="{{action('CruzadaController@destroy', $cruzada->id)}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        @endforeach 
                        @else
                        <tr>
                            <td colspan="8">No hay registro !!</td>
                        </tr>
                        @endif
                        </tbody>

                    </table>
                    </div>
                </div>
                {{ $cruzada->links() }}
                </div>
            </div><!-- Speaker row 1 -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->

@endsection