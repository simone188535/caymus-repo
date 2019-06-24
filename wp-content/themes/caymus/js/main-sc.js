//Home page
setTimeout(function(){
         $('.carousel-control.right').click();
      },6000);
//our company
$(".ourCompany-toggle").click(function () {
if($(this).hasClass('minus'))
    {
        $(this).removeClass("minus");
    }else{
        $(".ourCompany-toggle").removeClass("minus");
        $(this).addClass("minus");
  }
});

//news

$(".news-toggle").click(function () {
if($(this).find(".continue-reading").hasClass('minus'))
    {
        $(this).find(".continue-reading").removeClass("minus");
    }else{
        //$(".continue-reading").removeClass("minus");
        $(this).find(".continue-reading").addClass("minus");
  }
});

$(document).ready(function() {
  if(window.location.hash == $('#collapse1').attr('href')) {
      $('#collapse1').trigger('click');
   }else if(window.location.hash == $('#collapse2').attr('href')){
      $('#collapse2').trigger('click');
   }else if(window.location.hash == $('#collapse3').attr('href')){
      $('#collapse3').trigger('click');
   }else if(window.location.hash == $('#collapse4').attr('href')){
      $('#collapse4').trigger('click');
   }
 });
//portfolio
 $(document).ready(function(){
    $("#portfolio").hide();
 });

// $("#exited-tab").click(function(){
//     $(".all").show();
//     $(".current").hide();
//     $("#portfolio").show();
// });
$("#current-tab").click(function(){
    $("#portfolio").hide();
});

$("#exited-tab").click(function(){
    $(".all").hide();
    $(".current").hide();
    $("#portfolio").hide();
});
$("#all-tab").click(function(){
    $("#portfolio").show();
    $(".all").show(300);
});
$("#all-filter").click(function(){
    $("#filter-nav li").removeClass("disabled");
    $("#all-filter").addClass("disabled");
    $(".all").show();
});
$("#bs-filter").click(function(){
    //$(".all").show();
    $("#filter-nav li").removeClass("disabled");
    $("#bs-filter").addClass("disabled");
    $(".hs").hide(300);
    $(".consumer").hide(300);
    $(".niche").hide(300);
    $(".bs").show(1000);
});
$("#hs-filter").click(function(){
    //$(".all").show();
    $("#filter-nav li").removeClass("disabled"); 
    $("#hs-filter").addClass("disabled");
    $(".bs").hide(300);
    $(".consumer").hide(300);
    $(".niche").hide(300);
    $(".hs").show(1000);
});
$("#consumer-filter").click(function(){
    //$(".all").show();
    $("#filter-nav li").removeClass("disabled");
    $("#consumer-filter").addClass("disabled");
    $(".bs").hide(300);
    $(".hs").hide(300);
    $(".niche").hide(300);
    $(".consumer").show(1000);
});
$("#niche-filter").click(function(){
    //$(".all").show();
    $("#filter-nav li").removeClass("disabled");
    $("#niche-filter").addClass("disabled");
    $(".bs").hide(300);
    $(".hs").hide(300);
    $(".consumer").hide(300);
    $(".niche").show(1000);
});
$("#case-study-tab").click(function(){
    $("#portfolio").hide();
});

$(".portfolio-toggle").click(function () {
if($(this).hasClass('minus'))
    {
        $(this).removeClass("minus");
    }else{
        $(".portfolio-toggle").removeClass("minus");
        $(this).addClass("minus");
  }
});   