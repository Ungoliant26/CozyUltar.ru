@extends('app')

@section('title', 'Home')

<title>Cozy Ultar</title>

@section('content')

<div class="background-ctulhu">

    <header class="content-text">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 mt-lg-5 col-md mt-md col-sm mt-sm text-lg-end text-md-center text-sm-center">
                    <h1>Worlds of Lovecraft</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="content-bio-media">

        <div class="container-fluid">

            <div class="row">

                    <div class="col text-start ">
                        <button type="button" class="btn btn-vertical btn-lg" onclick="document.location='{{ route('my.books') }}'">Библиография</button>
                    </div>

                <div class="col text-end">
                    <div class="col">
                        <button type="button" class="btn btn-vertical btn-lg">Фильмы</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container-fluid">
            <div class="row">
                    <div class="col p-1 text-center">
                        <button type="button" class="btn btn-horizont btn-lg">Бестирарий</button>
                    </div>
            </div>
        </div>
    </footer>

</div>

@endsection
