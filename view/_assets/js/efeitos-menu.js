$(document).ready(function(){
   // CARREGANDO AS DIVS
   $(".menu-mapa").show();
   $(".menu-lojas").hide();
   $(".menu-servicos").hide();
   $(".menu-cinema").hide();
   //$(".menu-shopping").hide();

   // VERIFICANDO OS CLICKS
   $(".mapa").click(function() {
   		$(".menu-mapa").toggle(1000);
         $(".menu-lojas").hide();
         $(".menu-servicos").hide();
         $(".menu-cinema").hide();
         //$(".menu-shopping").hide();
   });
   $(".lojas").click(function() {
   		$(".menu-lojas").toggle(1000);
         $(".menu-mapa").hide();
         $(".menu-servicos").hide();
         $(".menu-cinema").hide();
         //$(".menu-shopping").hide();
   });
   $(".servicos").click(function() {
         $(".menu-servicos").toggle(1000);
         $(".menu-mapa").hide();
         $(".menu-lojas").hide();
         $(".menu-cinema").hide();
         //$(".menu-shopping").hide();
   });
   $(".cinema").click(function() {
         $(".menu-cinema").toggle(1000);
         $(".menu-mapa").hide();
         $(".menu-lojas").hide();
         $(".menu-servicos").hide();
         //$(".menu-shopping").hide();
   });
   /*$(".shopping").click(function() {
         $(".menu-shopping").toggle(1000);
         $(".menu-mapa").hide();
         $(".menu-lojas").hide();
         $(".menu-servicos").hide();
         $(".menu-cinema").hide();
   });*/
});