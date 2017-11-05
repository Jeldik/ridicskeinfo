$(document).ready(function () {
    $(".navbar-nav").find("a").each(function () {
        if ($(this).attr("href") == window.location.href) {
            $(this).attr("class", "test actived");
        }
    })
});
