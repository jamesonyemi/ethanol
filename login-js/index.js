// Toggle Function
$('.toggle').click(function(){
  // Switches the Icon
  $(this).children('i').toggleClass('fa-pencil');
  // Switches the forms  
  $('.form').animate({
     height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
     opacity: "toggle"
  }, "slow");
});

// Hides both icon and text and animate 

$('.tooltip').click(function(){

$(this).children('span').animate('tooltip');

 $('.tooltip').hide({
     height: "tooltip",
    'padding-top': 'tooltip',
    'padding-bottom': 'tooltip',
    opacity: "tooltip",
  }, "slow");
});

