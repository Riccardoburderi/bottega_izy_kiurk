<!--Certificato dell animale-->
@extends('layouts.cert_layout')
@section('content')
<div >
    <div class="mx-auto" style="background-image: url(./../../img/sfondo_certificato.png);background-repeat:no-repeat;width:42%;height:99vh">
        <div class="row"> 
            <div class="col-sm-6 col-md-6 col-lg-6">
                <img src="./../../img/Logo_certificato_.png" alt="Logo Bottega" width="70%" height="auto"  style="opacity:0.8">
 
                <div class="container shadow text-center">
                    <h1 style="padding-top:15px">
                        {{$certificate->animal->name}}
                    </h1>
                    <p style="color:white;font-size:17px;LINE-HEIGHT:20px;font-family:">
                    <br>
                    Nascita 
                    {{$certificate->animal->birthday}}
                    <br>
                    </p>
                    <p style="font-family:aliens and cows;font-size:60px;LINE-HEIGHT:20px;letter-spacing:-5px;font-weight:100;">
                    {{$certificate->animal->subcategory->category->name}}~{{$certificate->animal->subcategory->name}}<br>
                    </p>
                    <p style="font-size:20px;LINE-HEIGHT:20px;">
                    {{$certificate->personal}}<br>
                    {{$certificate->animal->subcategory->description}}
                    </p>
                </div>
            </div>   
            <div class=" text-center col-sm-6 col-md-6 col-lg-6">  
                <span style="height:80px;display:block"></span>
                <p style="color:white;font-size:20px">
                Proprietà di ...<br>
                in dono a ...<br>
                </p>
                <span style="height:80px;display:block"></span>
                <img src="./../../img/cornice_ufficiale_certificato.png" alt="cornice image_big"  width="100%" height="auto" >
            </div>     

        </div>
        <div class="text-center mx-auto" style=" background: rgba(0,0,0,0.5); height:100px;margin-top:40px;  width:650px;
        color:antiquewhite;">
        <p style="font-size:60px">
        {{$certificate->dedica}}
        </p>
        </div>
    </div>
</div>
@endsection