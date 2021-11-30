// filter projecten
$(function () {
    $("li").on("click", function () {
        var text = $(this).text();
        $('div[class*="filter"]').hide();
        if (text === "ALL") {
            $('div[class*="filter"]').show();
        } else
            $(".filter-" + text.toLowerCase()).show();
    });
});
