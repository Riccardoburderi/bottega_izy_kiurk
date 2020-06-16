@extends('layouts.app')

@section('content')

<style>
    .container {
    }
    .push-top {
      margin-top: 50px;
      max-width:300px;
    }
    .table{
        font-size:30px;
    }
    #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
</style>
<div class="column">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="card push-top">
            <div class="card-header">
                Aggiungi Animale
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
                <form method="post" action="{{ route('animals.store') }}">
                    <div class="form-group">
                        @csrf
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="price">Prezzo</label>
                        <input type="text" class="form-control" name="price"/>
                    </div>
                    <div class="form-group">
                        <label for="recipe">Ricetta Personalizzata</label>
                        <input type="text" class="form-control" name="recipe"/>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Data di Nascita</label>
                        <input type="text" class="form-control" name="birthday"/>
                    </div>
                    <!-- <div class="form-group">
                        <strong>Image: not working</strong>
                        <input type="file" id="pic" name="pic" class="form-control"></input>
                    </div> -->
                    <div class="form-group">
                        <label for="image">Immagine</label>
                        <input type="text" class="form-control" name="image"/>
                    </div>
                    <div class="form-group">
                        <label for="description">Descrizione Personalizzata</label>
                        <input type="text" class="form-control" name="description"/>
                    </div>
                    <div class="form-group">
                    <label for="subcategory_id">Sottocategoria</label>

                        <input type="text" name="subcategory_id" list="subcategory_id">
                        <datalist id="subcategory_id">
                        @foreach($sub as $subcategory)

                        <option value="{{ $subcategory->id }}">
                            {{ $subcategory->name }}
                        </option>

                        @endforeach
                        </datalist>
                    <button type="submit" class="btn btn-block btn-danger">Crea Animale</button>
                    </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="push-top">
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}  
                </div><br />
            @endif
            <input type="text" id="myInput" onkeyup="myFunctionSearch()" placeholder="Search for names..">

            <table class="table" id="myTable">
                <thead>
                    <tr class="table-warning">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Prezzo</td>
                    <td>Ricetta personalizzata</td>
                    <td>Compleanno</td>
                    <td>Immagine</td>
                    <td>Descirzione</td>
                    <td>Sottocategoria</td>
                    <td>Vend</td>
                    <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($animal as $animals)
                <tr>
                        <td>{{$animals->id}}</td>
                        <td>{{$animals->name}}</td>
                        <td>{{$animals->price}}</td>
                        <td>{{$animals->recipe}}</td>
                        <td>{{$animals->birthday}}</td>
                        <td>{{$animals->image}}</td>
                        <td>{{$animals->description}}</td>
                        <td>{{$animals->subcategory->name}}</td>
                        <td>{{$animals->venduto}}</td>
                        <td class="text-center">
                            <a href="{{ route('animals.edit', $animals->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('animals.destroy', $animals->id)}}" method="post" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection