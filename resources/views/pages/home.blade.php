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

{{--Биография--}}
    <div id="bio" class="container-fluid background background-bio">
        <div class="row">
            <div class="col-md-12 cu-header">
                <h1 class="main-h1">
                    Biography</h1>
            </div>
            <div class="col-md-2 cu-sidebar-left text-start">
            </div>
            <div class="col-md-8 cu-content-bio">
                    <p class="bioFont">Говард Филлипс Лавкрафт родился в 9 часов утра 20 августа 1890 г. в своем семейном доме по адресу 454 (номер 194 в то время) на улице Энджелл (Angell) в Провиденсе, штат Род-Айленд. Его матерью была Сара Сьюзен Филлипс Лавкрафт, которая вела свою родословную от Джорджа Филлипса, прибывшего в Массачусетс в 1630 году. Его отцом был Уинфилд Скотт Лавкрафт, коммивояжер компании Gorham & Co., Silvermiths, из Провиденса. Когда Лавкрафту было три года, у его отца случился нервный срыв в номере гостиницы в Чикаго, и он был доставлен в больницу Батлера, где пролежал пять лет, и умер 19 июля 1898 года. По всей видимости, Лавкрафту сообщили, что в этот период его отец был парализован и находился в коматозном состоянии, однако сохранившиеся свидетельства говорят о том, что это было не так; почти наверняка отец Лавкрафта умер от пареза, одной из форм нейросифилиса.</p>
                <p class="bioFont">После смерти отца воспитание мальчика легло на плечи матери, двух теток и особенно деда, видного промышленника Уиппла Ван Бюрена Филлипса. Лавкрафт был очень развит: в два года он начал читать стихи наизусть, в три - книги, а в шесть-семь лет писал сам. Самым ранним его увлечением были "Арабские ночи"(ориг. One Thousand and One Nights), которые он прочитал к пяти годам; именно в это время он взял себе псевдоним "Абдул Альхазред", который впоследствии стал автором мифического "Некрономикона". Однако уже в следующем году его арабские интересы затмило увлечение греческой мифологией, вдохновлённое "Эпохами басен" (ориг. The Age of Fable) Булфинча, а также из детских версий "Илиады" и "Одиссеи". Его самое раннее литературное произведение, "Поэма об Улиссе" (1897 г.), представляет собой пересказ "Одиссеи" в 88 строках внутренне рифмованного стиха. Но к этому времени Лавкрафт уже был знаком с фантастикой, и его первый рассказ, не сохранившийся до наших дней, "Знатный соглядатай"(ориг. The Noble Eavesdropper), возможно, датируется уже 1896 годом (1897 г. по некоторым данным). Интерес к странному привил ему дед, который развлекал Лавкрафта несерьезными рассказами в готическом стиле.</p>>
            </div>
            <div class="col-md-2 cu-sidebar-right text-end">
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
