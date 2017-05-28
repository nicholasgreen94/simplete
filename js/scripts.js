$(function() {
  
  var $menu = $('#menu_button');
  var $close = $('#close');
  $menu.click(function() {
    $('.menu').toggleClass('menu_open');
    $('main').toggleClass('open');
  });
  
  $close.click(function() {
    $('.menu').toggleClass('menu_open');
    $('main').toggleClass('open');
  });
  
  
  
});