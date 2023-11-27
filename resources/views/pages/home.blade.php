@extends('app')

@section('title', 'Home')

<title>Cozy Ultar</title>

@section('content')

<div class="backgrond-ctulhu">

    <header class="content-text">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 mt-5 text-end">
                    <h1>Worlds</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-8 text-end">
                    <h1>of</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-9 text-end">
                    <h1>Lovecraft</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="content-bio-media">
        <div class="container-fluid text-center">
            <div class="row align-items-center">

                <div class="col text-start">
                    <div class="col p-1">
                        <button type="button" class="btn btn-vertical btn-primary btn-lg">Биография</button>
                    </div>
                    <div class="col p-1">
                        <button type="button" class="btn btn-vertical btn-primary btn-lg">Библиография</button>
                    </div>
                </div>

                <div class="col-6 text-end">
                    <div class="col-12 p-1">
                        <button type="button" class="btn btn-vertical btn-primary btn-lg">Фильмы</button>
                    </div>
                    <div class="col-12 p-1">
                        <button type="button" class="btn btn-vertical btn-primary btn-lg">Игры</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="fixed-bottom">
        <div class="container-fluid text-center">
            <div class="row align-items-center">
                <div class="col-12 p-1">
                    <button type="button" class="btn btn-horizont btn-primary btn-lg">Бестирарий</button>
                </div>
            </div>
        </div>
    </footer>

</div>

@endsection
