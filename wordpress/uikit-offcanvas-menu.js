// Off Canvas Menu overides to the defrault Wordpress Navigation Menu

jQuery(function($){
	$(document).ready(function(){
		var newdiv1 = $( "<div class='uk-offcanvas-bar' id='hello'>" );
      	var social = '<div class="uk-child-width-auto uk-grid-medium uk-margin uk-flex-left uk-grid" uk-grid=""><div class="uk-first-column"><a uk-icon="icon: facebook" href="https://www.facebook.com/example" target="_blank" class="el-link uk-icon-link uk-icon"></a></div><div><a uk-icon="icon: instagram" href="https://instagram.com/example/" target="_blank" class="el-link uk-icon-link uk-icon"></a></div><div><a uk-icon="icon: twitter" href="https://twitter.com/exampleNZ" target="_blank" class="el-link uk-icon-link uk-icon"></a></div><div><a uk-icon="icon: youtube" href="https://www.youtube.com/user/example?feature=mhee" target="_blank" class="el-link uk-icon-link uk-icon"></a></div><div><a uk-icon="icon: tripadvisor" href="https://www.tripadvisor.co.nz/" target="_blank" class="el-link uk-icon-link uk-icon"></a></div></div>';
        $("#widget-nav_menu-4").prepend(newdiv1);
        $("#thisone").addClass("uk-offcanvas-content");
        $("#widget-nav_menu-4 > ul").attr('id', 'thisone');
        $('#hello').append( $('#thisone') ); 
		$( '#thisone' ).removeClass( "uk-nav-parent-icon uk-nav-accordion" );
		$( '#widget-nav_menu-4' ).removeClass();
      	$("#widget-nav_menu-4").attr('uk-offcanvas', 'flip: true; overlay: true;');
      	$("#thisone").append(social);

	});
 });

 
 
 
