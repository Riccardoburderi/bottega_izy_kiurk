@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Benvenuto!
                    <p>
                    Scegli la tabella da visualizzare, all interno potrai aggiungere nuovi elementi o modificare quelli presenti.
                    </p>
                    <i class="far fa-hand-point-up"></i>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
