$("#s__btn").click(function () {
    $("#s__content").toggle();
});

$("#btn_sub").click(function () {
    $("#sub").toggle();
});

$('#blogCarousel').carousel({
    interval: 4000
});

$(window).on('load',function(){
    $('#result').modal('show');
});
