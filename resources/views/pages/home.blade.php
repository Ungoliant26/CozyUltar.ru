@extends('app')

@section('title', 'Home')

<title>Cozy Ultar</title>

@section('content')

    <div id="home" class="container-fluid background background-ctulhu">
        <div class="row">
            <div class="col-md-12 cu-header">
                <h1 class="main-h1">Worlds of Lovecraft</h1>
            </div>
            <div class="col-md-3 cu-sidebar-left"></div>
            <div class="col-md-6 cu-content"></div>
            <div class="col-md-3 cu-sidebar-right"></div>
            <div class="col-md-12 cu-footer text-center"></div>
        </div>
    </div>

    <div id="books" class="container-fluid background background-books">
        <div class="row">
            <div class="col-md-12 cu-header">
                <h1 class="main-h1">Books</h1>
            </div>
            <div class="col-md-3 cu-sidebar-left"></div>
{{--            <div class="col-md-8 cu-content"></div>--}}
            <div class="col-md-3 cu-sidebar-right"></div>
            <div class="col-md-12 cu-footer text-center"></div>
        </div>
    </div>

    <div id="leftControl" class="control but-h">
{{--        <img id="leftArrow" class="arrow left" style="width:60px" src="img/buttons/buttonMain.png">--}}
        <div id="leftText" class="dirText" style="float:right">Книги</div>
    </div>

    <div id="rightControl" class="control but-h">
{{--        <button id="rightArrow" class="arrow right"></button>--}}
        <div id="rightText" class="dirText">Книги1</div>
    </div>

    <div id="topControl" class="control center but-v">
{{--        <img id="topArrow" class="arrow left" style="height:60px" src="img/buttons/buttonMain.png">--}}
        <div id="topText" class="dirText txtcenter">Галерея</div>
    </div>

    <div id="bottomControl" class="control center but-v">
        <div id="bottomText" class="dirText txtcenter">Галерея</div>
{{--        <img id="bottomArrow" class="arrow left" style="height:60px" src="img/buttons/buttonMain.png">--}}
    </div>

@endsection
