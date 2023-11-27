@extends('app')

@section('title', 'Home')

<title>Cozy Ultar</title>

@section('content')

    <div class="backgrond-ctulhu">

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="mt-5 col-sm-5 offset-sm-2 col-md-8 offset-md-5">
                    <h1 class="text-center text-uppercase mt-5">Worlds of Lovecraft</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="buttons-mid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <button type="button" class="btn btn-books btn-outline-primary btn-lg">Биография<br>Библиография</button>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <button type="button" class="btn btn-media btn-outline-primary btn-lg">Фильмы<br>Игры</button>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <button type="button" class="btn btn-creatures btn-outline-primary btn-lg">Бестирарий</button>
                </div>
            </div>
        </div>
    </footer>
    </div>

@endsection
