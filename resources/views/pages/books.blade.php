@extends('app')

@section('title', 'Books')

<title>Books</title>

@section('content')

    <div class="background-books">

        <header class="content-text">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 mt-lg-5 col-md mt-md col-sm mt-sm text-lg-end text-md-center text-sm-center">
                        <h1>Books</h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="content-bio-media">
            <div class="container-fluid">
                <div class="row">

                    <div class="col text-end">
                        <div class="col p-1">
                            <button type="button" class="btn btn-bio btn-primary btn-lg" onclick="document.location='{{ route('my.home') }}'">Домой</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="content-books-table">
            <div class="container text-center">
                <table class="table caption-top table-dark border border-danger table-bordered">
                    <caption><h2>Официальные произведения</h2></caption>
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

        </section>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col p-1 text-center">
                        <button type="button" class="btn btn-horizont btn-primary btn-lg">Галерея</button>
                    </div>
                </div>
            </div>
        </footer>

    </div>

@endsection

