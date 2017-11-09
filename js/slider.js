//SCROLLBACK BUTTON

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}



/*Partenaires*/

$(function () {
        setInterval(function () {
            $(".slider-partenaires ul").animate({
                marginLeft: -350
            }, 800, function () {
                $(this).css({
                    marginLeft: 0
                }).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });

