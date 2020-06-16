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
    Modifica e Aggiorna Sottocategoria
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
      <form method="post" action="{{ route('subcategories.update', $subcategory->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Nome</label>
              <input type="text" class="form-control" name="name" value="{{ $subcategory->name }}"/>
              <label for="ricetta">Descrizione</label>
              <input type="text" class="form-control" name="description" value="{{ $subcategory->description }}"/>
              <label for="category_id">Id_categoria</label>
              <input type="text" class="form-control" name="category_id" value="{{ $subcategory->category_id }}"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Update Sottocategoria</button>
      </form>
  </div>
</div>
@endsection