$(document).ready(function(){
    $(".gamb").click(function(){
        $(".main-menu").toggleClass('toggle');
        $("body").toggleClass('main-menu-toggle');
    });

    $(".has-children").click(function () {
        $(".childrens").toggleClass('open');
    })

});