// move
var moves = document.getElementsByClassName("move");
document.onmousemove = function(){
    var x = event.clientX * 20 / window.innerWidth + "px";
    var y = event.clientY * 20 / window.innerHeight + "px";
    //event.clientX => get the horizontal coordinate of the mouse
    //event.clientY => get the Vertical coordinate of the mouse
    //window.innerWidth => get the browser width
    //window.innerHeight => get the browser height

    for(var i=0;i<moves.length;i++){
        moves[i].style.transform = "translate(-"+x+",-"+y+")";
    }
}

// cursor
const { gsap } = window;

const cursorOuter = document.querySelector(".cursor--large");
const cursorInner = document.querySelector(".cursor--small");
let isStuck = false;
let mouse = {
    x: -100,
    y: -100,
};

// Just in case you need to scroll
let scrollHeight = 0;
window.addEventListener('scroll', function(e) {
    scrollHeight = window.scrollY
})

let cursorOuterOriginalState = {
    width: cursorOuter.getBoundingClientRect().width,
    height: cursorOuter.getBoundingClientRect().height,
};
const buttons = document.querySelectorAll(".square-action");
const links = document.querySelectorAll("a");

links.forEach((link) => {
    link.addEventListener("pointerenter", handleLinkMouseEnter);
    link.addEventListener("pointerleave", handleLinkMouseLeave);
});

buttons.forEach((button) => {
    button.addEventListener("pointerenter", handleMouseEnter);
    button.addEventListener("pointerleave", handleMouseLeave);
});

document.body.addEventListener("pointermove", updateCursorPosition);
document.body.addEventListener("pointerdown", () => {
    gsap.to(cursorInner, 0.15, {
        scale: 2,
    });
});
document.body.addEventListener("pointerup", () => {
    gsap.to(cursorInner, 0.15, {
        scale: 1,
    });
});

function updateCursorPosition(e) {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
}

function updateCursor() {
    gsap.set(cursorInner, {
        x: mouse.x,
        y: mouse.y,
    });

    if (!isStuck) {
        gsap.to(cursorOuter, {
            duration: 0.15,
            x: mouse.x,
            y: mouse.y,
        });
    }

    requestAnimationFrame(updateCursor);
}

updateCursor();

function handleMouseEnter(e) {
    isStuck = true;
    const targetBox = e.currentTarget.getBoundingClientRect();
    $(e.target).closest('.container-fluid').parent().addClass('darken');
    $(e.target).next().addClass('opacity-1');
    if ($(e.target).next().hasClass('square-action-text')) {
        gsap.to(cursorOuter, 0.2, {
            x: targetBox.left + targetBox.width / 2,
            y: (targetBox.top + targetBox.height / 2),
            width: targetBox.width,
            height: targetBox.width,
            borderRadius: 0,
            borderColor: "white",
            mixBlendMode: "normal",
            scale: 6
        });
    } else {
    gsap.to(cursorOuter, 0.2, {
        x: targetBox.left + targetBox.width / 2,
        y: (targetBox.top + targetBox.height / 2),
        width: targetBox.width,
        height: targetBox.width,
        borderRadius: 0,
        borderColor: "white",
        mixBlendMode: "normal"
    });
    }
}

function handleMouseLeave(e) {
    isStuck = false;
    $(e.target).closest('.container-fluid').parent().removeClass('darken');
    $(e.target).next().removeClass('opacity-1');
    gsap.to(cursorOuter, 0.2, {
        width: cursorOuterOriginalState.width,
        height: cursorOuterOriginalState.width,
        scale: 1
    });
}

function handleLinkMouseEnter(e) {
    if (!$(e.target).hasClass("square-action")) {
        gsap.to(cursorOuter, 0.2, {
            borderWidth: 5
        });
    } else {
        gsap.to(cursorOuter, 0.2, {
            borderWidth: 1
        });
    }
}

function handleLinkMouseLeave(e) {
    gsap.to(cursorOuter, 0.2, {
        borderWidth: 1
    });
}

// preloader
$(document).ready(function () {
    function loaderSpinner() {
        $(window).load(function() {
            var loader = $('.loader');
            var wHeight = $(window).height();
            var wWidth = $(window).width();
            var i = 0;
            /*Center loader on half screen */
            loader.css({
                top: wHeight / 2 - 2.5,
                left: wWidth / 2 - 200
            })

            do{
                loader.animate({
                    width: i
                },10)
                i+=40;
            } while(i <= 400)
            if(i > 402){
                loader.animate({
                    left: 0,
                    width: '100%'
                })

                loader.animate({
                    top: '0',
                    height: '100vh'
                })
            }

            /* This line hide loader and show content */
            setTimeout(function(){
                ($('.loader-wrapper')).css("background-color", "transparent");
                (loader).fadeOut();
                setTimeout(function () {
                    ($('.loader-wrapper')).css("display", "none");
                }, 300)
                /*Set time in milisec */
            },1200);
        });

    }

    if (localStorage.getItem('bsm-lecentre-preloader') !== 'true') {
        ($('.loader-wrapper')).css("display", "block");
        loaderSpinner();
    }
    localStorage.setItem('bsm-lecentre-preloader', 'true');

    // ripple
    $('.water').ripples({
        resolution: 512,
        dropRadius: 20,
        perturbance: 0.08,
    });

    $('.home-main').ripples({
        resolution: 512,
        dropRadius: 20,
        perturbance: 0.003,
    });
});

