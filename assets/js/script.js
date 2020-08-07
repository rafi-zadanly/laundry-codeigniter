$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#menu-toggle").toggleClass('menu-active');
    $("#wrapper").toggleClass("toggled");
});
$(function () {
    $('.content-loader-wrapper').addClass('hide-active');
});

$('#manage-collapse-btn').click(function () { 
    $('#manage-collapse-logo').toggleClass('collapse-active');
});

$('#transaction-collapse-btn').click(function () { 
    $('#transaction-collapse-logo').toggleClass('collapse-active');
});