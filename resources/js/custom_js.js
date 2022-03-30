$(".side-bar-btn").click(function(){

    $('.sidebar').animate({marginLeft: 0});
})

$(".hide-bar-btn").click(function(){

    $('.sidebar').animate({marginLeft: "-100%"});
})

function go(url) {
   setTimeout(() => {
        location.href = `${url}` 
   }, 2000);
}

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

if($(".nav-menu .active").offset() != undefined){
    let screen_height = $(window).height()
    let current_menu_height = $(".nav-menu .active").offset().top;

    if(current_menu_height > screen_height * 0.8){
        $(".sidebar").animate({
            scrollTop:current_menu_height
        }, 1000);
    }

}
