<!--layout del certificato-->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bottega Izy e Kiurk</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
 <script src="https://cdn.rawgit.com/labnol/files/master/yt.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="//db.onlinewebfonts.com/c/d4f498023801dd6ec85ab70468df2c03?family=aliens+and+cows" rel="stylesheet" type="text/css"/>
      
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    @import url(//db.onlinewebfonts.com/c/d4f498023801dd6ec85ab70468df2c03?family=aliens+and+cows);
        @font-face {font-family: "aliens and cows"; src: url("//db.onlinewebfonts.com/t/d4f498023801dd6ec85ab70468df2c03.eot"); src: url("//db.onlinewebfonts.com/t/d4f498023801dd6ec85ab70468df2c03.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/d4f498023801dd6ec85ab70468df2c03.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/d4f498023801dd6ec85ab70468df2c03.woff") format("woff"), url("//db.onlinewebfonts.com/t/d4f498023801dd6ec85ab70468df2c03.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/d4f498023801dd6ec85ab70468df2c03.svg#aliens and cows") format("svg"); }
    .scroll::-webkit-scrollbar { width: 0 !important }
    .scroll { overflow: -moz-scrollbars-none; }
  
    a { text-decoration: none } 
    a:hover { text-decoration: none }
    @font-face {
        font-family: alien;
        src: url(./../../public/css/aliensandcows_trial.ttf);
    }
    .shadow{
        background: rgba(0,0,0,0.5); 
        margin-left:15px;
        margin-right:15px;
        color:antiquewhite;
    }

    </style>
</head>
<body style="background:black;overflow:hidden">
    <main>
        @yield('content')
    </main>
    
</body>
</html>
