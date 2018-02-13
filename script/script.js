$(document).ready(function() {
    
   $(".scroll").click(function(e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: $(this.hash).offset().top
        }, 800);
    });
    
    
//
//    $(".secondTitel").delay(function(){
//        $(".typewriter").addClass("titel2");
//    }, 2)
});


$(".navButtons").click(function() {
    $(".selected").removeClass("selected");
    $(".selectedLogo").removeClass("selectedLogo");
    $(this).addClass("selected");
});

$(".imgLogo").click(function() {
    $(".selectedLogo").removeClass("selectedLogo");
    $(".selected").removeClass("selected");
    $(this).addClass("selectedLogo");
});


$('#werk .werk_alles a').click(function() {
        var itemId = $(this).attr('href');
        $(itemId).addClass('modaalOpen');
    });

$('.close').click(function(){
    $('.modaalWerk').removeClass("modaalOpen");
});








//
//var modal1 = document.getElementById('modaal1');
//var modal2= document.getElementById('modaal2');
//var modal3 = document.getElementById('modaal3');
//var modal4 = document.getElementById('modaal4');
//
//var span = document.getElementsByClassName("close")[0];
//
//function modaal1() {
//    modal1.style.display = "block";
//}
//span.onclick = function() {
//    modal1.style.display = "none";
//}
//window.onclick = function(event) {
//    if (event.target == modal1) {
//        modal1.style.display = "none";
//    }
//}
//
//function modaal2() {
//    modal2.style.display = "block";
//}
//span.onclick = function() {
//    modal2.style.display = "none";
//}
//window.onclick = function(event) {
//    if (event.target == modal2) {
//        modal2.style.display = "none";
//    }
//}
//
//function modaal1() {
//    modal1.style.display = "block";
//}
//span.onclick = function() {
//    modal1.style.display = "none";
//}
//window.onclick = function(event) {
//    if (event.target == modal) {
//        modal.style.display = "none";
//    }
//}
//
//function modaal1() {
//    modal1.style.display = "block";
//}
//span.onclick = function() {
//    modal1.style.display = "none";
//}
//window.onclick = function(event) {
//    if (event.target == modal) {
//        modal.style.display = "none";
//    }
//}
//
