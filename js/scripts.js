

$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 90){
             $('.navbar').addClass('navbar-opacity');
        }
		
        if($(this).scrollTop() < 90){
             $('.navbar').removeClass('navbar-opacity');  
        }
    });
});


//------------ Scroll To ------------//


$("#logo").click(function() {
    $('html, body').animate({
        scrollTop: $("#inicio").offset().top
    }, 1200);
});


$("#home").click(function() {
    $('html, body').animate({
        scrollTop: $("#inicio").offset().top
    }, 1000);
});


$("#clients").click(function() {
    $('html, body').animate({
        scrollTop: $("#clientes").offset().top
    }, 1000);
});


$("#services").click(function() {
    $('html, body').animate({
        scrollTop: $("#servicios").offset().top
    }, 1000);
});


$("#contact").click(function() {
    $('html, body').animate({
        scrollTop: $("#contacto").offset().top
    }, 1000);
});

//------------ Scroll To ------------//




$('.section').click(function () {
    $('.section').removeClass('active');
    $(this).addClass('active');
});

$('#logo').click(function () {
    $('.section').removeClass('active');
    $('#home').addClass('active');
});



