//$(".scroll").click(function(e) {
//        e.preventDefault();
//        $("html, body").animate({
//            scrollTop: $(this.hash).offset().top
//        }, 800);
//    });
//
//function currentPagina() {
//
//    var navKeuze = location.search.substring(5);
//
//    switch (navKeuze) {
//
//        case 'contact':
//            document.getElementById("nav_contact").style.borderBottom = "5px solid white";
//            break;
//        case 'overmij':
//            document.getElementById("nav_info").style.borderBottom = "5px solid white";
//            break;
//        case 'werk':
//            document.getElementById("nav_werk").style.borderBottom = "5px solid white";
//            break;
//        case 'home':
//            document.getElementById("nav_home").style.borderBottom = "5px solid white";
//            break;
//        default:
//
//    }
//}

$(".scroll").click(function(e) {
        e.preventDefault();
        $("html, body").animate({
            scrollTop: $(this.hash).offset().top
        }, 800);
    });

function currentPagina() {

    var navKeuze = location.search.substring(5);

    switch (navKeuze) {

        case 'contact':
            document.getElementById("nav_contact").style.webkitAnimation = "kleurVeranderen 10s infinite alternate";
            break;
        case 'overmij':
            document.getElementById("nav_info").style.webkitAnimation = "kleurVeranderen 10s infinite alternate";
            break;
        case 'werk':
            document.getElementById("nav_werk").style.webkitAnimation = "kleurVeranderen 10s infinite alternate";
            break;
        case 'home':
            document.getElementById("nav_home").style.webkitAnimation = "kleurVeranderen 10s infinite alternate";
            break;
        default:

    }
}
