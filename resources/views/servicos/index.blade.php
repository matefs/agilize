@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">servicos</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>descricao</td>
          <td>valor</td>

          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($servicos as $servico)
        <tr>
            <td>{{$servico->id}}</td>
            <td>{{$servico->descricao}} </td>
            <td>{{$servico->valor}}</td>
    
            <td>
                <a href="{{ route('servicos.edit',$servicos->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('servicos.destroy', $servicos->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection