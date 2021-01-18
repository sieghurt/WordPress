
(function ($) {
  'use strict';
  // Sidenav focus Javascript
  jQuery('.sidebar-menu').hide();
  window.lastTabbable = '';
  var findInsiders = function(elem) {
    
    var tabbable = elem.find('input, button, a').filter(':visible');
    
    var firstTabbable = tabbable.first();

    if(tabbable.last().next().children().length  == 0){
       lastTabbable  = tabbable.last();
    }
    else{
      tabbable.last().focus(function(){
        // alert('test');
        $(this).addClass('show');
        tabbable.last().next().addClass('show');
      })

      tabbable.last().next().children().last().focusout(function(){
        tabbable.last().removeClass('show');
        tabbable.last().next().removeClass('show');
      });
      lastTabbable  = tabbable.last().next().children().last();     
    }

    
    /*set focus on first input*/
    firstTabbable.focus();

    /*redirect last tab to first input*/
    lastTabbable.on('keydown', function (e) {
      if ((e.which === 9 && !e.shiftKey)) {
        e.preventDefault();
        firstTabbable.focus();
      }
    });

    /*redirect first shift+tab to last input*/
    firstTabbable.on('keydown', function (e) {
      if ((e.which === 9 && e.shiftKey)) {
        e.preventDefault();
        lastTabbable.focus();
      }
    });

  };
  
  
  jQuery('.icon.bars').click(function(e){
    e.preventDefault(); 
    jQuery('.sidebar-menu').addClass('active');
    jQuery('.sidebar-menu').show();
    findInsiders($('.sidebar-menu'));
  });
  
  jQuery('.cross').on( "click", function(e){
    e.preventDefault();
    jQuery('.sidebar-menu').removeClass('active');
    jQuery('.sidebar-menu').hide();
    jQuery(".icon.bars").focus();
  });

})(window.jQuery);