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
                Aggiungi Certificato
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
                <form method="post" action="{{ route('certificates.store') }}">
                <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" list="animal_id">
                        <datalist id="animal_id">
                        @foreach($animal as $anm)
                            <option value="{{ $anm->id }}">
                                {{ $anm->name }}
                            </option>
                        @endforeach
                        </datalist>
                    </div>
                    
                    <div class="form-group">
                        @csrf
                        <label for="personal">Descrizione personale</label>
                        <input type="text" class="form-control" name="personal"/>
                    </div>
                    
                    <div class="form-group">
                        <label for="animal_id">Animale</label>
                        <input type="text" name="animal_id" list="animal_id">
                        <datalist id="animal_id">
                        @foreach($animal as $anm)
                            <option value="{{ $anm->id }}">
                                {{ $anm->name }}
                            </option>
                        @endforeach
                        </datalist>
                    </div> 
                    <div class="form-group">
                        <label for="proprietario">Proprietario</label>
                        <input type="text" name="proprietario" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="image_big">Immagine Grande</label>
                        <input type="text" name="image_big" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="regalo">Regalo?</label>
                        <input type="checkbox" name="regalo" class="form-control" value="1"/>
                    </div>
                    <div class="form-group">
                        <label for="mittente">Mittente</label>
                        <input type="text" class="form-control" name="mittente"/>
                    </div>
                    <div class="form-group">
                        <label for="dedica">Dedica</label>
                        <input type="text" class="form-control" name="dedica"/>
                    </div>
                    <button type="submit" class="btn btn-block btn-danger">Crea Certificato</button>

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
                    <td>ID Certificato</td>
                    <td>Personal</td>
                    <td>Animal_ID</td>
                    <td>Regalo?</td>
                    <td class="text-center">Action</td>
                    </tr>
                </thead>
                <tbody>
                @foreach($cert as $certs)
                <tr>
                        <td>{{$certs->id}}</td>
                        <td>{{$certs->personal}}</td>
                        <td>{{$certs->animal_id}}</td>
                        <td>{{var_export($certs->regalo, true)}}</td>
                        <td class="text-center">
                            <a href="{{ route('certificates.edit', $certs->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('certificates.destroy', $certs->id)}}" method="post" style="display: inline-block">
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