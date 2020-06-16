<!--Catalogo con tutti gli animali-->
@extends('layouts.bott_layout')
@section('content')
<div class="row mx-0 text-center" >

    <div class="col-sm-3 col-md-3 col-lg-3 " style="margin-top:10%;">
        <img src="img/anfibi.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-left: 70%;" class="img  togglebtn "><br> 
        <img src="img/aracnidi.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-left: 70%;" class="img "><br>
        <img src="img/insetti.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-left: 70%;" class="img "><br>
        <img src="img/roditori.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-left: 70%;" class="img "><br>
        <img src="img/cervidi.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-left: 70%;" class="img "><br>
        <img src="img/ovini.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-left: 70%;" class="img "><br>
    </div>

    <div class=" scroll col-sm-6 col-md-6 col-lg-6 flex-row"  style="max-height:800px!important;margin-top:50px;overflow:auto; display: flex;justify-content: center;flex-wrap:wrap">

    @foreach($animal as $animals)
        
        <div class="card col-sm-6 col-lg-6" style="max-width:250px;background-color: transparent; padding-bottom: 25px;border:none">
            <div class="card-text d-flex justify-content-center align-items-end" style="color: antiquewhite;font-size:14px;height:65px"><br>
                <a href="certificato/{{$animals->id}}" style="text-decoration:none;color:white" >{{$animals->name}}</a></div>
            <div class="tooltip">
            <img  style="min-height: 150px!important;min-width: 150px!important;max-width:250px!important;max-height: 250px!important; display:block;margin:auto;" id="{{$animals->subcategory->id}}" src="img/{{$animals->image}}" alt="Card image cap">
                <span class="tooltiptext"><span style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 15px; letter-spacing: 1px; font-style: normal;"><span style="font-size: 14px;color:white;">{{$animals->subcategory->category->name}} - {{$animals->subcategory->name}}<br>( {{$animals->subcategory->category->ricetta}} ) {{$animals->recipe}}<br>{{$animals->description}}</span></span></span>
            </div> 
            <div class="card-body" style="padding: 1px;">
                <p class="card-text" style="color: antiquewhite;font-size:13px;"> Prezzo : {{$animals->price}} m.o.<br>({{$animals->subcategory->category->name}}00{{$animals->id}})<br><br>
                </p>
            </div>
        </div>
    @endforeach
    </div>

    <div class="col-sm-3 col-md-3 col-lg-3" style="margin-top:10%">
    <img src="img/mustelidi.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-right: 70%; " class="img "><br>
    <img src="img/rettili.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-right: 70%; " class="img "><br>
    <img src="img/felini.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-right: 70%; " class="img "><br>
    <img src="img/volatili.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-right: 70%; " class="img "><br>
    <img src="img/suini.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-right: 70%; " class="img "><br>
    <img src="img/primati.png" style="margin:auto;max-width:80px;max-height: 100px;padding-bottom:15px; margin-right: 70%; " class="img "><br>
    </div>
</div>
@endsection
