window.onload=function(){var url=window.location.href;var teste=/\/$/.test(url);if(teste){$("#top-bar").css({"display":"block"});}else{$("#top-bar").css({"display":"none"});}
$(window).scroll(function(){if($(this).scrollTop()>40){$('#site-header').addClass("menu-fixo");}
else{$('#site-header').removeClass("menu-fixo");}
if($(window).scrollTop()>400){$('#site-header').fadeOut();}else{$('#site-header').fadeIn();}});};