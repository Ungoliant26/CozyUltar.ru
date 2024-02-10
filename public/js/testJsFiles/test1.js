$('#rightControl').mouseenter(function(){
    if($('#rightText').css('display')=== "block"){
        $('#rightText').fadeIn('normal');
    }
});

$('#rightControl').mouseout(function(){
    if($('#rightText').css('display')=== "none") {
        $('#rightText').fadeTo('normal');
    }
    });

$('#rightControl').mouseenter(function(){
    if($('#rightText')
        .css('display')=== "none"){
        $('#rightText').fadeIn('normal');
    }
});

$('#rightControl').mouseout(function(){
    if($('#rightText').css('display')=== "block") {
        $('#rightText').fadeOut('normal');
    }
});
