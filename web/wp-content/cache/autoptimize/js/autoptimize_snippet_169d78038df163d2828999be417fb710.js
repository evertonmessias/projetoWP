window.onload=function(){var url=window.location.href;console.log(url);$(window).scroll(function(){if($(this).scrollTop()>40){$('#site-header').addClass("menu-fixo");}
else{$('#site-header').removeClass("menu-fixo");}
if($(window).scrollTop()>400){$('#site-header').fadeOut();}else{$('#site-header').fadeIn();}});};