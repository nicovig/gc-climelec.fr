var TEXTE1 = "TEXTE1 <br> Titre Entretien";

var TEXTE2 = "TEXTE2 <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at libero et nunc elementum venenatis in in arcu. Proin lobortis sagittis nisi. Fusce porta eget leo at pellentesque. Vestibulum eget massa quis lorem pulvinar suscipit sed quis libero. Vivamus eget est ligula. Phasellus eget risus at nibh ultricies sagittis.";

var TEXTE3 = "TEXTE3 <br> Titre Dépannage";

var TEXTE4 = "TEXTE4 <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at libero et nunc elementum venenatis in in arcu. Proin lobortis sagittis nisi. Fusce porta eget leo at pellentesque. Vestibulum eget massa quis lorem pulvinar suscipit sed quis libero. Vivamus eget est ligula. Phasellus eget risus at nibh ultricies sagittis.";

/* ################################################################################# */
/* ################################################################################# */
/* ################################################################################# */
/* ######################## NE PAS TOUCHER !!!!! ################################### */
/* ################################################################################# */
/* ################################################################################# */
/* ################################################################################# */
function insertTextChauffage () {
    document.getElementById('text1').innerHTML = TEXTE1;
    document.getElementById('text2').innerHTML = TEXTE2;
    document.getElementById('text3').innerHTML = TEXTE3;
    document.getElementById('text4').innerHTML = TEXTE4;
}

$(document).ready(function() {
    // navigation click actions
    $('.scroll-link').on('click', function(event){
        event.preventDefault();
        var sectionID = $(this).attr("data-id");
        scrollToID('#' + sectionID, 750);
    });
    // scroll to top action
    $('.scroll-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop:0}, 'slow');
    });
    // mobile nav toggle
    $('#nav-toggle').on('click', function (event) {
        event.preventDefault();
        $('#main-nav').toggleClass("open");
    });
});
// scroll function
function scrollToID(id, speed){
    var offSet = 50;
    var targetOffset = $(id).offset().top - offSet;
    var mainNav = $('#main-nav');
    $('html,body').animate({scrollTop:targetOffset}, speed);
    if (mainNav.hasClass("open")) {
        mainNav.css("height", "1px").removeClass("in").addClass("collapse");
        mainNav.removeClass("open");
    }
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}