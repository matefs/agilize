@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Addicionar serviço </h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('servicos.store') }}">
          @csrf
          <div class="form-group">    
              <label for="descricao">Descricao:</label>
              <input type="text" class="form-control" name="descricao"/>
          </div>

          <div class="form-group">
              <label for="valor">VALOR:</label>
              <input type="number" class="form-control" name="valor"/>
          </div>

          <button type="submit" class="btn btn-primary-outline">Adicionar servico</button>
      </form>
  </div>
</div>
</div>
@endsection