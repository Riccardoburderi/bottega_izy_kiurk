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
    Modifica e Aggiorna Certificato -> cambiare tutti i testi
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
      <form method="post" action="{{ route('animals.update', $animal->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')

              <label for="name">Nome</label>
              <input type="text" class="form-control" name="name" value="{{ $animal->name }}"/>
              <label for="price">Prezzo</label>
              <input type="text" class="form-control" name="price" value="{{ $animal->price }}"/>
              <label for="recipe">Ricetta personalizzata</label>
              <input type="text" class="form-control" name="recipe" value="{{ $animal->recipe }}"/>
              <label for="birthday">Anno di Nascita</label>
              <input type="text" class="form-control" name="birthday" value="{{ $animal->birthday }}"/>
              <label for="image">Immagine</label>
              <input type="text" class="form-control" name="image" value="{{ $animal->image }}"/>
              <label for="description">Descrizione</label>
              <input type="text" class="form-control" name="description" value="{{ $animal->description }}"/>
              <label for="subcategory_id">Sottocategoria</label>

<input type="text" name="subcategory_id" list="subcategory_id"  value="{{ $animal->subcategory->id}}">
{{$animal->subcategory->name}}
<datalist id="subcategory_id">
@foreach($sub as $subcategory)

<option value="{{ $subcategory->id }}">
    {{ $subcategory->name }}
</option>

@endforeach
</datalist>
<button type="submit" class="btn btn-block btn-danger">Update Animale</button>
</div>
          </div>
      </form>
  </div>
</div>
@endsection