@extends('app')

@section('title', 'Home')

<title>Cozy Ultar</title>

@section('content')
{{--Главная--}}
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

{{--Библиография--}}
    <div id="books" class="container-fluid background background-books">
        <div class="row">
            <div class="col-md-12 cu-header">
                <h1 class="main-h1">
                    Stories and novels</h1>
            </div>
            <div class="col-md-3 cu-sidebar-left text-start">
            </div>
            <div class="col-md-6 cu-content">
                <table class="table caption-top table-dark border border-danger table-bordered">
                    <caption><h2 class="books-h2">Официальные произведения</h2></caption>
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Русскоязычное название</th>
                        <th scope="col">Оригинальное название</th>
                        <th scope="col">Дата написание</th>
                        <th scope="col">Дата публикации</th>
                        <th scope="col">Издание</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>«Знатный соглядатай»</td>
                        <td>The Noble Eavesdropper</td>
                        <td>1897</td>
                        <td>не публиковалось</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>«Знатный соглядатай»</td>
                        <td>The Noble Eavesdropper</td>
                        <td>1897</td>
                        <td>не публиковалось</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>«Знатный соглядатай»</td>
                        <td>The Noble Eavesdropper</td>
                        <td>1897</td>
                        <td>не публиковалось</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 cu-sidebar-right text-end">
            </div>
            <div class="col-md-12 cu-footer text-center">
            </div>

        </div>
    </div>


    <div id="leftControl" class="control but-h">
        <div id="leftText" class="dirText"></div>
    </div>

    <div id="rightControl" class="control but-h">
        <div id="rightText" class="dirText"></div>
    </div>

    <div id="topControl" class="control center but-v">
        <div id="topText" class="dirText"></div>
    </div>

    <div id="bottomControl" class="control center but-v">
        <div id="bottomText" class="dirText"></div>
    </div>

@endsection
