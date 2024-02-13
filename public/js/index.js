var rightKey, leftKey, topKey, bottomKey;

$(document).ready(function () {

    //Set up the triggers for the arrow keys
    // $(document).keydown(function (e) {
    //     if (e.keyCode == 37 && typeof leftKey === 'function') {
    //         leftKey();
    //     } else if (e.keyCode == 38 && typeof topKey === 'function') {
    //         topKey();
    //     } else if (e.keyCode == 39 && typeof rightKey === 'function') {
    //         rightKey();
    //     } else if (e.keyCode == 40 && typeof bottomKey === 'function') {
    //         bottomKey();
    //     }
    // });

    // Возможная смена вида кнопок на страницах
    // let butt = {
    //     'but1' : 'img/buttons/buttonMain2323232.png',
    //     'but2' : 'URL',
    //     'but3' : 'URL',
    //     'but4' : 'URL',
    //     'but5' : 'URL',
    // };

    parallax
        // .add($("#features"))
        .add($("#home"))
        .add($("#books"));
    // .add($("#boo"))
    // .add($("#sandbox"))
    // .add($("#me"));

    // parallax.background = $("body");

    //Clears each page navigation on load
    parallax.preload = function () {
        rightKey = leftKey = topKey = bottomKey = "";
        $(".control").hide();
    };


    //Setting up page navigation
    parallax.home.onload = function () {
        // setTop("books", "Фильмы");
        setBottom("creatures", "Бестиарий");
        setLeft("books", "Библиография");
        setRight("movies", "Экранизации");
    };

    parallax.books.onload = function () {
        setRight("home", "Домой");
        setLeft("bio", "Биография");
    };
    //
    // parallax.features.onload = function () {
    //     setLeft("index", "Home");
    //     setRight("me", "The Guy");
    // };
    //
    // parallax.me.onload = function () {
    //     setLeft("features", "Features");
    //     setRight("index", "Home");
    // };


    //Sets the correct triggers for the arrows, plus arrow keys
    function setRight(page, text, url = false) {
        $("#rightText").text(text);
        $("#rightControl").show().unbind('click').click(function () {
            parallax[page].right();
        });
        rightKey = function () {
            parallax[page].right();
        };
    }

    function setLeft(page, text) {
        $("#leftText").text(text);
        $("#leftControl").show().unbind('click').click(function () {
            parallax[page].left();
        });
        leftKey = function () {
            parallax[page].left();
        };
    }

    function setTop(page, text) {
        $("#topText").text(text);
        $("#topControl").show().unbind('click').click(function () {
            parallax[page].top();
        });
        topKey = function () {
            parallax[page].top();
        };
    }

    function setBottom(page, text, url = false) {
        // if (url) {
        //     $("#bottomArrow").attr('src', butt.but1);
        //     // https://api.jquery.com/toggleClass/
        // }
        $("#bottomText").text(text);
        $("#bottomControl").show().unbind('click').click(function () {
            parallax[page].bottom();
        });
        bottomKey = function () {
            parallax[page].bottom();
        };
    }

    //Анимации подсветки и затухания
    $("#bottomControl").mouseenter(function () {
        // $("#bottomControl").stop().fadeTo(300, 1);
        $("#bottomText").stop().fadeTo(500, 1);
    }).mouseleave(function () {
        // $("#bottomControl").stop().fadeTo(600, 0.2);
        $("#bottomText").stop().fadeTo(700, 0);
    });

    $("#leftControl").mouseenter(function () {
        // $("#leftControl").stop().fadeTo(300, 1);
        $("#leftText").stop().fadeTo(500, 1);
    }).mouseleave(function () {
        // $("#leftControl").stop().fadeTo(600, 0.2);
        $("#leftText").stop().fadeTo(700, 0);
    });

    $("#rightControl").mouseenter(function () {
        // $("#rightButton").stop().fadeTo(600, 1);
        $("#rightText").stop().fadeTo(500, 1);
    }).mouseleave(function () {
        // $("#rightButton").stop().fadeTo(600, 0.2);
        $("#rightText").stop().fadeTo(700, 0);
    });

    $("#topControl").mouseenter(function () {
        // $("#topControl").stop().fadeTo(300, 1);
        $("#topText").stop().fadeTo(500, 1);
    }).mouseleave(function () {
        // $("#topControl").stop().fadeTo(600, 0.2);
        $("#topText").stop().fadeTo(700, 0);
    });


    $(".control").hide();
    parallax.home.show();

});
