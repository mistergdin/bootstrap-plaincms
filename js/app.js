$(function() {
    var page = $('#page').val();
    $(".nav li").removeClass("active");
    $('.nav-'+page).addClass('active');
});