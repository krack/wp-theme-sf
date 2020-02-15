$(document).ready(function () {
    $("li", "nav").click(function () {
        $("ul", this).toggleClass("open");

    });
});