$(document).ready(function () {
    console.log("---------->", $("na li"));
    $("li", "nav").click(() => {
        $("ul", this).toggleClass("open")
    });
});