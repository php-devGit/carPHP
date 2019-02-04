$(document).ready(function () {
    $(".alert").addClass("in").fadeOut(4500);

    /* swap open/close side menu icons */
    $('[data-toggle=collapse]').click(function () {
        // toggle icon
        $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });
});

let checkUrl = () => {
    if (window.location.href.indexOf("success=true") > -1) {
        alert("Действие успешно выполнено.");
    }
    if (window.location.href.indexOf("success=false") > -1) {
        alert("Действие не выполнено.");
    }
};