@extends('app')

@section('title', 'Home')

<title>Cozy Ultar</title>

@section('content')

    <div class="container-fluid background-ctulhu">
        <div class="row">
            <div class="col-md-12 cu-header">
                    <h1 class="main-h1">Worlds of Lovecraft</h1>
            </div>
            <div class="col-md-3 cu-sidebar-left text-start">
                    <button type="button" class="btn cu-btn-main btn-lg"
                            onclick="document.location='{{ route('my.books') }}'">Библиография
                    </button>
            </div>
            <div class="col-md-6 cu-content">
            </div>
            <div class="col-md-3 cu-sidebar-right text-end">
                <button type="button" class="btn cu-btn-main btn-lg">Фильмы</button>
            </div>
            <div class="col-md-12 cu-footer text-center">
                <button type="button" class="btn cu-btn-main btn-lg mb-2">Бестирарий</button>
            </div>
        </div>
    </div>

@endsection
