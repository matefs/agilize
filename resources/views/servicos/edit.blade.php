@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update servico</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('servicos.update', $servicos->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="descricao">descricao:</label>
                <input type="text" class="form-control" name="descricao" value={{ $servicos->descricao }} />
            </div>

            <div class="form-group">
                <label for="valor">valor:</label>
                <input type="number" class="form-control" name="valor" value={{ $servicos->valor }} />
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection