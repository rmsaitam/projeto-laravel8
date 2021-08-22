@extends('marcas.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Visualizar Marca</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('marcas.index') }}"> Voltar</a>
        </div>
    </div>
</div>
   
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome:</strong>
            {{ $marca->nome }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Detalhes:</strong>
            {{ $marca->detalhes }}
        </div>
    </div>
</div>
@endsection