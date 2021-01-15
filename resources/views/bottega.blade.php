<!--Pagina iniziale della bottega-->
@extends('layouts.bott_layout')
@section('content')

    <div  style="
    background-image: url(img/sfondo_filtro_da_provare.png);
    background-repeat: no-repeat;
    background-size:100% 100%;
    text-align: center;
    height: 100vh
    ">
    <!--titolo--><div data-video="gV_jfOVWimE"  
        data-autoplay="0"         
        data-loop="1"             
        id="youtube-audio"
        style="display:none" >
 </div>
    <div class="row text-center" style="width:100%">
        <div class="col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-sm-1 col-lg-1 col-md-1 " style="padding-top: 250px;padding-right:0!important;padding-left: 0!important;">
            <a href="licenza.html" onclick="window.open('licenza.html','nuovaFinestra','width=800,height=500'); return false;" onkeypress="window.open('licenza.html','nuovaFinestra','width=663,height=741'); return false;" title="Esempio di pop-up accessibile - Link interno - Nuova finestra" style="color:white;font-size:50px;font-family: aliens and cows;letter-spacing: -5px;text-decoration:none">Licenza</a><br>
            <a href="bottega.html" onclick="window.open('bottega.html','nuovaFinestra','width=663,height=741'); return false;" onkeypress="window.open('bottega.html','nuovaFinestra','width=663,height=741'); return false;" title="Esempio di pop-up accessibile - Link interno - Nuova finestra" style="color:white;font-size:50px;font-family: aliens and cows;letter-spacing: -5px;text-decoration:none">Bottega</a><br>
            <a href="catalogo" style="color:white; font-size:50px;font-family: aliens and cows;letter-spacing: -5px;text-decoration:none ">Catalogo</a><br><br>
        </div>  
        <div class="col-sm-4 col-lg-4 col-md-4" style="padding-right:0!important"padding-left: 0!important;>
            <img src="img/CENTROFINITO.png" class="center img" style="position:relative;z-index: -1;max-width:100%">
        </div>
    <!-- LINKS:Catalogo (reale) {,regole, licenza,bottega } => popup-->
        <div class="col-sm-1 col-lg-1 col-md-1" style="padding-top: 250px;padding-right:0!important;padding-left: 0!important;">
            <a href="catalogo." style="color:white; font-size:50px;font-family: aliens and cows;letter-spacing: -5px;text-decoration:none ">Regole</a><br>
            <a href="bottega.html" onclick="window.open('bottega.html','nuovaFinestra','width=663,height=741'); return false;" onkeypress="window.open('bottega.html','nuovaFinestra','width=663,height=741'); return false;" title="Esempio di pop-up accessibile - Link interno - Nuova finestra" style="color:white;font-size:50px;font-family: aliens and cows;letter-spacing: -5px;text-decoration:none">Bottegai</a><br>
            <a href="licenza.html" onclick="window.open('licenza.html','nuovaFinestra','width=500,height=301'); return false;" onkeypress="window.open('licenza.html','nuovaFinestra','width=663,height=741'); return false;" title="Esempio di pop-up accessibile - Link interno - Nuova finestra" style="color:white;font-size:50px;font-family: aliens and cows;letter-spacing: -5px;text-decoration:none">Certificati</a><br>
        
        </div>
        <div class="col-sm-3 col-lg-3 col-md-3"></div>
    </div>
</div>
</body>

<script>
  
    </script>
    
    
</html>
@endsection