@extends('marcas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('marcas.create') }}"> Nova</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Detalhes</th>
            <th width="300px">Ação</th>
        </tr>
        @foreach ($marcas as $marca)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $marca->nome }}</td>
            <td>{{ $marca->detalhes }}</td>
            <td>
                <form action="{{ route('marcas.destroy',$marca->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('marcas.show',$marca->id) }}">Visualizar</a>
    
                    <a class="btn btn-primary" href="{{ route('marcas.edit',$marca->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Excluir </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $marcas->links() !!}
@endsection