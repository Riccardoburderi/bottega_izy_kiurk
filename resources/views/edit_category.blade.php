@extends('layouts.app')

@section('content')

<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>

<div class="card push-top">
  <div class="card-header">
    Modifica e Aggiorna Categoria
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('categories.update', $category->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nome</label>
              <input type="text" class="form-control" name="name" value="{{ $category->name }}"/>
              <label for="ricetta">Ricetta</label>
              <input type="text" class="form-control" name="ricetta" value="{{ $category->ricetta }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Categoria</button>
      </form>
  </div>
</div>
@endsection