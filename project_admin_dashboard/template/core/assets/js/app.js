
$(".hide-sidebar-btn").click(function () {
    $(".sidebar").animate({ marginLeft: "-100%" });
})

function go(url) {
    setTimeout(function () {
        location.href = `${url}`;
    }, 500)
}

// const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
// const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

$(".full-screen-btn").click(function () {
    let current = $(this).closest(".card");
    current.toggleClass("full-screen-card");
    if (current.hasClass("full-screen-card")) {
        $(this).removeClass("feather-maximize-2");
        $(this).addClass("feather-minimize");
        console.log("Shi");
    }
    else {
        $(this).removeClass("feather-minimize");
        $(this).addClass("feather-maximize-2");
        console.log("Ma shi");
    }

});
// let screenHeight = $(window).height();
// let currentMenuHeight = $('.nav-menu .active').offset().top;
// if (currentMenuHeight > screenHeight * 0.8) {
//     $('.sidebar').animate({
//         scrollTop: currentMenuHeight
//     }, 1000)

// }