$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#menu-toggle").toggleClass('menu-active');
    $("#wrapper").toggleClass("toggled");
});
$(function () {
    $('.content-loader-wrapper').addClass('hide-active');
});

$('#customer-collapse-btn').click(function () { 
    $('#customer-collapse-logo').toggleClass('collapse-active');
});

$('#transaction-collapse-btn').click(function () { 
    $('#transaction-collapse-logo').toggleClass('collapse-active');
});