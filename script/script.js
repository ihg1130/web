$(document).ready(function () {
    $(".nav > ul > li").mouseover(function () {
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function () {
        $(this).find(".submenu").stop().slideUp(200);
    });

    slide
    var currentIndex = 0;

    setInterval(function () {
        if (currentIndex < 2) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }

        var slidePosition = currentIndex * (-700) + "px";
        $(".slide-cont").animate({ top: slidePosition }, 800);

    }, 3000);



});




