@extends('layouts.app')

@section('content')

<style>
    .container {
    }
    .push-top {
      margin-top: 50px;
      max-width:300px;
    }
</style>
<div class="row">
    <div class="col-lg-4 col-md-4">
    <div class="card push-top">
  <div class="card-header">
    Aggiungi Sotto Categoria
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('subcategories.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nome</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="description">Descrizione</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          
          <div class="form-group">
              <label for="category_id">Id Categoria</label>
              <input type="text" class="form-control" name="category_id"/>
          </div>
          <button type="submit" class="btn btn-block btn-danger">Crea Sottocategoria</button>
      </form>
  </div>
</div>
    </div>


    <div class="col-lg-8 col-md-8">
    <div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Descrizione</td>
          <td>Id Categoria</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($cat as $subcategories)
    <tr>
            <td>{{$subcategories->id}}</td>
            <td>{{$subcategories->name}}</td>
            <td>{{$subcategories->description}}</td>
            <td>{{$subcategories->category_id}}</td>
            <td class="text-center">
                <a href="{{ route('subcategories.edit', $subcategories->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('subcategories.destroy', $subcategories->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form> 
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
<div>
    </div>
</div>



@endsection