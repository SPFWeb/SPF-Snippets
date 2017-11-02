$(document).ready(function(){

    var ios = navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/); // have to skip on iOS; it detects dom-change on hover and prevents click
        if (!(ios)) {
          $(this, '.main-nav').on('mouseenter loadimg', '.sub-nav-new.has-img .sub-nav-item-link', function(){
            var $imgCont = $(this).closest('.sub-nav-new').find('.rep-img').empty();
            if(typeof $(this).data('img') != 'undefined') { $imgCont.append('<img src="'+$(this).data('img')+'+"/>'); }
          });
        } else {
          $(this,'.main-nav .sub-nav-new.has-img').removeClass('has-img').find('.rep-img').remove();
        }

     //Preload sub-nav images on show, and load first one
     $(document).on('mouseenter', '.main-nav .uk-navbar-dropdown.dropdown', function(){
       $(this).find('.sub-nav-item-link[data-img]').each(function(){
         $('<img/>')[0].src = $(this).data('img');
       }).first().trigger('loadimg');
     });
 }); 
